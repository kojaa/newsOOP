<section>
    <div class="world-news">
        <h2>World</h2>
        <div class="underline-world"></div> <br>

        <?php
        
        $res = $sql->getData('SELECT * FROM news_view WHERE category_id = 3 ORDER BY post_id DESC LIMIT 4');
        foreach($res as $row) {

        ?>

        <div class="world-news-thumbs">
            <a href=""><img src="../assets/img/<?php echo $row->main_image; ?>" alt=""></a>
            <h4><a href="<?php echo $row->post_id; ?>"><?php echo $row->title; ?></a></h4>
        </div>

        <?php } ?>

    </div>
    
</section>
<div class="separator"></div>