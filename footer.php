      <div class="row">
        <footer class="nine columns">
          <!-- <a href="#top"><img src="<?= get_template_directory_uri(); ?>/images/scroll.png" border="0" alt="" /></a><br /> -->
          <img src="<?= get_template_directory_uri(); ?>/images/footer_divider.png" alt="" />
          <ul>
            <li><a href="<?= esc_url(home_url('/about')); ?>" target="_top" title="About Us">About Us / </a></li>
            <li><a href="<?= esc_url(home_url('/beers')); ?>" target="_top" title="Beers">Beers / </a></li>
            <li><a href="<?= esc_url(home_url('/shop')); ?>" target="_top" title="Shop">Shop / </a></li>
            <li><a href="<?= esc_url(home_url('/events')); ?>" target="_top" title="Events">Events / </a></li>
            <li><a href="<?= esc_url(home_url('/news')); ?>" target="_top" title="News">News / </a></li>
            <li><a href="<?= esc_url(home_url('/contact')); ?>" target="_top" title="Contact">Contact</a></li>
          </ul>
          <p><?php the_time('Y'); ?> Good Libations Brewing</p>
        </footer>
      </div>
    </div>
  </div>
  <?php wp_footer(); ?>
</body>
<script>
<?php wp_reset_query(); ?>
<?php if ( is_home() || is_front_page() ) : ?>

 $(window).load(function() {
  $('.flexslider').flexslider({
    animation: "fade",
    directionNav: "true"
  });

  var beers = ['null','IPA','Porter','Pale Ale','Kolsch'];
  for(var i = 1; i <= 5; i++) {
    $(".flex-control-nav li a:contains('" + i + "')").text(beers[i]);
  }

  // resolution: low_resolution, thumbnail, standard_resolution
  var client_id = "2e950df13f724eb49789b3a23e08b4c4";
  var token_id = "14364797.2e950df.fde0ce65a0fc479a8ec5b1bac068425b";
  var tag = "vonzipper";
  $.ajax({
    type: "GET",
    dataType: "jsonp",
    cache: false,
    url:  "https://api.instagram.com/v1/tags/"+tag+"/media/recent?count=100&client_id="+client_id+"&access_token="+token_id,
    success: function(data) {
      for (var i = 0; i < 9; i++) {

        var links = data.data[i].link;
        var image = data.data[i].images.low_resolution.url;
        var thumb = data.data[i].images.thumbnail.url;

        $(".instagram-large").append("<a target='_blank' href='" + links + "'><img src='" + image + "' /></a>");
        $(".instagram").append("<a href='" + links + "' id='" + image + "'><img src='" + thumb + "' /></a>");
        
        if (i != 0) $('img[src*="' + image + '"]').hide();
      }

        $(".instagram a").click(function() {
        $(".instagram-large img:visible").fadeOut(500);
        $('img[src*="' + $(this).attr("id") + '"]').fadeIn(500);
        return false;
      });
        }
    });
  });

<?php elseif ( is_page(beers) ) : ?>

  $(window).load(function() {
    $('.flexslider').flexslider({
      animation: "slide",
      controlNav: "thumbnails"
    });
  });

<?php endif ?>

  $(window).load(function(){
    $("#featured").orbit({
    	timer: true,
    	bullets: true,
    	directionalNav: false,
    	animationSpeed: 1300,
    	advanceSpeed: 5000
    });

    $("#toggle").click( function () {
      var trigger = $(this).attr('class');
      
      if(trigger == 'up') {
        $('header').css('top', '0');
        $("#toggle").removeClass('up').addClass('down');
      }

      if(trigger == 'down') {
        $('header').css('top', '-24em');
        $("#toggle").removeClass('down').addClass('up');
      }

    });
  });

</script>
</html>