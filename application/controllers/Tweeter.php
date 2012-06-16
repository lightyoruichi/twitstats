<?php 

include "TweetStatCore.php";

class Tweeter extends TweetStatCore {

	public function getFriends($username = '') {
		$api_string = 'http://api.twitter.com/1/friends/ids.json?cursor=-1&screen_name=' . $username;
		return parent::acquire_file($api_string);
	}
}

