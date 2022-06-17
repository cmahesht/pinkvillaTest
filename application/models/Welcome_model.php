<?php

Class Welcome_model extends CI_model {
    public function __construct(){
        parent::__construct();
    }

    public function getFeedData($url){
        $ch = curl_init();
		$curlConfig = array(
			CURLOPT_URL            => $url,
			CURLOPT_POST           => true,
			CURLOPT_RETURNTRANSFER => true,
		);
		curl_setopt_array($ch, $curlConfig);
		$result = curl_exec($ch);
		curl_close($ch);

		return json_decode($result);
    }

    public function fetchNextFeed(){
		$postArr = $this->input->post();

		$url = 'https://www.pinkvilla.com/photo-gallery-feed-page/page/'.$postArr['page'];

        $data['nextFeed'] = $this->getFeedData($url);

        return $this->load->view("next_feed", $data, true);
    }
}    