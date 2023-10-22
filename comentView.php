<?php

class comentView{

    function renderComent($comentarios){
        echo "<ul>";
        foreach($comentarios as $comentario) {
        echo "<li>$comentario->comentario</li>";
        }
        echo "</ul>";
    }
}