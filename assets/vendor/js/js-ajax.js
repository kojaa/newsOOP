//wysiwyg script
$(function() { $('textarea').froalaEditor({heightMin: 420,heightMax: 600});});


    //all_news // adding news with ajax
    $(document).ready(function(){

    $('#publish').on('click', function(){
    var title = $('#title').val();
    var content = $('#content').val();

    if(title.length < 3){
        $('#error').html('Title must be over 3 letters');
        return false;
    } else if (content.length <5) {
        $('#error_content').html('Content must be over 5 letters');
        return false;
    } else {
        $.ajax({
        type: "POST",
        url: "http://localhost/news/public/admin/add.php",
        data: {title:title, content:content},
        cache : false,
        success: function() {
            $('#modal').modal('hide');
            $('#show-modal').removeClass('hidden-modal');
            $('#message').html('News has been published');
        },
        error: function(xhr, status, error) {
        console.log(error)
        }
    });
}

});
});
