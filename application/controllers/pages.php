<?php

class Pages extends CI_Controller {

	public function view($page = 'home') {

		//page invalid
		if (!file_exists('application/views/pages/' . $page . '.php')) {
			show_404();	
		}

		$data['title'] = ucfirst($page); //first letter capitalised
		$data['app_title'] = 'Twit Stats';

		$this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);

	}
}