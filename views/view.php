<?php
    require_once('libs/Smarty.class.php');
   
    class JuegoView {

        private $smarty;

        public function showAll($juegos) {
            $smarty = new Smarty();
            $smarty->assign('basehref', BASE_URL);
            $smarty->assign('juegos', $juegos);
            $smarty->display('templates\showAll.tpl');
        }
        public function AddGame(){
            $smarty = new Smarty();
            $smarty->assign('basehref', BASE_URL);
            $smarty->display('templates\AddGame.tpl');
        }
        public function modifyStudent($student){
            $smarty = new Smarty();
            $smarty->assign('basehref', BASE_URL);
            $smarty->assign('student',$student);
            $smarty->display('templates\modifyStudent.tpl');
        }
        public function modifyEsp($especialidad){
            $smarty = new Smarty ();
            $smarty->assign('basehref', BASE_URL);
            $smarty->assign('especialidad',$especialidad);
            $smarty->display('templates\modifyEsp.tpl');

        }

        public function showApuestas($apuestas) {
            $smarty = new Smarty();
            $smarty->assign('basehref', BASE_URL);
            $smarty->assign('apuestas', $apuestas);
            $smarty->display('templates\apuestas');
        }
    }