    </div> <!-- End Container -->

    <!-- Heavy JS
    ================================================== -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/isotope.js"></script>
    <script>
    /* <![CDATA[ */
    $(document).ready(function(){

      /* CSS Selectors All Browsers
      =============================*/
      $('.productsArea .allProducts li:nth-child(2n+1)').addClass('oddItem');
      $('.productSmall li:not(:last-child)').addClass('allbutlast');
      $('.infoContainer ul li:not(:last-child)').addClass('allbutlast');
      $('.socialFeedArea ul li a:nth-child(1)').addClass('mainContentEffect');

      /* Isotope 
      =============================*/
      $('.socialFeedArea ul').isotope({
        itemSelector:'.socialItem',
        layoutMode:'masonry',
        animationEngine: 'best-available',
        masonry: {
            columnWidth: 160,
            gutterWidth: 20
          }
        });

        // Filter items for Social Feed Area when filter link is clicked
        $('.filters a').click(function(){

          var filter = $(this).attr('class');

          if(filter != 'active') {
            $('.active').removeClass('active');
            $(this).addClass('active');
          }

          var selector = $(this).attr('data-filter');
          $('.socialFeedArea ul').isotope({ filter: selector });
          return false;
        });

        /* Scroll Top Link
        =============================*/
        $(window).scroll(function() {
          if ($(this).scrollTop()) {
              $('.linkUp:hidden').stop(true, true).fadeIn();
          } else {
              $('.linkUp').stop(true, true).fadeOut();
          }
        });

        /* Store ~ Product Functionality 
        =============================*/

        /* Main Nav Bar functionality
        =============================*/
        $('.navBar ul li').click(function(){

            //Get the link inside our clicked li
            //Get the class of the clicked li
            var activeCon    = '#'     + $(this).children('a').attr('class');
            var activeText   = '#text' + $(this).children('a').attr('class');
            var activeNav    = $(this).attr('class');

            console.log(activeNav);

            //If the li class does not equal navButton activeNav
            if(activeNav != 'activeNav'){

              //Remove the activeNav class and apply it to the current li
              $('.navButton').removeClass('activeNav');
              $(this).addClass('activeNav');

              //Find the active page in content and
              $('.content .activeContent').addClass('no-active');
              $(activeCon).removeClass('no-active').addClass('activeContent');

              //Add the active class to the sidebar link
              $('#textActiveBar .liActive').removeClass('liActive').addClass('liNoActive');
              $(activeText).removeClass('liNoActive').addClass('liActive');
            }
        });

        /* Single Post functionality
        =============================*/
        $('.showlist a, #shows .back').click(function(e){

            var postid = $(this).attr('class');
            // var margin = $(this).css('margin');

            // alert(postid);
            e.preventDefault();

            if($('#single').hasClass('no-active')){

              var data = "postid=" + postid + "type=";
              
              $.ajax({
                url: '<?php echo get_template_directory_uri(); ?>/php/single.php',
                type: "get",
                data: data,
                success:
                  function(data){
                    $('#single .postcontent').html(data);

                    $('.showlist').css('margin-left','-50%');
                    $('#single').removeClass('no-active');
                    $('#single').addClass('active');
                  }
              });

            } else {

              $('.showlist').css('margin-left','0');
              $('#single').removeClass('active');
              $('#single').addClass('no-active');

            }

        });
    });
    /* ]]> */
    </script>
    
  </body>
</html>