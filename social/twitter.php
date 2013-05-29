<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Twitter Test</title>
</head>
<body>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
ini_set('html_errors', 'On');

require_once('connect.php');
require_once('php/twitteroauth.php');

date_default_timezone_set('America/Los_Angeles');

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
				'count' 	  	   => 15,
				'include_entities' => true
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