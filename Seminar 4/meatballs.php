<?php
namespace Recipies\View;
use Recipies\Controller\SessionManager;
use \Recipies\Util\Util;
use Recipies\Model\Comment;

require_once 'classes/Recipies/Util/Util.php';
Util::initRequest();

$controller = SessionManager::getController();
SessionManager::storeController($controller);
$_SESSION['dish'] = 'meatballs';
$dish = $_SESSION['dish'];

include 'resources/view/recpMeatballs.php';

