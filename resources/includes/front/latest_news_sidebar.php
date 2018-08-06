<div class="latest-news-sidebar">
    <h2><span class="side-head">Latest news</span></h2>

        <?php
        
        $res = $sql->getData('SELECT * FROM news_view ORDER BY post_id DESC LIMIT 4');
        foreach($res as $row) {
        ?>
    <div class="sidebar-news">
        <span>Posted at: 11:11</span>
        <h4><a href=""><?php echo substr($row->title, 0 , 69).'...'; ?></a></h4>
    </div>
    <?php } ?>

</div>
