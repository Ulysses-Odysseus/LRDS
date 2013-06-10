<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Twitter Test</title>
    <?php wp_head(); ?>
</head>
<body>

<?php

require_once('php/twitteroauth.php');

//Setup empty array for times
$instaTimes;
$twitterTimes = array();

if (have_posts()) : while (have_posts()) : the_post(); 

    if(in_category('twitter')) {

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

// Example query using wp_insert_post
$new_post = array(
    'post_title' => 'My New Post',
    'post_content' => 'Lorem ipsum dolor sit amet...',
    'post_status' => 'publish',
    'post_date' => date('Y-m-d H:i:s'),
    'post_author' => $user_ID,
    'post_type' => 'post',
    'post_category' => array(0)
);
$post_id = wp_insert_post($new_post);

?><!-- End the loop -->

<?php

// Get the latest 5 inserted timestamps from instagram
$sql = $con->prepare("SELECT created_time
                      FROM news_items
                      WHERE type = 'twitter'
                      LIMIT 0, 5");
$sql->execute();

if(!$sql) {

    //Show the error
    echo '<h1>SOMETHING BROKE</h1>';
    print_r($sql->errorInfo());

} else {

    // If query returns data, do something
    if($sql->rowCount() > 0){

        //Instantiate new array for times
        $times = array();

        while($value = $sql->fetch()){

            //Add timestamps to array
            $times[] = $value['created_time'];

        }

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
				'count' 	  	   =>  15,
				'include_entities' =>  true
			)
		);

		foreach ($twitterData as $item) {

			// Post Info
			$type  = 'twitter';
		    $time  = strtotime($item->created_at);
		    $image = null;
		    $text  = $item->text;
		    $link  = null;

            // If the timestamp doesn't already exist, add Post Info to db
            if(!in_array($time, $times)){

                $sql = $con->prepare("INSERT INTO news_items (type, created_time, image_url, title, link)
                                      VALUES ('$type', '$time', '$image', '$text', '$link')");
                $sql->execute();

                if(!$sql) {

                    //Show the error
                    print_r($sql->errorInfo());

                }
            }
        }
    }

    // Close db connection
    $con = null;

}

?>
</body>
</html>