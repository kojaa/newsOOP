<?php 
    require_once("../vendor/autoload.php");
    require_once("../resources/config.php");
    use App\Resources\Classes\Queries;
    $sql = new Queries();

  
    include $frontViewPath.'head.php';
    include $frontViewPath.'header.php';
    
    if(isset($_GET['id']))
    {
        echo $_GET['id'];

        echo 'ovde ide single page za kategorije , staviti fazon  "glavnu vest (mozda)" i staviti dosta thumbnaila i gluposti okolo, cisto da se razlikuje od pocetne';
    }
    include $frontViewPath.'main_post.php';
    include $frontViewPath.'latest_news_sidebar.php';
    include $frontViewPath.'under_main_section.php';
    include $frontViewPath.'recommended.php';
    include $frontViewPath.'world_section.php';
    include $frontViewPath.'sport_section.php';
    include $frontViewPath.'footer.php';
