<?php
function Navbar() {
    return "<nav class='navbar navbar-expand-lg navbar-light bg-light'>
        <div class='container'>
            <a class='navbar-brand' href='#' id='title'>Deforestation</a>
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarNav'>
                <ul class='navbar-nav ml-auto'>
                    <form class='form-inline my-2 my-lg-0'>
                        <label for='' class='d-flex flex-row align-items-center'>
                            <input class='form-control mr-sm-1' id='search' type='search' placeholder='Buscar' aria-label='Search' />
                            <button class='btn btn-outline-success mx-1 my-sm-0' type='submit'>
                                <i class='fas fa-search'></i>
                            </button>
                        </label>
                    </form>
                    <li class='nav-item active'>
                        <a class='nav-link' id='home-link' href='#'>Home <span class='sr-only'>(current)</span></a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='#' id='authors-link'>Autores</a>
                    </li>
                    <li class='nav-item'>
                        <div class='dropdown'>
                            <a class='nav-link dropdown-toggle' href='#' role='button' id='dropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                Mais
                            </a>
                            <div class='dropdown-menu' id='dropDown' aria-labelledby='dropdownMenuLink'>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>";
}

