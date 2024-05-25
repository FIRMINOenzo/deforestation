<?php

function CommentForm() {
    return " <form id='commentForm'>
                <h5>Adicionar comentário</h5>  
            <div class='form-group'>
                    <label for='commentName'>Nome</label>
                    <input type='text' class='form-control' id='commentName' required>
                </div>
                <div class='form-group'>
                    <label for='commentText'>Comentário</label>
                    <textarea class='form-control' id='commentText' rows='3' required></textarea>
                </div>
                <button type='button' id='submitComment'  class='btn btn-success'>Enviar Comentário</button>
            </form>";
}

?>