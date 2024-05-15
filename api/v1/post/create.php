<?php

class PostCreateRoutes
{
  private PostService $postService;

  public function __construct(PostService $postService)
  {
    $this->postService = $postService;
  }

  public function create(Post $post): void
  {
    $post = $this->postService->createPost($post);

    echo json_encode($post);
  }
}

// Path: api/v1/post/create.php

require_once __DIR__ . "/../../shared/database/database.php";
require_once __DIR__ . "/../../services/PostService.php";

$conn = connectDatabase();
$postService = new PostService($conn);
$postCreateRoutes = new PostCreateRoutes($postService);
