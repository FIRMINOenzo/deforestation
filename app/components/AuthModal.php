<?php

function AuthModal() {
    return "<div class='modal fade' id='contactModal'>
        <div class='modal-dialog'>
            <div class='modal-content'>
            
                <!-- Modal Header -->
                <div class='modal-header'>
                    <h4 class='modal-title'>Inscreva-se para Atualizações</h4>
                    <button type='button' class='close' data-dismiss='modal'>&times;</button>
                </div>
                
                <!-- Modal Body -->
                <div class='modal-body'>
                    <form id='contactForm'>
                        <div class='form-group'>
                            <label for='name'>Nome:</label>
                            <input type='text' class='form-control' id='name' placeholder='Digite seu nome' required>
                        </div>
                        <div class='form-group'>
                            <label for='email'>Email:</label>
                            <input type='email' class='form-control' id='email' placeholder='Digite seu email' required>
                        </div>
                        <button type='submit' class='btn btn-primary'>Enviar</button>
                    </form>
                </div>
                
                <!-- Modal Footer -->
                <div class='modal-footer'>
                    <button type='button' class='btn btn-danger' data-dismiss='modal'>Fechar</button>
                </div>
                
            </div>
        </div>
    </div>";
}

?>