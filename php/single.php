<?php
/**
*   INSTRUCTIONS
*
*   This script relies on  
*   the wp-load.php file   
*   located on root to     
*   access core wordpress  
*   functionality.         
*/

// Load in the essentials
require_once('wp-load.php');




///////////////////////////
// CREATE A SINGLE POST //
//////////////////////////

global $wpdb;

// Setup empty arrays
$postid = $_GET['postid'];

if(isset($postid) && $postid != '') {
    // Query WP database for all posts and include the category
    $posts = $wpdb->get_results(
    	"
    	SELECT post_date, post_content, post_title
    	FROM wp_posts
        WHERE wp_posts.ID = $postid
        LIMIT 0, 1
    	"
    );

    // Retrieve data from query
    foreach($posts as $postData) {

    	// Setup variables for timestamp and category
    	$timestamp = $postData->post_date;
    	$title     = $postData->post_title;
        $content   = $postData->post_content;

        echo '<div class="aboutTitle ralelight">'.$title.'</div>
              <div class="divider"></div>
              <div class="aboutText ralelight">'.$content.'</div>';
    }
} else {

    echo "Sorry, there is no post at this time";

}
?>