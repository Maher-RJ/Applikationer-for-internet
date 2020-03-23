<?php
namespace Recipies\View;
use Recipies\Controller\SessionManager;
use Recipies\Controller\Controller;
use \Recipies\Util\Util;

require_once 'classes/Recipies/Util/Util.php';
Util::initRequest();

$controller = SessionManager::getController();
SessionManager::storeController($controller);
$name = $_SESSION['name'];
$comment = $_POST['comment'];
$dish = $_POST['dish'];
$controller->storeComment($name, $comment, $dish);

header('Location: '.$_SERVER['HTTP_REFERER']); 

