<?php

class CommentService
{
  private PDO $conn;

  public function __construct(PDO $conn)
  {
    $this->conn = $conn;
  }

  public function createComment(Comment $comment): Comment
  {
    $this->conn->beginTransaction();

    $stmt = $this->conn->prepare("INSERT INTO comments(content, post_id, user_id) VALUES (:content, :post_id, :user_id);");
    $stmt->bindValue(":content", $comment->getContent());
    $stmt->bindValue(":post_id", $comment->getPostId());
    $stmt->bindValue(":user_id", $comment->getUserId());
    $stmt->execute();

    $comment->setId($this->conn->lastInsertId());

    $this->conn->commit();

    return $comment;
  }

  public function getComment(int $id): ?Comment
  {
    $stmt = $this->conn->prepare("SELECT * FROM comments WHERE id = :id;");
    $stmt->bindValue(":id", $id);
    $stmt->execute();

    $comment = $stmt->fetchObject(Comment::class);

    if (!$comment) {
      return null;
    }

    return $comment;
  }

  public function getComments(): array
  {
    $stmt = $this->conn->prepare("SELECT * FROM comments;");
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_CLASS, Comment::class);
  }

  public function getCommentsByPost(int $postId): array
  {
    $stmt = $this->conn->prepare("SELECT * FROM comments WHERE post_id = :post_id;");
    $stmt->bindValue(":post_id", $postId);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_CLASS, Comment::class);
  }

  public function getCommentsByUser(int $userId): array
  {
    $stmt = $this->conn->prepare("SELECT * FROM comments WHERE user_id = :user_id;");
    $stmt->bindValue(":user_id", $userId);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_CLASS, Comment::class);
  }
}
