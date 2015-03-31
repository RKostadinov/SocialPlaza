<?php
    session_start();

Class Twitter extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->library('twitteroauth');
        $this->config->load('twitter');

    }

    public function index(){
        $consumer = $this->config->item('twitter_consumer_token');
        $consumer_secret = $this->config->item('twitter_consumer_secret');
        $access_token = $this->config->item('twitter_access_token');
        $access_token_secret = $this->config->item('twitter_access_secret');
        $oauth_callback = $this->config->item('oauth_callback');


        $connection = $this->twitteroauth->create($consumer, $consumer_secret,$access_token, $access_token_secret);

//        $request_token = $connection->oauth('oauth/request_token', array('o auth_callback' => OAUTH_CALLBACK));
        $content = $connection->get('account/verify_credentials');
        $data['twitter'] = $content;
        $this->load->view('twitter', $data);


    }

}

?>