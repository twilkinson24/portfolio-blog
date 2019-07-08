
// Replace description textarea with the editor
$(document).ready(function () {
     console.log('blah blach')
     if ($('#description').length > 0) {
          CKEDITOR.replace('description');
          console.log('adding editor')
     }


     // SMOOTH
     // Select all links with hashes
     $('a[href*="#"]')
          // Remove links that don't actually link to anything
          .not('[href="#"]')
          .not('[href="#0"]')
          .click(function (event) {
               // On-page links
               if (
                    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                    location.hostname == this.hostname
               ) {
                    // Figure out element to scroll to
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    // Does a scroll target exist?
                    if (target.length) {
                         // Only prevent default if animation is actually gonna happen
                         event.preventDefault();
                         $('html, body').animate({
                              scrollTop: target.offset().top
                         }, 1000, function () {
                              // Callback after animation
                              // Must change focus!
                              var $target = $(target);
                              $target.focus();
                              if ($target.is(":focus")) { // Checking if the target was focused
                                   return false;
                              } else {
                                   $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                                   $target.focus(); // Set focus again
                              };
                         });
                    }
               }
          });

     $('#enlanguage').click(function (e) {
          var form = $('#form-detail');
          var url = '/setlanguage/en';
          var data = form.serialize();
          $.post(url, data, function (result) {
               location.reload(true);
          }).fail(function () {
               alert('Error changing language');
          });
     });

     $('#eslanguage').click(function (e) {
          var form = $('#form-detail');
          var url = '/setlanguage/es';
          var data = form.serialize();
          $.post(url, data, function (result) {
               location.reload(true);
          }).fail(function () {
               alert('Error changing language');
          });
     });
});

