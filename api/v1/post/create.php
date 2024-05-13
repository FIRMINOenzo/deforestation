<?php

class PostCreateRoutes
{
  private PostService $postService;

  public function __construct(PostService $postService)
  {
    $this->postService = $postService;
  }

  public function create(): void
  {
    $data = json_decode(file_get_contents("php://input"));

    if (!isset($data->title) || !isset($data->content) || !isset($data->author_id)) {
      http_response_code(400);
      echo json_encode(["error" => "Please provide title, content and author_id"]);
      return;
    }

    $post = new Post();
    $post->setTitle($data->title);
    $post->setContent($data->content);
    $post->setAuthorId($data->author_id);

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

$postCreateRoutes->create();
