<?php 


include "api/twitteroauth.php";

$consumer_key = "Q8DZ6nk8NG50cRjNWwQtjAIJ7";
$consumer_secret = "ZSp8I8aQ27FQ4I8DjQPjNZYoZpVxxFg2Uwl6ygibQpcXnbKjdS";
$access_token = "796018368100888576-VxLJbv2peY7nU802GnGiuAoEfBmlUZp";
$access_token_secret = "83Zj1bobqBqXFIDknSsoLyK1i0FyERpSi8b8H4Z35APre";

$twitter = new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);

$tweets = $twitter->get('https://api.twitter.com/1.1/search/tweets.json??l=es&q=%amor&src=typd&count=20&lang=es&result_type=recent');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Twitter API SEARCH</title>
</head>
<body>


<?php 

foreach ($tweets->statuses as $key => $tweet) {
 ?>

    <div class="twitContainer">
    <a target="_blank" href="https://twitter.com/gabdala/status/<?php echo $tweet->id_str ?>">
	    <img src="<?=$tweet->user->profile_image_url;?>" />
	    <p><?=$tweet->text ?></p>

    </a>
    <p><?=$tweet->created_at ?></p>
    </div>
<?php } ?>
  

</body>
</html>