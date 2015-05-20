<?php
session_start();
// Skip these two lines if you're using Composer
define('FACEBOOK_SDK_V4_SRC_DIR', APPPATH . 'libraries/facebook/vendor/Facebook/');
require APPPATH . 'libraries/facebook/vendor/Facebook/autoload.php';

use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\GraphUser;
use Facebook\FacebookRequestException;

use Facebook\FacebookRedirectLoginHelper;
//
//
class Facebook {
    var $ci;
    var $helper;
    var $session;
    var $permissions;

    public function __construct() {
        $this->ci =& get_instance();
        $ci =& get_instance();
        $ci->load->model('facebook_database');

        $this->permissions = $this->ci->config->item('permissions', 'facebook');

        // Initialize the SDK
        FacebookSession::setDefaultApplication( $this->ci->config->item('api_id', 'facebook'), $this->ci->config->item('app_secret', 'facebook') );

        // Create the login helper and replace REDIRECT_URI with your URL
        // Use the same domain you set for the apps 'App Domains'
        // e.g. $helper = new FacebookRedirectLoginHelper( 'http://mydomain.com/redirect' );
        $this->helper = new FacebookRedirectLoginHelper( $this->ci->config->item('redirect_url', 'facebook') );

        if ( $this->ci->session->userdata('fb_token') ||  $ci->facebook_database->get_tokens($ci->session->all_userdata())){

            $this->session = new FacebookSession( $this->ci->session->userdata('fb_token') );

            // Validate the access_token to make sure it's still valid
            try {
                if ( ! $this->session->validate() ) {
                    $this->session = null;
                }
            } catch ( Exception $e ) {
                // Catch any exceptions
                $this->session = null;
            }
        } else {
            // No session exists
            try {
                $this->session = $this->helper->getSessionFromRedirect();
            } catch( FacebookRequestException $ex ) {
                // When Facebook returns an error
            } catch( Exception $ex ) {
                // When validation fails or other local issues
            }
        }

        if ( $this->session ) {
            $this->ci->session->set_userdata( 'fb_token', $this->session->getToken() );

            $ci->facebook_database->insert_tokens($ci->session->all_userdata());

            $this->session = new FacebookSession( $this->session->getToken() );
        }
    }

    /**
     * Returns the login URL.
     */
    public function login_url() {
        return $this->helper->getLoginUrl( $this->permissions );
    }

    /**
     * Returns the current user's info as an array.
     */
    public function get_user() {
        if ( $this->session ) {
            /**
             * Retrieve User’s Profile Information
             */
            // Graph API to request user data
            $request = ( new FacebookRequest( $this->session, 'GET', '/me' ) )->execute();

            // Get response as an array
            $user = $request->getGraphObject()->asArray();

            return $user;
        }
        return false;
    }
    public function post($message){

        $request = ( new FacebookRequest( $this->session, 'POST', '/me/feed', array('message'=>$message) ) )->execute();


    }

    public function show_feed(){

     return   $request = ( new FacebookRequest( $this->session, 'GET', '/10204068305295525/feed') )->execute();


    }
}