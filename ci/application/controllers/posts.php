<?php

Class Posts extends CI_Controller{

    public function index(){
        $facebook = $this->input->post('facebook');
        $twitter = $this->input->post('twitter');
        $linkedin = $this->input->post('linkedin');
        $message = $this->input->post('message');
        if($twitter){
            echo $message;
            $tokens = $this->twitter_database->get_tokens($this->session->all_userdata());

            $connection = $this->twitteroauth->create($this->config->item('twitter_consumer_token'), $this->config->item('twitter_consumer_secret'), $tokens[0]->oauth_token, $tokens[0]->oauth_token_secret);
            if(strlen($message) <= 140){
                $connection->post('statuses/update', array('status' => $message));
                redirect('/');
            }
        }
    }


}
?>