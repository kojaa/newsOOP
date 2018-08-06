<?php 

require_once("../../vendor/autoload.php");
require_once("../../resources/config.php");
use App\Resources\Classes\Queries;
$sql = new Queries();

$sql->insertNews();

// $mysqli = new mysqli('localhost', 'root', '', 'news');

// $stmt = $mysqli->prepare("INSERT INTO post (title, content, image, cat_id) VALUES (?, ?, ?, ?)");
// $s = '1.jpg';
// $i = 2;
// $stmt->bind_param("sssi", htmlentities($_POST['title']), htmlentities($_POST['content']), $s, $i);
// $stmt->execute();