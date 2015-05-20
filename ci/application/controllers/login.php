<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session', 'lib_login'));
    }

    public function index(){
        redirect($this->facebook->login_url());
    }
    /**
     * facebook login
     *
     * @return void
     * @author appleboy
     **/
    public function facebook(){
        $fb_data = $this->lib_login->facebook();

        if (isset($fb_data['me'])) {
//            var_dump($data);
//
//            $data["feed"] = $this->facebook->show_feed();
//            $this->load->view('login', $data);
            redirect('/');

        } else {
            redirect($fb_data['loginUrl']);
        }
    }
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */
