<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
require_once '../../config/appConfig.php';


$etudiants = $repositoryEtudiant->getAllapi();




echo json_encode(

    $etudiants ,JSON_PRETTY_PRINT,

);


?>


