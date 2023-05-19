<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
require_once '../../config/appConfig.php';


if(isset($_GET['id'])){
    $note2 = $repositoryNote2->getByIdEtudiant(intval($_GET['id']));
}




echo json_encode(

    $note2->getjsonformat() ,JSON_PRETTY_PRINT,

);

