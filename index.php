<?php
    require_once('app/controller.php');
    $view = new controller('app/views/indexView.php');
    $view -> render();
?>