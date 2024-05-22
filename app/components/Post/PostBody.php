<?php


function PostBody(string $title, string $content) {
    return "<div class='col-md-8 offset-md-2'>
                <div class='card'>
                    <div class='card-body'>
                        <h1 class='card-title'>".$title."</h1>
                        <p class='card-text'>
                            ".$content."
                        </p>
                    </div>
                </div>
            </div>";
}


?>


