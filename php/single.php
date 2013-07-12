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
require_once('../../../../wp-load.php');




///////////////////////////
// CREATE A SINGLE POST //
//////////////////////////
// Get the post id
$postid = $_GET['postid'];
$type   = $_GET['type'];

// echo $postid;
// echo $type;

if(isset($postid) && $postid != '' && isset($type) && $type != '') {

    // Instantiate wpdb object and Query db for our post based on the postid
    $posts = $wpdb->get_results(
    	"
    	SELECT post_date, post_content, post_title
    	FROM wp_9vfeuv_posts
        WHERE wp_9vfeuv_posts.ID = $postid
        LIMIT 0, 1
    	"
    );

    // Retrieve data from query
    foreach($posts as $postData) {

        if($type == 'show'){

        	// Setup variables for the post
        	$timestamp = $postData->post_date;
        	$title     = $postData->post_title;
            $content   = $postData->post_content;
            $month     = get_post_meta($postid, 'Event Month', true);
            $day       = get_post_meta($postid, 'Event Day', true);
            $who       = get_post_meta($postid, 'Who', true);
            $map       = get_post_meta($postid, 'Event Location', true);
            $tickets   = get_post_meta($postid, 'Event Tickets', true);

            // Build the post
            $thepost = '<div class="aboutTitle">'.$title.'</div>
                        <div class="divider"></div>
                        <div class="aboutText group">
                            <div class="columText">
                                <!-- Event Date -->
                                <h1>'.$month.'&nbsp;'.$day.'</h1>';

                                // If exists, display who is at the show
                                if($who != '') {
                                    $thepost .= '<!-- Who is Playing -->
                                                <p><strong>With:</strong>&nbsp;'.$who.'</p>';
                                }
                                
                                // If exists, display link to map
                                if($map != '') {
                                    $thepost .= '<!-- Link to Map -->
                                                <a class="button" href="'.$map.'" target="_blank">Get Directions</a>';
                                }

                                // If exists, display link to tickets
                                if($tickets != '') {
                                    $thepost .= '<!-- Link to Tickets -->
                                                <a class="button" href="'.$tickets.'" target="_blank">Get Tickets</a>';
                                }

            $thepost .=     '</div>
                            <div class="columText">
                                <h2>ABOUT</h2>
                                '.$content.'
                            </div>
                        </div>';

        } elseif($type = 'blog') {

            // Setup variables for the post
            $title   = $postData->post_title;
            $content = $postData->post_content;

            // Build the post
            $thepost = '<div class="aboutTitle">'.$title.'</div>
                        <div class="divider"></div>
                        <div class="aboutText group">
                            '.$content.'
                        </div>';

        } else {

            echo "Sorry, there is no post at this time";

        }
    }

    // Display the post
    echo $thepost;

} else {

    echo "Sorry, there is no post at this time";

}
?>