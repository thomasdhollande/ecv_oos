<?php

namespace Controller;

class IaSondage implements Controller
{
    public function render()
    {
        $title = "Sondage sur l'intelligence artificielle dans le secteur médical";
        require_once('./Components/header.php');
        require_once('./Components/ia_sondage.php');
        require_once('./Components/footer.php');
    }
}