$().ready(function() {
    $('#commentForm').submit(function() {
       var data = $(this).serialize();
       var url = '/comments';
       var method = 'POST';
       
       $.ajax({
          type: method,
          url: url,
          dataType: 'json',
          data: data,
          success: function(response) {
              $('#comment-list').prepend('<div id=comment-' + response['id'] + '><hr><a href="#" class="btn btn-danger" id=comment-' + response['id'] + '>Remove</a><h4>' + response['name'] + '</h4><p>' + response['comment'] + '</p></div>').html();
              $('#form-name').val('');
              $('#form-comment').val('');
          },
          error: function(XMLHttpRequest, textStatus, errorThrown) {
              alert("Status: " + textStatus); alert("Error: " + errorThrown);
          }
       });
       return false;
    });
    
    $('#comment-list').on('click', 'a[id^="comment-"]', function() {
        var commentId = $(this).attr('id');
        var data = 'commentId' + commentId;
        var url = '/comments/' + commentId.split('-')[1];
        var method = 'DELETE';
        
        $.ajax({
           type: method,
           url: url,
           data: data,
           success: function(response) {
               $('div#' + commentId).fadeOut('fast');
           }
        });
       return false; 
    });
});