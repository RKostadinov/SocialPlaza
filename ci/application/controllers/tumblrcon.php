<?php
class Tumblrcon extends CI_Controller
{

    public function index(){
        echo "Hello";
        $this->load->library('Tumblr');
        $blog_info = $this->tumblr->blog_info();
        // Blog info returned in object
        echo $blog_info->title;// echo blog title
        echo $blog_info->posts;// number of posts


    }

}
