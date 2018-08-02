<?php

$res = $sql->getAllWithLimitDesc('post','post_id', 1);

$row = $res->fetch_object();

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