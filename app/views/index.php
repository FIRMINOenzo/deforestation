<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Meu Blog</title>
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        />
        <link rel="stylesheet" href="./css/home.css" />
    </head>
    <body>
        <div id="load"></div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#" id="title">Deforestation</a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <form class="form-inline my-2 my-lg-0">
                            <label
                                for=""
                                class="d-flex flex-row align-items-center"
                            >
                                <input
                                    class="form-control mr-sm-1"
                                    id="search"
                                    type="search"
                                    placeholder="Buscar"
                                    aria-label="Search"
                                />
                                <button
                                    class="btn btn-outline-success mx-1 my-sm-0"
                                    type="submit"
                                >
                                    <i class="fas fa-search"></i>
                                </button>
                            </label>
                        </form>
                        <li class="nav-item active">
                            <a class="nav-link" id="home-link" href="#"
                                >Home <span class="sr-only">(current)</span></a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="about-link" href="#"
                                >Sobre</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="authors-link"
                                >Autores</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="hero">
            <div class="container">
                <div class="hero-text">
                    <h1>Bem-vindo ao Meu Blog</h1>
                    <p>Explore nossos artigos e inspire-se!</p>
                    <a href="#" class="btn btn-primary">Ver mais</a>
                </div>
            </div>
        </div>
        <div class="mt-5 container px-5">
            <div class="">
                <h2>Últimas Postagens</h2>
                <div class="">
                    <div class="card mb-3">
                        <img
                            src="https://via.placeholder.com/800x400"
                            class="card-img-top"
                            alt="..."
                        />
                        <div class="card-body">
                            <h5 class="card-title">Título da Postagem</h5>
                            <p class="card-text">
                                Breve descrição da postagem.
                            </p>
                            <a href="#" class="btn btn-primary">Leia mais</a>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <img
                            src="https://via.placeholder.com/800x400"
                            class="card-img-top"
                            alt="..."
                        />
                        <div class="card-body">
                            <h5 class="card-title">Título da Postagem</h5>
                            <p class="card-text">
                                Breve descrição da postagem.
                            </p>
                            <a href="#" class="btn btn-primary">Leia mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="bg-dark text-light text-center py-4 mt-5">
            <p id="footer-copy">
                &copy; 2024 Meu Blog. Todos os direitos reservados.
            </p>
        </footer>
    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="module" src="../constants/index.js"></script>
    <script type="module" src="../constants/lang.js"></script>
    <script type="module" src="../constants/en.js"></script>
    <script type="module" src="../constants/es.js"></script>
    <script type="module" src="../constants/pt.js"></script>
    <script type="module" src="utils/Event.js"></script>
    <script type="module" src="utils/LocalStorage.js"></script>
    <script type="module" src="js/home.js"></script>
</html>
