<?php

$res = $sql->getData('SELECT * FROM news_view ORDER BY post_id DESC LIMIT 1');
foreach($res as $row);
?>
<div class="wrapper">
<section>
    <div class="main-news">
        <a href=""><img src="../assets/img/<?php echo $row->image; ?>" alt="image"></a><br><br>
        <a href="#" class="category-main">Category: <i><?php echo $row->category_id ;?></i></a>
        <h3><a href="#"><?php echo $row->title; ?></a></h3>
    </div>
</section>
<br>