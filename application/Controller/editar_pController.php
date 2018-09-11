<?php
namespace Mini\Controller;

class editar_pController
{

    public function index()
    {   
        if($_SESSION["id"] == null){
            header("Location: ".URL."Login");
        }
        require APP . 'view/_templates/editar_perfil.php';
        require APP . 'view/editar_p/index.php';
        require APP . 'view/_templates/footer.php';        
    }
}