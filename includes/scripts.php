<!-- Jquery call here-->

<!-- Jquery call here-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment-with-locales.min.js"></script>
<script src="assets/js/app.min.js"></script>
<!-- custom script call here -->
<script src="assets/js/scripts.js"></script>

<!-- Magnific Popup core JS file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<script>
       $(document).ready(function() {

           $('.zoom-gallery').magnificPopup({
               delegate: 'a',
               type: 'image',
               closeOnContentClick: false,
               closeBtnInside: false,
               mainClass: 'mfp-with-zoom mfp-img-mobile',
               image: {
                   verticalFit: true,
                   titleSrc: function(item) {
                       return item.el.attr('title');
                   }
               },
               gallery: {
                   enabled: true
               },
               zoom: {
                   enabled: true,
                   duration: 300, // don't foget to change the duration also in CSS
                   opener: function(element) {
                       return element.find('img');
                   }
               }
           });
       });
   </script>