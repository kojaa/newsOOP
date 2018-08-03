<?php
    ob_start();
require_once("../../vendor/autoload.php");
require_once("../../resources/config.php");

use App\Resources\Classes\Queries;
$sql = new Queries();

include $adminIncludesPath.'admin_head.php';
include $adminIncludesPath.'admin_navbar.php';
include $adminIncludesPath.'admin_sidebar.php';
include $adminIncludesPath.'admin_cards.php';


if(isset($_GET['view'])){
    $view = trim(htmlspecialchars($_GET['view']));
    if(preg_match('|^[a-z]+\=?[a-z]+\_?[a-z]+$|', $view))
    {
        switch($view){
            case "all_news":
            include $adminViewsPath."all_news.php";
            break;
    
            case "sport":
            include $adminViewsPath."sport.php";
            break;
    
            case "recommended":
            include $adminViewsPath."recommended.php";
            break;
    
            case "world":
            include $adminViewsPath."world.php";
            break;
    
            case "tv_shows":
            include $adminViewsPath."tv_shows.php";
            break;
    
    
            case "categories":
            include $adminViewsPath."categories.php";
            break;

            default:
            header("Location: index.php");
        }
    } else {
        return false;
    }
} 

include $adminIncludesPath.'admin_footer.php';
?>
<script type="text/javascript">

      // $(function(){

      // });

      $(document).ready(function(){

        $('#publish').on('click', function(){
        var title = $('#title').val();
        var content = $('#content').val();
 

        $.ajax({
            type: "POST",
            url: "http://localhost/news/public/admin/test.php",
            //contentType: 'application/json; charset=utf-8',
            data: {title:title, content:content},
            
            success: function() {
                $('#modal').modal('hide');
                $('#show-modal').removeClass('hidden-modal');
                $('#message').html('News has been published');
            },
            error: function(xhr, status, error) {
            console.log(error)
            }
        });
      });
});
</script>

    
