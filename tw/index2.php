<?php 


include "api/twitteroauth.php";

$consumer_key = "Q8DZ6nk8NG50cRjNWwQtjAIJ7";
$consumer_secret = "ZSp8I8aQ27FQ4I8DjQPjNZYoZpVxxFg2Uwl6ygibQpcXnbKjdS";
$access_token = "796018368100888576-VxLJbv2peY7nU802GnGiuAoEfBmlUZp";
$access_token_secret = "83Zj1bobqBqXFIDknSsoLyK1i0FyERpSi8b8H4Z35APre";

$twitter = new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);
if(isset($_GET)){
	$hash = $_GET["tw"];
}

$tweets = $twitter->get('https://api.twitter.com/1.1/search/tweets.json??l=es&q=%'.$hash.'&src=typd&count=1&lang=es&result_type=recent');


foreach ($tweets->statuses as $key => $tweet) {


    echo $tweet->text;
}

 ?>
  
