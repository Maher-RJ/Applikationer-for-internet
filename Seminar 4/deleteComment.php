<?php

namespace Recipies\View;
use Recipies\Controller\SessionManager;
use \Recipies\Util\Util;

require_once 'classes/Recipies/Util/Util.php';
Util::initRequest();

$controller = SessionManager::getController();
SessionManager::storeController($controller);
$id = $_POST['data-id'];
$controller->deleteComment($id);
$comments = $controller->getComments($_SESSION['dish']);

