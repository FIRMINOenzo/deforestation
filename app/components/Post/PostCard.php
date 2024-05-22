<?php 

function PostCard( int $id, string $title, string $description ) {
    return "<div class='card mb-3'>
                <img src='https://via.placeholder.com/800x400' class='card-img-top' alt='...' />
                <div class='card-body'>
                    <h5 class='card-title'>". $title ."</h5>
                    <p class='card-text'>
                        ".$description."
                    </p>
                    <a href='".$id."' class='btn btn-primary'>Leia mais</a>
                </div>
            </div>";
}


