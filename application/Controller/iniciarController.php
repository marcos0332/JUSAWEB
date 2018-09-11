<?php
namespace Mini\Controller;

class inicioController
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {   
        require APP . 'view/_templates/header.php';
        require APP . 'view/Login/index.php';
        require APP . 'view/_templates/footer.php';        
    }
}