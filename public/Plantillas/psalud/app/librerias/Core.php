<?php 
/* Mapear la url ingresada en el navegador
1-Controlador
2-Método
3.Parámetro
ej: articulos/actualizar/4
*/

class Core {
	protected $controladorActual ='paginas';
	protected $metodoActual ='index';
	protected $parametros =[];
   
   public function __construct()
    {
      $url = $this->getUrl();
    }
        
	public function getUrl()
	{
       echo $_GET['url'];
	}
}
 ?>