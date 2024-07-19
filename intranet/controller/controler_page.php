<?php 
include_once("model/conexion.php");
    class ControlerPage{
        public function inicio(){
            include_once("view/page/inicio.php");
        }
        public function documentos_institucionales(){
            include_once("view/menu/documentos_institucionales.php");
        }
        public function error(){
            include_once("view/page/error.php");
        }
        public function nosotros(){
            include_once("view/menu/nosotros.php");
        }
        public function manuales(){
            include_once("view/menu/manuales.php");
        }
    }