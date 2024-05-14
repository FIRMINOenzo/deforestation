<?php

class PostByTitleRoute
{
  private PostService $postService;

  public function __construct(PostService $postService)
  {
    $this->postService = $postService;
  }

  public function byTitle(string $title): array
  {
    $response = $this->postService->getPostsByTitle($title);

    $posts = [];

    foreach ($response as $post) {
      $posts[] = [
        new Post($post['id'], $post['title'], $post['content'], $post['author_id'], $post['created_at'])
      ];
    }
  }
}
