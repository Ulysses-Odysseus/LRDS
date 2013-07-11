      </div> <!-- End Content -->
    </div> <!-- End Container -->

    <!-- Heavy JS
    ================================================== -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/isotope.js"></script>
    <script>
    /* <![CDATA[ */
    
    /* Change Category Pages
    =============================*/
    function changeCat(sel){
      var pageLink = sel.options[sel.selectedIndex].value;
      window.location.href = pageLink;
    }

    $(document).ready(function(){

      /* Active state for navigation
      =============================*/
      var needle = $('.activeCon').attr('id');
      $('#text' + needle).removeClass('liNoActive').addClass('liActive');
      $('.navButton .' + needle).parent().addClass('activeNav');

      // console.log('.navbar .' + needle);
      
      /* CSS Selectors All Browsers
      =============================*/
      $('.productsArea .allProducts li:nth-child(2n+1)').addClass('oddItem');
      $('.productSmall li:not(:last-child)').addClass('allbutlast');
      $('.infoContainer ul li:not(:last-child)').addClass('allbutlast');
      $('.socialFeedArea ul li a:nth-child(1)').addClass('mainContentEffect');

      /* Isotope 
      =============================*/
      var $container = $('.socialFeedArea ul'),
      $body = $('.socialFeedArea ul'),
      colW = 160,
      columns = null;
  
      $container.isotope({
        // disable window resizing
        // resizable: false,
        masonry: {
          columnWidth: colW,
          gutterWidth: 0
        }
      });
      
      $(window).smartresize(function(){
        // check if columns has changed
        var currentColumns = Math.floor( ( $body.width() -10 ) / colW );
        if ( currentColumns !== columns ) {
          // set new column count
          columns = currentColumns;
          // apply width to container manually, then trigger relayout
          $container.width( columns * colW )
            .isotope('reLayout');
        }
        
      }).smartresize(); // trigger resize to set container width

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

      /* Main Nav Bar functionality
      =============================*/
      // $('.navBar ul li').click(function(){

      //     //Get the link inside our clicked li
      //     //Get the class of the clicked li
      //     var activeCon    = '#'     + $(this).children('a').attr('class');
      //     var activeText   = '#text' + $(this).children('a').attr('class');
      //     var activeNav    = $(this).attr('class');

      //     console.log(activeNav);

      //     //If the li class does not equal navButton activeNav
      //     if(activeNav != 'activeNav'){

      //       //Remove the activeNav class and apply it to the current li
      //       $('.navButton').removeClass('activeNav');
      //       $(this).addClass('activeNav');

      //       //Find the active page in content and
      //       $('.content .activeContent').addClass('no-active');
      //       $(activeCon).removeClass('no-active').addClass('activeContent');

      //       //Add the active class to the sidebar link
      //       $('#textActiveBar .liActive').removeClass('liActive').addClass('liNoActive');
      //       $(activeText).removeClass('liNoActive').addClass('liActive');
      //     }
      // });

      /* Single Post functionality
      =============================*/
      $('.showlist a, #showsingle .back, .bloglist .blog a, #blogsingle .back').click(function(e){

        // Prevent default link action
        e.preventDefault();

        // Get the class and split at '_'
        var postInfo = $(this).data('id');
        var postData  = postInfo.split('_');

        // Create variables to pass
        var postid = postData[0];
        var type   = postData[1];

        var singleType = '#' + type + 'single';
        var listType   = '.' + type + 'list';
        var content    = '.' + type + 'content';
        
        // console.log(type);
        // console.log(singleType + ' ' + content);
        // console.log(listType);

        if(type != 'back' && $(singleType).hasClass('no-active')){

          var data = "postid=" + postid + "&type=" + type;

          //console.log(data);
          
          $.ajax({
            url: '<?php echo get_template_directory_uri(); ?>/php/single.php',
            type: "get",
            data: data,
            success:
              function(data){
                // Add post content to page
                $(singleType + ' ' + content).html(data);

                // Animate and show post
                $(listType).css('margin-left','-50%');
                $(singleType).removeClass('no-active');
                $(singleType).addClass('active');

              }
          });
        } else {
          // Animate and hide post
          $(listType).css('margin-left','0').delay(1000);
          $(singleType).removeClass('active');
          $(singleType).addClass('no-active');
        }
      });

      /* Mobile Navigation functionality
        =============================*/
      $('.toggle a, .navBar a').click(function(e) {

        var width = $(window).width();

        // If screen width is smaller or equal to 725px
        if(width <= 725){

            var toggle = $('.toggle a');

            if(toggle.attr('class') == "noactive"){
              $('.sideBar').css('left', '0');
              toggle.removeClass().addClass('active');
            } else {
              $('.sideBar').css('left', '-80%');
              toggle.removeClass().addClass('noactive');
            }

          e.preventDefault();
        }
      });
    }); /* End Document Scrpit */
    
    /* Google Analytics 
    ================================================== */
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-42073441-1', 'lrds.tv');
    ga('send', 'pageview');
    /* ]]> */
    </script>
  
  </body>
</html>