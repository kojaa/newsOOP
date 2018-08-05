<?php 
 
 $db = mysqli_connect('localhost','root','','news');

 
$title =  htmlentities($_POST['title']);
$content = htmlentities($_POST['content']);

$sql = "INSERT INTO post (title, content, image, cat_id) VALUES ('{$title}', '{$content}', '1.jpg', '1')";

$res = mysqli_query($db, $sql);

    var_dump($res);

if($res){
    echo 'succes';
}else {
   echo mysqli_error($db);
}
