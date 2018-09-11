<?php
namespace Mini\Controller;
class CerrarSesionController
{
    public function index(){
        session_destroy();
        header("Location: " . URL . "Login");
    }
}