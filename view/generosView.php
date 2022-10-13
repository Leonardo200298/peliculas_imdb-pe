<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class generosView{
    private $smarty;

    function __construct()
    {
        $this->smarty=new Smarty();
    }

    function mostrarGeneros($generos){
        $this->smarty->assign('generos',"Todos los generos");
        $this->smarty->assign('genreArrays', $generos);
        $this->smarty->display('templates/genreList.tpl');

}

   
}