<?php

namespace Controller;

class IaApplications implements Controller
{
    public function render()
    {
        $title = "Applications de l'IA dans le secteur médical";
        require_once('./Components/header.php');
        require_once('./Components/ia_applications.php');
        require_once('./Components/footer.php');
    }
}