<?php
    include_once "../components/Navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Deforestation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="./css/home.css" />
</head>

<body>
   <?php
    echo Navbar();
   ?>
    <div class="hero">
        <div class="container">
            <div class="hero-text">
                <h1>Bem-vindo ao Meu Blog</h1>
                <p>Explore nossos artigos e inspire-se!</p>
                <a href="#" class="btn btn-primary">Ver mais</a>
            </div>
        </div>
    </div>
    <?php 
        echo Navbar();
    ?>
    <div class="mt-5 container px-5">
        <div class="">
            <h2>Últimas Postagens</h2>
            <div class="">
                <?php
                include_once __DIR__ . "/../../api/v1/post/all.php";

                $posts = $postAllRoutes->all();

                for ($i = 0; $i < count($posts); $i++) {
                    $post = $posts[$i];
                ?>
                    <div class="card mb-3">
                        <img src="https://via.placeholder.com/800x400" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title"><?= $post->getTitle() ?></h5>
                            <p class="card-text">
                                Breve descrição da postagem.
                            </p>
                            <a href="#" class="btn btn-primary">Leia mais</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php
        echo Footer();
    ?>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="module" src="../constants/index.js"></script>
<script type="module" src="../constants/lang.js"></script>
<script type="module" src="../constants/en.js"></script>
<script type="module" src="../constants/es.js"></script>
<script type="module" src="../constants/pt.js"></script>
<script type="module" src="../utils/Event.js"></script>
<script type="module" src="../utils/Language.js"></script>
<script type="module" src="../utils/LocalStorage.js"></script>
<script type="module" src="js/home.js"></script>

</html>