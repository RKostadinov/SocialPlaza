<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Facebook_process extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {

        redirect($this->facebook->login_url());
    }


//
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
//
//    public function show_feed(){
//            $feed = $this->facebook->api('me/feed');
//        return $feed;
//
//
//    }
//    public function post_to_wall()
//    {
////        $this->load->library('facebook/facebook');
////        if($this->fbSession)
////        {
//            $param = array('message'=>$this->input->post('message'));
////            if($photourl!="")
////            {
////                $param["picture"] = $photourl;
////            }
////            if($link!="")
////                $param["link"] = $link;
////        $wall_post = array('message' => 'this is my message'
////            'name' => 'SocialPlaza',
////            'caption' => "Caption of the Post",
////            'link' => 'http://socialplaza.info',
////            'description' => 'Post from www.socialplaza.info',
////            'picture' => 'http://mysite.com/pic.gif',
////            'actions' => array(array('name' => 'Get Search',
////                'link' => 'http://www.google.com'))
////        );
////        $result = $this->facebook->api('/me/feed/', 'post', $wall_post);
//            echo $param['message'];
//            if($posts = $this->facebook->api('/me/feed','post',$param) == TRUE){
//                echo "You successfully upload a file";
//            }else{
//                echo "File upload failed";
//            }
//
////            return TRUE;
////        }
////        else
////        {
////            return FALSE;
////        }
//
//    }
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

