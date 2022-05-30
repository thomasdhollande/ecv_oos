<?php

namespace Controller;

class Error404 implements Controller
{
    public function render()
    {
        $title = "Page introuvable";
        require_once('./Components/header.php');
        require_once('./Components/error404.php');
        require_once('./Components/footer.php');
    }
}