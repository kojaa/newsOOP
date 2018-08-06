<?php 
    require_once("../vendor/autoload.php");
    require_once("../resources/config.php");
    use App\Resources\Classes\Queries;
    $sql = new Queries();

    include $frontIncludesPath.'head.php';
    include $frontIncludesPath.'header.php';
    include $frontIncludesPath.'main_post.php';
    include $frontIncludesPath.'latest_news_sidebar.php';
    include $frontIncludesPath.'under_main_section.php';
    include $frontIncludesPath.'recommended.php';
    include $frontIncludesPath.'world_section.php';
    include $frontIncludesPath.'sport_section.php';
    include $frontIncludesPath.'footer.php';