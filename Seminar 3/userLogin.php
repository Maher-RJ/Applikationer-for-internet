<?php

namespace Recipies\View;

use \Recipies\Util\Util;
use Recipies\Controller\Controller;
use Recipies\Controller\SessionManager;

require_once ('classes/Recipies/Util/Util.php');
Util::initRequest();

$name = $_POST['nameLogin'];
$password = $_POST['passwordLogin'];
$controller = SessionManager::getController();
$controller->loginUser($name, $password);
SessionManager::storeController($controller);

if($_SESSION['name']){
    require_once ('index.php');
}else{
    require_once('login.php');
}
