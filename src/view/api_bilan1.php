<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
require_once '../../config/appConfig.php';


if(isset($_GET['id'])){
    $note1 = $repositoryNote1->getByIdEtudiant(intval($_GET['id']));
}





echo json_encode(

    $note1->getjsonformat() ,JSON_PRETTY_PRINT,

);


?>