<?php

class PostByIdRoutes
{
  private PostService $postService;

  public function __construct(PostService $postService)
  {
    $this->postService = $postService;
  }

  public function byId(): void
  {
    $id = $_GET["id"] ?? null;

    if (!isset($id)) {
      http_response_code(400);
      echo json_encode(["error" => "Please provide id"]);
      return;
    }

    $post = $this->postService->getPost($id);

    echo json_encode($post);
  }
}

// Path: api/v1/post/id.php

require_once __DIR__ . "/../../shared/database/database.php";
require_once __DIR__ . "/../../services/PostService.php";

$conn = connectDatabase();
$postService = new PostService($conn);
$postByIdRoutes = new PostByIdRoutes($postService);

$postByIdRoutes->byId();
