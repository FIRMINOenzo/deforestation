<?php

require_once __DIR__ . "/../../services/ImageService.php";
require_once __DIR__ . "/../../models/Post.php";
class PostCreateRoutes
{
  private PostService $postService;

  public function __construct(PostService $postService)
  {
    $this->postService = $postService;
  }

  public function create(): void
  {
    $postTitle = $_POST['title'] ?? '';
    $postContent = $_POST['content'] ?? '';
    $postDescription = $_POST['description'] ?? '';
    $postAuthorId = $_POST['author_id'] ?? 1;
    $postImage = $_FILES['image'] ?? '';

    $savedIamgePath = '';

    if ($postImage != '') {
      $publicPath = __DIR__ . "/../../public/";
      $savedIamgePath = ImageService::uploadImage($postImage, $publicPath);
      echo json_encode(['path' => $savedIamgePath]);
      return;
    }

    $post = new Post();
    $post->setTitle($postTitle);
    $post->setContent($postContent);
    $post->setDescription($postDescription);
    $post->setAuthorId($postAuthorId);
    $post->setImagePath($savedIamgePath);

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
