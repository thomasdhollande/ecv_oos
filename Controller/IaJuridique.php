<?php

namespace Controller;

class IaJuridique implements Controller
{
    public function render()
    {
        $title = "L'intelligence artificielle dans le secteur médical d'un point de vue juridique";
        require_once('./Components/header.php');
        require_once('./Components/ia_juridique.php');
        require_once('./Components/footer.php');
    }
}