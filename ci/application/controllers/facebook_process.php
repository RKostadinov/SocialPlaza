<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Facebook_process extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

    }

    public function index(){

        redirect($this->facebook->login_url());
    }



//        public function index(){
//            $this->show_feed();
//        }
//	public function login(){
//		$user = $this->facebook->getUser();
//        if ($user) {
//            try {
//                $data['user_profile'] = $this->facebook->api('/me');
//                $accessToken = $this->facebook->getAccessToken();
//            } catch (FacebookApiException $e) {
//                $user = null;
//            }
//        }else {
//            $this->facebook->destroySession();
//        }
//        if ($user) {
//            $data['logout_url'] = site_url('facebook_process/logout'); // Logs off application
//        } else {
//            $data['login_url'] = $this->facebook->getLoginUrl(array(
//                'redirect_uri' => site_url('facebook_process/login'),
//                'scope' => array("email" , "publish_actions", "read_stream", "user_posts" , "user_photos") // permissions here
//            ));
//            redirect($data['login_url']);
//        }
//
//        $data["feed"] = $this->show_feed();
//        var_dump($this->session->all_userdata());
//        $this->load->view('login', $data);
//	}

    public function show_feed(){
        $data["feed"]  = $this->facebook->show_feed()->getResponse();
        $data['user_profile'] = $this->facebook->get_user();

   var_dump($data['feed']);
        $this->load->view('login', $data);
        return $data;


    }

//    public function logout(){
////        $this->load->library('facebook');
//
//        // Logs off session from website
//        $this->facebook->destroySession();
//        // Make sure you destory website session as well.
//
//        $this->load->view('admin_page', $this->session->all_userdata());
//    }
}

