<header>
    <div class="header">
        <a href=""><img src="../assets/img/news.png" alt=""></a>
        <div class="search-button">
            <form action="">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
            <div class="rss">
                RSS <i class="fas fa-rss"></i>
            </div>
        </div>
    </div>
    <nav>
        <ul>
            <li><a href="index.php"> Home</a></li>
            <li><a href="#"> News</a></li>
            <li><a href="#"> Weather</a></li>
            <li><a href="#"> IT</a></li>
            <li><a href="#"> Business</a></li>
            <li><a href="admin/"> Admin</a></li>
        </ul>
    </nav>


    <div class="categories">
        <ul>
            <?php
                $res = $sql->getData('SELECT * FROM categories');
                foreach($res as $row) {
                    echo "<li><a href='category.php?id={$row->category_id}'> $row->category_name</a></li>";
                }
            ?>
        </ul>
    </div>


</header>
<br>
