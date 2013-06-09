<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Instagram Test</title>
</head>
<body>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
ini_set('html_errors', 'On');

require_once('connect.php');

// $instaItems = array();

// Get the latest 5 inserted timestamps from instagram
$sql = $con->prepare("SELECT post_date
                      FROM wp_posts
                      WHERE category = 22
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

        // Setup variables to access instagram API
        $user  = 55902209;
        $token ='14364797.2e950df.fde0ce65a0fc479a8ec5b1bac068425b';
        $count = 15;

        $url = 'https://api.instagram.com/v1/users/'.$user.'/media/recent/?count='.$count.'&access_token='.$token;

        $jsonData = json_decode(file_get_contents($url, true));
        json_encode($jsonData);

        //Debugging
        echo '<pre>';
            var_dump($times);
        echo '</pre>';

        // Loop through the JSON data
        foreach($jsonData->data as $key=>$value) {

            // Post Info
            $type  = 'instagram';
            $time  = date('Y-m-d H:i:s', $value->created_time);
            $image = $value->images->standard_resolution->url;
            $text  = $value->caption->text;
            $link  = $value->link;

            // If the timestamp doesn't already exist, add Post Info to db
            if(!in_array($time, $times)){

                // $new_post = array(
                //     'post_title' => 'My New Post',
                //     'post_content' => $image,
                //     'post_status' => 'publish',
                //     'post_date' => date('Y-m-d H:i:s', $time),
                //     'post_type' => 'post',
                //     'post_category' => array(22)
                // );
                
                // $post_id = wp_insert_post($new_post);

                $sql = $con->prepare("INSERT INTO wp_posts (type, created_time, image_url, title, link)
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