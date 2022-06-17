<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
        parent::__construct();
		$this->load->model("Welcome_model", "welcome");
    }	

	public function index() {
		$data=[];
		$url = 'https://www.pinkvilla.com/photo-gallery-feed-page';
		$data['dataFeed'] = $this->welcome->getFeedData($url);
		
		$this->load->view('feeds', $data);
	}

	public function getNextFeed(){
		echo json_encode($this->welcome->fetchNextFeed());exit;
	}
}
