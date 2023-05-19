<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
require_once '../../config/appConfig.php';





$note1 = $repositoryNote1->getAllapis();
$note2 = $repositoryNote2->getAllapis2();




    echo json_encode(

        $note1 ,JSON_PRETTY_PRINT,

    );

echo json_encode(

    $note2 ,JSON_PRETTY_PRINT,

);




?><?php
