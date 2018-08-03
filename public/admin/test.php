<?php 
 
$db = mysqli_connect('localhost','root','','news');

  
    $title =  $_POST['title'];
    $content = $_POST['content'];
    
    $sql = "INSERT INTO post ('title', 'content', 'image', 'category_id') VALUES ('{$title}', '{$content}', '1.jpg', 1)";
    
    $res = mysqli_query($db, $sql);
    
