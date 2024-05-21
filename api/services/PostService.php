<?php

class PostService
{
  private mysqli $conn;

  public function __construct(mysqli $conn)
  {
    $this->conn = $conn;
  }

  public function createPost(Post $post): Post
  {
    $this->conn->begin_transaction();

    $title = $post->getTitle();
    $content = $post->getContent();
    $authorId = $post->getAuthorId();
    $imagePath = $post->getImagePath();

    $stmt = $this->conn->prepare("INSERT INTO posts(title, content, author_id, image_path) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $title, $content, $authorId, $imagePath);
    $stmt->execute();

    $post->setId($this->conn->insert_id);

    $this->conn->commit();

    return $post;
  }

  public function getPost(int $id): ?Post
  {
    $stmt = $this->conn->prepare("SELECT * FROM posts WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $result = $stmt->get_result();
    $post = $result->fetch_object('Post');

    if (!$post) {
      return null;
    }

    // get comments for post
    $stmt = $this->conn->prepare("SELECT * FROM comments WHERE post_id = ?");
    $stmt->bind_param("i", $post->getId());
    $stmt->execute();

    $result = $stmt->get_result();
    $comments = $result->fetch_all(MYSQLI_ASSOC);

    $post->setComments($comments);

    return $post;
  }

  public function getPosts(): array
  {
    $stmt = $this->conn->prepare("SELECT * FROM posts");
    $stmt->execute();

    $result = $stmt->get_result();
    $data = $result->fetch_all(MYSQLI_ASSOC);

    $postsList = [];

    for ($i = 0; $i < count($data); $i++) {
      $post = new Post();
      $post->setId($data[$i]['id']);
      $post->setTitle($data[$i]['title']);
      $post->setDescription($data[$i]["description"]);
      $post->setContent($data[$i]['content']);
      $post->setAuthorId($data[$i]['author_id']);
      $postsList[$i] = $post;
    }

    return $postsList;
  }

  public function getPostsByAuthor(int $authorId): array
  {
    $stmt = $this->conn->prepare("SELECT * FROM posts WHERE author_id = ?");
    $stmt->bind_param("i", $authorId);
    $stmt->execute();

    $result = $stmt->get_result();
    return $result->fetch_all(MYSQLI_ASSOC);
  }

  public function updatePost(Post $post): Post
  {
    $this->conn->begin_transaction();

    $stmt = $this->conn->prepare("UPDATE posts SET title = ?, content = ? WHERE id = ?");
    $stmt->bind_param("ssi", $post->getTitle(), $post->getContent(), $post->getId());
    $stmt->execute();

    $this->conn->commit();

    return $post;
  }

  public function deletePost(int $id): void
  {
    $this->conn->begin_transaction();

    $stmt = $this->conn->prepare("DELETE FROM posts WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $this->conn->commit();
  }

  public function getPostsByTitle(string $title): array
  {
    $stmt = $this->conn->prepare("SELECT * FROM posts WHERE title LIKE %?%");
    $stmt->bind_param("s", $title);
    $stmt->execute();

    $result = $stmt->get_result();
    return $result->fetch_all(MYSQLI_ASSOC);
  }
}
