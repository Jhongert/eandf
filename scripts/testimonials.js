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


    $('#save').on('click', function(e){
        $(this).prop('disabled', true);

         if(validate()){
             $('#content').val(tinymce.get('content').getContent());
             $('form').submit();
         } else {
            $(this).prop('disabled', false);
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

        // // Check if category is empty
        var category = $('#category');
        if (category.val().trim() == ""){
            helpBlock(category, 'Enter the category');
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