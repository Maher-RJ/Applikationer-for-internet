<?php
namespace Recipies\View;
use Recipies\Controller\SessionManager;
use \Recipies\Util\Util;
use Recipies\Model\Comment;

require_once 'classes/Recipies/Util/Util.php';
Util::initRequest();

$controller = SessionManager::getController();
SessionManager::storeController($controller);
$comments = $controller->getComments("pancakes");
$_SESSION['dish'] = 'pancakes';

include 'resources/view/recpPancakes.php';

