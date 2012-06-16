<?php

class TweetStatCore extends CI_Controller {
	
	public function acquire_file($url) {

		$handle = curl_init($url);

		//sets cURL options
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 10);


		//if the request failed
		if (curl_exec($handle) === false) {
			return 'Error: ' . curl_error($handle);
		}

		else {
			$data = curl_exec($handle);
			return $data;
		}

		curl_close($handle);
	}

}