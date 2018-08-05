<?php 
    require_once("../vendor/autoload.php");
    require_once("../resources/config.php");
    use App\Resources\Classes\Queries;
    $sql = new Queries();

    //echo $_SERVER['REMOTE_ADDR'];

    include $frontIncludesPath.'head.php';
    include $frontIncludesPath.'header.php';

    if(isset($_GET['id']))
    {
        echo $_GET['id'];

        echo '<p class="bg bg-danger">preg match</p>ovde ide single page za kategorije , staviti fazon  "glavnu vest (mozda)" i staviti dosta thumbnaila i gluposti okolo, cisto da se razlikuje od pocetne';
    }
    include $frontIncludesPath.'main_post.php';
    include $frontIncludesPath.'latest_news_sidebar.php';
    include $frontIncludesPath.'under_main_section.php';
    include $frontIncludesPath.'recommended.php';
    include $frontIncludesPath.'world_section.php';
    include $frontIncludesPath.'sport_section.php';
    include $frontIncludesPath.'footer.php';
    

 