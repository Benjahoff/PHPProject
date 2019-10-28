<?php
    include_once('models/juegomodel.php');
    // include_once('models/apuestamodel.php');
    include_once('views/view.php');
    include_once('helpers/auth.helper.php');

    class JuegoController {
        // private $modelApuesta;
        private $modelJuego;
        private $view;
        // private $helper;
    
    public function __construct() {
        // $this->helper = new AuthHelper();
        
        // $this->modelApuesta = new ApuestasModel();
        $this->modelJuego = new JuegoModel();
        $this->view = new JuegoView();
    }

    public function showHome(){
        $juegos = $this->modelJuego->getAll();
        // var_dump($juegos);
        $this->view->ShowAll($juegos);
    }
    public function AddGame (){
        $this->view->AddGame();

    }
    public function confirmarjuego(){
        $nombre=$_POST['nombre'];
        $cantidad=$_POST['cantidad'];
        $cardgame=$_POST['cartas'];
        $this->modelJuego->()
    }
}