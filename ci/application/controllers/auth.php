<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Auth extends CI_Controller {

    private $open_auth_config;

    public function __construct() {
        parent::__construct();
        $this->config->load('opauth');
        $this->open_auth_config = $this->config->item('opauth');
        $this->load->library('opauth_lib', $this->open_auth_config);
    }

    public function login($stratergy = "") {
        if ($stratergy != "") {
            $this->opauth_lib->initialize();
        } else {
            foreach($this->open_auth_config['Strategy'] as $strategy=>$strategy_detail) {
                echo "<p><a href='".$this->config->item('base_url')."/auth/login/".strtolower($strategy)."'>".$strategy."</a></p>";
            }
        }
    }

    public function authenticate() {
        $response = null;
   	$response = unserialize(base64_decode($_POST['opauth']));
   	echo "<pre>";print_r($response);exit;
    }

    public function logout() {
        
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
