<?php

$populateArray = [];

function populateArray()
{
  global $populateArray;

  $populateArray = [
     "userInserts" => [
      "INSERT INTO users (name, email, password) VALUES ('Usuário 1', 'usuario1@email.com', 'senha1')",
      "INSERT INTO users (name, email, password) VALUES ('Usuário 2', 'usuario2@email.com', 'senha2')",
      "INSERT INTO users (name, email, password) VALUES ('Usuário 3', 'usuario3@email.com', 'senha3')"
     ],
    "authorInserts" => [
      "INSERT INTO authors (name) VALUES ('Autor 1')",
      "INSERT INTO authors (name) VALUES ('Autor 2')",
      "INSERT INTO authors (name) VALUES ('Autor 3')"
    ],

    "postInserts" => [
      "INSERT INTO posts (title, content, author_id, description) VALUES ('Primeiro Post', 'Este é o conteúdo do primeiro post.', 1, 'descrição')",
      "INSERT INTO posts (title, content, author_id, description) VALUES ('Segundo Post', 'Este é o conteúdo do segundo post.', 1, 'descrição')",
      "INSERT INTO posts (title, content, author_id, description) VALUES ('Terceiro Post', 'Este é o conteúdo do terceiro post.', 2, 'descrição')"
    ],
    "commentInserts" => [
      "INSERT INTO comments (content, post_id, user_id) VALUES ('Primeiro comentário', 1, 1)",
      "INSERT INTO comments (content, post_id, user_id) VALUES ('Segundo comentário', 1, 2)",
      "INSERT INTO comments (content, post_id, user_id) VALUES ('Terceiro comentário', 2, 1)"
    ],
   
  ];
}

populateArray();
