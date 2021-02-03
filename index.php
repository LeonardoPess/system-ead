<?php 
    include('config.php'); 
    Site::updateUsuarioOnline();
    Site::contador(); 

    $homeController = new controllers\homeController();
    $aulaController = new controllers\aulaController();

    Router::get('/',function() use ($homeController) {
        $homeController->index();
    });

    Router::get('/aula/?',function($arg) use ($aulaController) {
        $aulaController->index($arg);
    });
    
?>

