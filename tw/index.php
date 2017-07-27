<?php 

header("Access-Control-Allow-Origin: *");
require "API/twitteroauth.php";

$consumer_key = "Q8DZ6nk8NG50cRjNWwQtjAIJ7";
$consumer_secret = "ZSp8I8aQ27FQ4I8DjQPjNZYoZpVxxFg2Uwl6ygibQpcXnbKjdS";
$access_token = "796018368100888576-VxLJbv2peY7nU802GnGiuAoEfBmlUZp";
$access_token_secret = "83Zj1bobqBqXFIDknSsoLyK1i0FyERpSi8b8H4Z35APre";

$twitter = new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);

$tweets = $twitter->get('https://api.twitter.com/1.1/search/tweets.json??l=es&q=%23multimedia&src=typd&count=20&lang=es&result_type=recent');

$objetoFinal = array();

$i = 0;

foreach ($tweets->statuses as $key => $tweet) {

	$objetoFinal[$i]["id"] = $tweet->id_str;
	$objetoFinal[$i]["profile-image"] = $tweet->user->profile_image_url;
	$objetoFinal[$i]["twit"] = $tweet->text ;

	$i++;
} 

 $objetoFinal = json_encode($tweets);
echo $objetoFinal;
?>
  