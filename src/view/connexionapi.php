<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
require_once '../../config/appConfig.php';

$entity = null;
$data = null;

if (isset($_POST['login']) && isset($_POST['mdp'])) {
    $entity =  $repositoryDB;
    $data = $entity->login(trim($_POST['login']), trim($_POST['mdp']));
    echo json_encode(
        $data, JSON_PRETTY_PRINT);
    die();
}

$data = array("ID_ETU" => -105);
echo json_encode(
    $data, JSON_PRETTY_PRINT
);

?>