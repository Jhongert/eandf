$(document).ready(function(){
    // tinymce editor configuration
    tinymce.init({
        selector: '#content',
        branding: false,
        height : 300,
        menubar: false,
        toolbar: "undo redo removeformat | cut copy paste | bold italic underline strikethrough | bullist numlist"
    });


    $('#save').on('click', function(event){
        $(this).attr('disabled', 'disabled');

        if(validate()){

            var data = {
                author: $('#author').val().trim(),
                content: tinymce.get('content').getContent()
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: '/admin/testimonials/store',
                data: data,
                success: function(data){
                    console.log(data)
                    //showMsg(data);
                }
            });
        }
    });

    function validate(){
        // Remove all error messages and error classes
        $('span.help-block').empty();
        $('.has-error').removeClass('has-error');

        // Check if author is empty
        var author = $('#author');
       
        if (author.val().trim() == ""){
            helpBlock(author, 'Enter the author');
            return false;
        }

        // Check if auhtor is longer than 56 characters
        if (author.val().trim().length > 56){
            helpBlock(author, 'Author can\'t be longer than 56 characters, current (' + author.val().trim().length + ')');
            return false;
        }

         // Check for empty content
        var textArea = $('#content');
        var content = tinymce.get('content').getContent();
        if (content.trim() == ""){
            helpBlock(textArea, 'Enter the content');
            return false;
        }

        return true;
    }

    function showMsg(data){
        var msg = $('#msg');

        msg.removeClass('alert alert-success alert-danger');

        $('#msg-container').css({'height':'58px'});

        if(data.success){
            msg.text('Your newws has been saved.');
            msg.addClass('alert alert-success');

        } else {
            msg.text('Oops,' + data);
            msg.addClass('alert alert-danger');
        }
        window.setTimeout(function(){
            $('#msg-container').css('height', 0);
            $('#save').removeAttr('disabled');
        }, 5000);
    }
});