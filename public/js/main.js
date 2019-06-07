// Replace description textarea with the editor
$(document).ready(function () {
     if ($('#description').length > 0) {
          CKEDITOR.replace('description');
     }
});