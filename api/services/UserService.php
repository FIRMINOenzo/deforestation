<?php

class UserService
{
  private PDO $conn;

  public function __construct(PDO $conn)
  {
    $this->conn = $conn;
  }

  public function loginOrRegister(User $user): User
  {
    $stmt = $this->conn->prepare("SELECT id FROM users WHERE email = :email;");
    $stmt->bindValue(":email", $user->getEmail());
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
      $user = $stmt->fetchObject(User::class);

      return $user;
    }

    return $this->register($user);
  }

  private function register(User $user): User
  {
    $this->conn->beginTransaction();

    $stmt = $this->conn->prepare("INSERT INTO users(name, email) VALUES (:name, :email);");
    $stmt->bindValue(":name", $user->getName());
    $stmt->bindValue(":email", $user->getEmail());
    $stmt->execute();

    $user->setId($this->conn->lastInsertId());

    $this->conn->commit();

    return $user;
  }
}
