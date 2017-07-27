<?php 


include "api/twitteroauth.php";

$consumer_key = "B5d3nkryY9g6gOKAGfOjuKIOv";
$consumer_secret = "yumlWl35Ha1CjsHDlmRO5N60usgkFa4qIkuU2CcBUrKCIVUwCJ";
$access_token = "1223265492-M5VEBHwo8DenI6aSK0cYq3qnfBH21hvtpcjLSIV";
$access_token_secret = "gZdfO0Lyo2c7us7w3KJvPFuwsYbtkM6WXzvkRDCpoOg6Y";

$twitter = new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);

$tweets = $twitter->get('https://stream.twitter.com/1.1/statuses/sample.json');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Twitter API SEARCH</title>
</head>
<body>


<?php 
echo "hola";
var_dump($twitter);

?>
  

</body>
</html>