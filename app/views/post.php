<?php
    include_once "../components/Navbar.php";
    include_once "../components/Footer.php";
    include_once "../components/Post/PostBody.php"; 
    include_once "../components/Comments/Comment.php"; 
    include_once "../components/Comments/CommentForm.php"; 
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leitura de Post</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>
<body>
    <?=Navbar()?>
    <div class="container mt-5">
        <div class="row">
            <?=PostBody("Titulo", "apsdpasodpoaspdooapsodpaosdo")?>
        </div>
    </div>
        <div class="card-body">
            <h5 class="card-title">Comentários</h5>
                <div id="comments">
                    <div class="media mb-3">
                        <?=Comment()?>
                    </div>
                        <?=CommentForm()?>
                    </div>
                </div>
        </div>
    </div>
    <?=Footer()?>
</body>
<?php include_once "./../utils/AddScripts.php"; ?>
</html>
