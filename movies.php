<?php
    require_once('app/controller.php');
    $view = new controller('app/views/moviesView.php');
    $view -> render();
?>