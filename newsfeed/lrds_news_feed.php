<?php
/////////////////////////////
//////// INSTRUCTIONS ///////
/////////////////////////////
//						   //
//	This script relies on  //
//	the wp-load.php file   //
//	located on root to     //
//  access core wordpress  //
//	functionality.		   //
//						   //
/////////////////////////////

// Load in the essentials
require_once('wp-load.php');
require_once('twitteroauth.php');





//////////////////////////////////
// BUILD ARRAYS WITH TIMESTAMPS //
//////////////////////////////////

global $wpdb;

// Setup empty arrays
$instaTimestamps   = array();
$twitterTimestamps = array();

// Query database for all posts and include category
$posts = $wpdb->get_results(
	"
	SELECT post_date, post_content, post_title, term_taxonomy_id
	FROM wp_posts
	LEFT JOIN wp_term_relationships
	ON wp_posts.ID = wp_term_relationships.object_id
	"
);

// Retrieve data from query
foreach($posts as $postData) {

	// Setup variables for timestamp and category
	$timestamp = $postData->post_date;
	$category  = $postData->term_taxonomy_id;
	
	// Push timestamps to relative array
	// Category breakdown:
	// Instagram = 22
	// Twitter   = 20
	if($category == 22){ $instaTimestamps[]   = $timestamp; }
	if($category == 20){ $twitterTimestamps[] = $timestamp; }

}





/////////////////////////////
// GET NEW INSTAGRAM POSTS //
/////////////////////////////

// Setup variables to access instagram API
$user  = 55902209;											 // 1. User ID
$token ='14364797.2e950df.fde0ce65a0fc479a8ec5b1bac068425b'; // 2. Access Token
$count = 22;												 // 3. Count

$url = 'https://api.instagram.com/v1/users/'.$user.'/media/recent/?count='.$count.'&access_token='.$token;

$jsonData = json_decode(file_get_contents($url, true));
json_encode($jsonData);

// Loop through the JSON data
foreach($jsonData->data as $key=>$value) {

    // Post Info
    $time  = trim(date('Y-m-d H:i:s', $value->created_time));
    $image = trim($value->images->standard_resolution->url);
    $text  = trim($value->caption->text);
    $link  = trim($value->link);

    // If the timestamp doesn't already exist, add Post Info to db
    if(!in_array($time, $instaTimestamps)){

        $new_post = array(
            'post_title'    => $text,
            'post_content'  => $image,
            'post_excerpt'	=> $link,
            'post_status'   => 'publish',
            'post_date'     => $time,
            'post_type'     => 'post',
            'post_category' => array(22)
        );
        
        $post_id = wp_insert_post($new_post);

    }
}





///////////////////////////
// GET NEW TWITTER POSTS //
///////////////////////////

$twitterConnection = new TwitterOAuth(

	'41iaZCuRn2sKLNesCcFygg', 							  // 1. Consumer Key
	'aLTWMGLQy8xYtkIf0vxXOK5xRqfeB9OfoT1pBANwME', 		  // 2. Consumer Secret
	'1450141363-isYNmzuFTmHvKaycXMWSxtbpfF1lOuPpf8tZ4VI', // 3. Access Token
	'fRdxA1eLqpEDVplPZvwykmNWehiyLPpnehtnsFqk'  		  // 4. Access Token Secret

	);

$twitterData = $twitterConnection->get(

	'statuses/user_timeline',
	
	array(
		'screen_name' 	   => 'LRDS',
		'count' 	  	   => 45,
		'include_entities' => true
	)
);

foreach ($twitterData as $item) {

	// Post Info
    $time  = trim(date('Y-m-d H:i:s', strtotime($item->created_at)));
    $image = null;
    $text  = trim($item->text);
    $link  = null;

    /// If the timestamp doesn't already exist, add Post Info to db
    if(!in_array($time, $twitterTimestamps)){

        $new_post = array(
            'post_title'    => $text,
            'post_content'  => $text,
            'post_status'   => 'publish',
            'post_date'     => $time,
            'post_type'     => 'post',
            'post_category' => array(20)
        );
        
        $post_id = wp_insert_post($new_post);

    }
}
?>