    </div> <!-- End Container -->

    <!-- Heavy JS
    ================================================== -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/isotope.js"></script>
    <script>
    /* <![CDATA[ */
    $(document).ready(function(){

      // Isotope 
      $('.socialFeedArea ul').isotope({
        // Options
        itemSelector:'.socialItem',
        layoutMode:'masonry',
        animationEngine: 'best-available',
        masonry: {
            columnWidth: 160,
            gutterWidth: 20
          }
        });

        // Filter items when filter link is clicked
        $('.filters a').click(function(){

          var filter   = $(this).attr('class');

          if(filter != 'active') {
            $('.active').removeClass('active');
            $(this).addClass('active');
          }

          var selector = $(this).attr('data-filter');
          $('.socialFeedArea ul').isotope({ filter: selector });
          return false;
        });
    });
    /* ]]> */
    </script>
    
  </body>
</html>