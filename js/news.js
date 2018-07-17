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
        $e.preventDefault();
        
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
});