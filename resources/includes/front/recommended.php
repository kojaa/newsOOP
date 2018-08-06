
<section>
<div class="popular-news">
    <h2><span class="side-head">Recommended</span></h2>

<?php 
 $res = $sql->getData('SELECT * FROM news_view WHERE recommended = 1 ORDER BY post_id DESC LIMIT 4');
 foreach($res as $row) {

?>

    <div class="">
        <a href=""><img src="../assets/img/1.jpg " alt=""></a>
        <h4><a href=""><?php echo substr($row->title, 0 , 50)."..." ?></a></h4>
    </div>
 <?php } ?>
</div>
</section>