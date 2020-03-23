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
$dish = $_GET['dish'];
$data = $controller->getComments($dish);

$c = array();

foreach ($data as $obj)
{
	$c[] = array('id' => $obj->getId(), 'username' => $obj->getName(), 'comment' => $obj->getComment());
}

header('Content-Type: application/json');

echo json_encode($c);



