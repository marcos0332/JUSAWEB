<?php
namespace Mini\Controller;

class DescargasController
{
    
    public function index()
    {   
        if($_SESSION["id"] == null){
            header("Location: ".URL."Login");
        }
        require APP . 'view/_templates/header.php';
        require APP . 'view/descargas/index.php';
        require APP . 'view/_templates/footer.php';        
    }
}