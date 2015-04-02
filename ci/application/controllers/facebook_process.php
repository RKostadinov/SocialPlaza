<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Facebook_process extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        // To use site_url and redirect on this controller.
        $this->load->helper('url');
    }

//    function loginByFacebook()
//    {
//        echo "loginByFacebook ...";
//        $this->load->library('fb_connect');
//
//        $param['redirect_uri'] = site_url("facebook_process/facebook");
//        redirect($this->fb_connect->getLoginUrl($param));
//    }
//
//    function facebook()
//    {
//        echo "facebook ...";
//        $this->load->library('fb_connect');
//        if (!$this->fb_connect->user_id) {
//            //Handle not logged in,
//        } else {
//            $fb_uid = $this->fb_connect->user_id;
//            echo $fb_uid;
//            $fb_usr = $this->fb_connect->user;
//            echo $fb_usr;
//            //Handle user logged in,by updating session
//            //print_r($fb_usr) will help to see what is returned
//        }
//    }
//}
	public function login(){
        $this->load->library('facebook/facebook');
//		$this->load->library('facebook'); // Automatically picks appId and secret from config
        // OR
        // You can pass different one like this
        //$this->load->library('facebook', array(
        //    'appId' => '928591323857638',
        //    'secret' => '21f79c35adf4e5fa3e7a8c1adf0a1fa6',
        //    ));

		$user = $this->facebook->getUser();

        if ($user) {
            try {
                $data['user_profile'] = $this->facebook->api('/me');
            } catch (FacebookApiException $e) {
                $user = null;
            }
        }else {
            $this->facebook->destroySession();
        }

        if ($user) {

            $data['logout_url'] = site_url('facebook_process/logout'); // Logs off application
            // OR
            // Logs off FB!
            // $data['logout_url'] = $this->facebook->getLogoutUrl();

        } else {
            $data['login_url'] = $this->facebook->getLoginUrl(array(
                'redirect_uri' => site_url('facebook_process/login'),
                'scope' => array("email") // permissions here
            ));
            redirect($data['login_url']);
        }
        $my_feed = this->facebook->api('/me/home');
        $this->load->view('login', $data);
	}

    function post_to_wall()
    {
        $this->load->library('facebook/facebook');
//        if($this->fbSession)
//        {
            $param = array('message'=>$this->input->post('message'),'cb' => '');
//            if($photourl!="")
//            {
//                $param["picture"] = $photourl;
//            }
//            if($link!="")
//                $param["link"] = $link;
//        $wall_post = array('message' => 'this is my message'
//            'name' => 'SocialPlaza',
//            'caption' => "Caption of the Post",
//            'link' => 'http://socialplaza.info',
//            'description' => 'Post from www.socialplaza.info',
//            'picture' => 'http://mysite.com/pic.gif',
//            'actions' => array(array('name' => 'Get Search',
//                'link' => 'http://www.google.com'))
//        );
//        $result = $this->facebook->api('/me/feed/', 'post', $wall_post);
            echo $param['message'];
            $posts = $this->facebook->api('/me/feed','post',$param);
//            return TRUE;
//        }
//        else
//        {
//            return FALSE;
//        }
    }
    public function logout(){

        $this->load->library('facebook');

        // Logs off session from website
        $this->facebook->destroySession();
        // Make sure you destory website session as well.

        redirect('user_authentication/admin_page_show');
        //redirect('user_authentication/admin_page_show');
    }

}

