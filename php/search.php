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
$post = preg_replace("/[^A-Za-z0-9áéíóúÁÉÍÓÚÑñ]+$/", " ", $_POST['val']);

if(isset($post) && $post != ' ') {

    // $posts =  $wpdb->get_results( 
    //     $wpdb->prepare(
    //         "
    //         SELECT ID, post_date, post_content, post_title
    //         FROM wp_posts
    //         WHERE post_title = %d
    //         AND post_content = %s
    //         ",
    //             $post, $post
    //         )
    // );

    $posts = $wpdb->get_results(
                 $wpdb->prepare(
                    "
                    SELECT * FROM wp_posts
                    WHERE post_title
                    LIKE '%%$post%%' AND post_content LIKE '%%$post%%'
                    "
                 )
             );

    // Instantiate wpdb object and Query db for our post based on the post
    // $posts = $wpdb->get_results(
    // 	'
    // 	SELECT ID, post_date, post_content, post_title
    // 	FROM wp_posts
    //     WHERE wp_posts.post_title LIKE "%'.$post.'%" AND wp_posts.post_content LIKE "%'.$post.'%"
    //     LIMIT 10
    // 	'
    // );

    // Retrieve data from query
    if(isset($posts) && $posts != NULL){
        foreach($posts as $postData) {

        	// Setup variables for the post
            $postid    = $postData->ID;
        	$timestamp = $postData->post_date;
        	$title     = $postData->post_title;
            // $content   = $postData->post_content;

            // Build the post
            $thepost = '<li>
                            <a data-id="'.$postid.'_blog" href="#">
                              <div class="place">
                                <span class="namePlace ralelight">'.$title.'</span>
                                <span class="button">
                                  <img src="../img/arrow-forward.png" alt="'.$title.'">
                                </span>
                              </div>
                            </a>
                        </li>';
        }
    }

    // Display the searxg results
    echo $thepost;

} else {

    echo "Sorry, there is no post at this time";

}
?>