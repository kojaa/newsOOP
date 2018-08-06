<section>
        <div class="main-news-under">
        <?php

            $res = $sql->getData('SELECT * FROM news_view ORDER BY post_id DESC LIMIT 4');
            foreach($res as $row) {
        ?>

        <div class="main-news-under-wrapper">
                <div class="img-under">
                <a href=""><img src="../assets/img/<?php echo $row->image ?>" alt=""></a>
            </div>
            <div class="content-under">
                <h4><a href="<?php echo $row->post_id; ?>"><?php echo $row->title; ?></a></h4>
            </div>
        </div>
        <?php  }  ?>
    </div>
</section>
<div class="underline">&nbsp;</div>