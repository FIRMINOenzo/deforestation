<?php
function Comment(string $username, string $comment)
{
    return "<div class='d-flex flex-column'>
        <div>
            <h6>" . $username . "</h6>
        </div>
            <p class='mt-2'>" . $comment . "</p>
    </div>";
}
