<?php

/*
Plugin Name: LRDS News Feed
Plugin URI: http://www.orangecreative.net
Description: Plugin for displaying products from an OSCommerce shopping cart database
Author: C. Lupu
Version: 1.0
Author URI: http://www.orangecreative.net
*/

get_header();

$twitterTimes = array();

if (have_posts()) : while (have_posts()) : the_post(); 

    if(in_category('news')) {

        $date = the_date('Y-m-d');
        $twitterTimes[] = $date;

        // 1. Fill empty array with timestamp from twitter posts
        // 2. Format returned twitter timestamp to match wordpress date - date('Y-d-m H:i:s', 1369845184);
        // 3. Check if the returned twitter items timestamp matches ones from the array
        // 4. Add it to the DB if it does not yet exist

    }

    endwhile; else:

      echo '<p>Sorry, there are no posts at this time</p>';

endif;

var_dump($twitterTimes);

?>