$(document).ready(function(){
    // tinymce editor configuration
    tinymce.init({
        selector: '#content',
        branding: false,
        height : 300,
        plugins: 'table lists code wordcount',
        menubar: 'file edit insert view format table tools',
        toolbar: 'undo redo removeformat | formatselect | cut copy paste | bold italic underline strikethrough | bullist numlist'
    });

    $('#save').on('click', function(event){
        $(this).prop('disabled', true);

        if(validate()){
            $('#content').val(tinymce.get('content').getContent());
            $('form').submit();
        } else {
            $(this).prop('disabled', false);
        }

   });

    function validate(){
        console.log('validating');
        // Remove all error messages and error classes
        $('span.help-block').empty();
        $('.has-error').removeClass('has-error');

        // Check if title is empty
        var title = $('#title');
       
        if (title.val().trim() == ""){
            helpBlock(title, 'Enter the title');
            return false;
        }

        // Check if title is longer than 56 characters
        if (title.val().trim().length > 70){
            helpBlock(title, 'Title can\'t be longer than 70 characters, current (' + title.val().trim().length + ')');
            return false;
        }

        var author = $('#author');
       
        if (author.val().trim() == ""){
            helpBlock(author, 'Enter the author');
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