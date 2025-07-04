<?php
require_once '../controllers/NewsController.php';
require_once '../controllers/HomeController.php';
$db = new PDO('mysql:host=localhost;dbname=news', 'root', '');
$homeController = new HomeController($db);
$newsController = new NewsController($db);
$page = isset($_GET['page']) ? $_GET['page'] : 1;

if(isset($_GET['id'])){
    $newsController->show($_GET['id']);
} else {
    $homeController->index($page);
}

?>
