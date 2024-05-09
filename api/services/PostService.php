<?php

class PostService
{
  private PDO $conn;

  public function __construct(PDO $conn)
  {
    $this->conn = $conn;
  }

  public function createPost(Post $post): Post
  {
    $this->conn->beginTransaction();

    $stmt = $this->conn->prepare("INSERT INTO posts(title, content, author_id) VALUES (:title, :content, :author_id);");
    $stmt->bindValue(":title", $post->getTitle());
    $stmt->bindValue(":content", $post->getContent());
    $stmt->bindValue(":author_id", $post->getAuthorId());
    $stmt->execute();

    $post->setId($this->conn->lastInsertId());

    $this->conn->commit();

    return $post;
  }

  public function getPost(int $id): ?Post
  {
    $stmt = $this->conn->prepare("SELECT * FROM posts WHERE id = :id;");
    $stmt->bindValue(":id", $id);
    $stmt->execute();

    $post = $stmt->fetchObject(Post::class);

    if (!$post) {
      return null;
    }

    // get comments for post
    $stmt = $this->conn->prepare("SELECT * FROM comments WHERE post_id = :post_id;");
    $stmt->bindValue(":post_id", $post->getId());
    $stmt->execute();

    $comments = $stmt->fetchAll(PDO::FETCH_CLASS, Comment::class);

    $post->setComments($comments);

    return $post;
  }

  public function getPosts(): array
  {
    $stmt = $this->conn->prepare("SELECT * FROM posts;");
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_CLASS, Post::class);
  }

  public function getPostsByAuthor(int $authorId): array
  {
    $stmt = $this->conn->prepare("SELECT * FROM posts WHERE author_id = :author_id;");
    $stmt->bindValue(":author_id", $authorId);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_CLASS, Post::class);
  }

  public function updatePost(Post $post): Post
  {
    $this->conn->beginTransaction();

    $stmt = $this->conn->prepare("UPDATE posts SET title = :title, content = :content WHERE id = :id;");
    $stmt->bindValue(":title", $post->getTitle());
    $stmt->bindValue(":content", $post->getContent());
    $stmt->bindValue(":id", $post->getId());
    $stmt->execute();

    $this->conn->commit();

    return $post;
  }

  public function deletePost(int $id): void
  {
    $this->conn->beginTransaction();

    $stmt = $this->conn->prepare("DELETE FROM posts WHERE id = :id;");
    $stmt->bindValue(":id", $id);
    $stmt->execute();

    $this->conn->commit();
  }
}
