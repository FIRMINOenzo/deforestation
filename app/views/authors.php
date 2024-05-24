<?php
    include_once "../components/Navbar.php";
    include_once "../components/Footer.php";
    include_once "../components/Hero.php";
    include_once "../components/AuthModal.php";
    include_once "../components/Post/PostCard.php";
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
<body >
    <?=Navbar()?>
    <div class="container mt-5 px-5">
        <section id="about-authors" class="mb-5">
            <h2>Sobre os Autores</h2>
            <div class="row">
                <div class="col-md-4 text-center">
                    <i class="fab fa-github fa-5x mb-3"></i>
                    <h5>Autor 1</h5>
                    <p>Breve descrição do autor 1. Especialista em conservação ambiental e sustentabilidade.</p>
                    <a href="https://github.com/PedroCavallaro" target="_blank">
                        <i class="fab fa-github"></i> GitHub
                    </a>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fab fa-github fa-5x mb-3"></i>
                    <h5>Autor 2</h5>
                    <p>Breve descrição do autor 2. Pesquisador em mudanças climáticas e políticas ambientais.</p>
                    <a href="https://github.com/FIRMINOenzo" target="_blank">
                        <i class="fab fa-github"></i> GitHub
                    </a>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fab fa-github fa-5x mb-3"></i>
                    <h5>Autor 3</h5>
                    <p>Breve descrição do autor 3. Jornalista especializado em reportagens sobre desmatamento.</p>
                    <a href="https://github.com/autor3" target="_blank">
                        <i class="fab fa-github"></i> GitHub
                    </a>
                </div>
            </div>
        </section>
    </div>
    <?=AuthModal()?>
</body>
<?php include_once "./../utils/AddScripts.php"; ?>
<script type="module" src="js/home.js"></script>
</html>
