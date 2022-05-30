<?php

namespace Controller;

class IaConclusion implements Controller
{
    public function render()
    {
        $title = "Conclusion des avantages et inconvénients de l'intelligence artificielle dans le secteur médical";
        require_once('./Components/header.php');
        require_once('./Components/ia_conclusion.php');
        require_once('./Components/footer.php');
    }
}