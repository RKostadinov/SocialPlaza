<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Twitter extends CI_Controller {

	/* show link to connect to Twiiter */
    public function __construct(){
        parent::__construct();
        $this->load->library('twitter/twconnect');
    }
	public function index() {
	    $this->redirect();
	}

	/* redirect to Twitter for authentication */
	public function redirect() {
		/* twredirect() parameter - callback point in your application */
		/* by default the path from config file will be used */
		$ok = $this->twconnect->twredirect('twitter/callback');

		if (!$ok) {
			echo 'Could not connect to Twitter. Refresh the page or try again later.';
		}
	}


	/* return point from Twitter */
	/* you have to call $this->twconnect->twprocess_callback() here! */
	public function callback() {
		$ok = $this->twconnect->twprocess_callback();
		if ( $ok ) { redirect('twitter/success'); }
			else redirect ('twitter/failure');
	}

	/* authentication successful */
	/* it should be a different function from callback */
	public function success() {
		echo '<p><a href="' . base_url() . 'twitter/clearsession">Logout</a></p>';
		$this->twconnect->twaccount_verify_credentials();
        echo "<pre>";
		print_r($this->twconnect->tw_user_info);
        echo '</pre>';

        echo 'Session data:<br/><pre>';
        print_r($this->session->all_userdata());
        echo '</pre>';
	}

	/* authentication un-successful */
	public function failure() {
		echo '<p>Twitter connect failed</p>';
		echo '<p><a href="' . base_url() . 'twitter/clearsession">Try again!</a></p>';
	}

	/* clear session */
	public function clearsession() {
		$this->session->unset_userdata('tw_access_token');
        $this->session->unset_userdata('tw_status');
		redirect('/');
	}

}