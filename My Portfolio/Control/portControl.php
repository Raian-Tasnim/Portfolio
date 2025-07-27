<?php
require_once "Model/portModel.php";

class PortfolioController {
    public function displayPortfolio() {
        $model = new PortfolioModel();
        $data = $model->getProfileData();

        require "View/header.php";
        require "View/main.php";
        require "View/footer.php";
    }
}
?>
