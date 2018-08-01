<section>
    <div class="world-news">
        <h2>World</h2>
        <div class="underline-world"></div> <br>

        <?php
        
        $res = $sql->getAllByCategoryWithLimitDesc('post', 3, 'post_id', 4);
        while($row = $res->fetch_object()){

        ?>

        <div class="world-news-thumbs">
            <a href=""><img src="../assets/img/<?php echo $row->image; ?>" alt=""></a>
            <h4><a href="<?php echo $row->post_id; ?>"><?php echo $row->title; ?></a></h4>
        </div>

        <?php } ?>

    </div>
    
</section>
<div class="separator"></div>