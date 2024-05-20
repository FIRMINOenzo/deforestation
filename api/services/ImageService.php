<?php

class ImageService
{
  public static function uploadImage($image, $path)
  {
    $imagePath = $path . basename($image['name']);
    $imageFileType = strtolower(pathinfo($imagePath, PATHINFO_EXTENSION));

    if ($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'jpeg') {
      return false;
    }

    echo $imagePath;
    echo var_dump($image);

    if (move_uploaded_file($image['tmp_name'], $imagePath)) {
      return $imagePath;
    }

    return false;
  }
}
