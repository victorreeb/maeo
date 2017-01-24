<?php

namespace App\Controllers;

abstract class AbstractController{

    protected $view;

    function __construct($container){
        $this->view = $container->view;
    }
}

?>
