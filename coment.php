<?php
 require_once 'comentController.php';

 $controller = new comentController();
 $controller->showComent();
 if(isset($_POST['enviar'])){
    $comentario = $_POST['coment'];
    $controller->btnAddComent($comentario);
 }




// if (!isset($_GET['comentario']) || empty($_GET['comentario'])) {
    //     echo "<h2>Error! Género no especificado.</h2>";
    //     die();
    //  $coment_list = $_GET['comentario'];
     
    //  echo "</ul>";
    //  echo "<h1>Deje su comentario!! : $coment_list</h1>";
    //  echo "<a href='index.html'> Volver </a>";
     
    //  $db = new PDO('mysql:host=localhost;'.'dbname=coment_anonimos;charset=utf8', 'root', '');
    //  $query = $db->prepare('SELECT * FROM `coment_anonimos`');
    //  $query->execute();
    //  $comentarios = $query->fetchAll(PDO::FETCH_OBJ);
     
    // echo "<ul>";
    // foreach($comentarios as $comentario) {
    //     echo "<li>$comentario->comentario</li>";
    // }
//  }








// if(!isset($_GET['comentario'])|| empty($_GET['comentario'])){
//     echo "<h2> Error! pagina no encontrada </h2>";
//     die();
// }

// $comentario = $_GET['comentario'];

// <div class="form-floating">
//     <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
//     <button>enviar</button>
// </div>
