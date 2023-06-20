<?php
require_once "./view/NosotrosView.php";

class NosotrosController {
    private $view;

    function __construct()
    {
        $this->view = new NosotrosView();
    }

    public function showNosotros() {
        $this->view->showNosotros();
    }
}

?>