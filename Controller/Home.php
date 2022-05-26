<?php

namespace Controller;

class Home implements Controller
{
    public function render()
    {
        $title = "L'intelligence artificielle dans le secteur médical";
        require_once('./Components/header.php');
        require_once('./Components/hero.php');
        require_once('./Components/ia.php');
        require_once('./Components/medical_ia.php');
        require_once('./Components/footer.php');
    }
}