<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Twitter extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('twitter/twconnect');
    }
	public function index() {
	    $this->redirect();
	}
	public function redirect() {
		$ok = $this->twconnect->twredirect('twitter/callback');
		if (!$ok) {
			echo 'Could not connect to Twitter. Refresh the page or try again later.';
		}
	}
	public function callback() {
		$ok = $this->twconnect->twprocess_callback();
		if ($ok){
            redirect('twitter/success');
        }
		else
            redirect('twitter/failure');
	}
	public function success(){
        $this->twconnect->twaccount_verify_credentials();
        $user_info = $this->twconnect->tw_user_info;
        $home_timeline = $this->get_home_timeline();
        $data = array('user_info' => $user_info, 'home_timeline' => $home_timeline);
        $this->load->view('twitter', $data);
	}
	public function failure() {
		echo '<p>Twitter connect failed</p>';
		echo '<p><a href="' . base_url() . 'twitter/clearsession">Try again!</a></p>';
	}
	public function clearsession() {
		$this->session->unset_userdata('tw_access_token');
        $this->session->unset_userdata('tw_status');
		redirect('/');
	}
    public function tweet(){
        $tweet = $this->input->post('tweet_text');
        $this->twconnect->tw_post('statuses/update' , array('status' => $tweet));
    }
    public function get_home_timeline(){
       return $home_timeline = $this->twconnect->get('statuses/home_timeline', array('count'=> '10'));
    }
}