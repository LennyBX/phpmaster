<?php

require_once '../../config/appConfig.php';

session_destroy();
header("location: connexion_control.php");

