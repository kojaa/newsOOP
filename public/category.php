<?php 
    require_once("../vendor/autoload.php");
    require_once("../resources/config.php");
    use App\Resources\Classes\Queries;
    $sql = new Queries();

  
    include $templatePath.'head.php';
    include $templatePath.'header.php';
    
    if(isset($_GET['id']))
    {
        echo $_GET['id'];

        echo 'ovde ide single page za kategorije , staviti fazon  "glavnu vest (mozda)" i staviti dosta thumbnaila i gluposti okolo, cisto da se razlikuje od pocetne';
    }
    include $templatePath.'main_post.php';
    include $templatePath.'latest_news_sidebar.php';
    include $templatePath.'under_main_section.php';
    include $templatePath.'recommended.php';
    include $templatePath.'world_section.php';
    include $templatePath.'sport_section.php';
    include $templatePath.'footer.php';
