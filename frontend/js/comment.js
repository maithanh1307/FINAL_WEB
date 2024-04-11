$(document).ready(function(){ 
    showComments();
    $('#commentForm').on('submit', function(event){
        event.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            url: "comment.php",
            method: "POST",
            data: formData,
            dataType: "JSON",
            success:function(response) {
                if(!response.error) {
                    $('#commentForm')[0].reset();
                    $('#commentId').val('0');
                    $('#message').html(response.message);
                    showComments();
                } else {
                    $('#message').html(response.message);
                }
            }
        });
    }); 

    $(document).on('submit', '.reply-form', function(event){
        event.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            url: "comment.php",
            method: "POST",
            data: formData,
            dataType: "JSON",
            success:function(response) {
                if(!response.error) {
                    $(this).closest('.reply-form').hide(); // Hide reply form
                    showComments();
                } else {
                    $(this).find('.error-message').html(response.message);
                }
            }
        });
    });

    $(document).on('click', '.reply', function(){
        var commentId = $(this).attr("id");
        $(this).closest('.media').find('.reply-form').show(); // Show reply form for this comment
        $(this).closest('.media').find('.reply-form #parent_id').val(commentId); // Set parent_id in reply form
        $(this).closest('.media').find('.reply-form #reply_name').focus();
    });
        
});

// Function to show comments
function showComments() {
    $.ajax({
        url:"show_comments.php",
        method:"POST",
        success:function(response) {
            $('#showComments').html(response);
        }
    });
}
