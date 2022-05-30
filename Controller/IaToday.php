<?php

namespace Controller;

class IaToday implements Controller
{
    public function render()
    {
        $title = "L'intelligence artificielle dans le secteur médical aujourd'hui";
        require_once('./Components/header.php');
        require_once('./Components/ia_today.php');
        require_once('./Components/footer.php');
    }
}