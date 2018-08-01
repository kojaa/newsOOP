<?php 
    require_once("../vendor/autoload.php");
    require_once("../resources/config.php");
    use App\Resources\Classes\Queries;
    $sql = new Queries();

    //echo $_SERVER['REMOTE_ADDR'];

    include $templatePath.'head.php';
    include $templatePath.'header.php';
    include $templatePath.'main_post.php';
    include $templatePath.'latest_news_sidebar.php';
    include $templatePath.'under_main_section.php';
    include $templatePath.'recommended.php';
    include $templatePath.'world_section.php';
    include $templatePath.'sport_section.php';
    include $templatePath.'footer.php';