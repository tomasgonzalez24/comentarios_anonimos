<?php
require_once 'comentModel.php';
require_once 'comentView.php';

class comentController{
    private $model;
    private $view;

    public function __construct(){
        $this->model = new comentModel();    
        $this->view = new comentView();    
    }
    public function btnAddComent($comentario){
        //  if(isset($_POST['enviar'])){
        //     //  if(!empty($_POST['coment'])){
        //     //      // $enviar = $_POST['Enviar'];
        //     //      $comentario = $_POST['coment'];
                $this->model->btnAddComent($comentario);
            //  }
        //  }
    }
    public function showComent(){
        $comentarios = $this->model->getComent();
        $this->view->renderComent($comentarios);
    }
}