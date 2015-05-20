<?php
session_start();

Class User_Authentication extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('login_database');
        $this->load->library('email');
	}
    public function index(){
        if($this->session->userdata('session')){
            $data = $this->session->all_userdata();
            $this->admin_page_show($data);
        } else{
            $this->user_login_show();
        }
    }
	public function user_login_show() {
		$this->load->view('login_form');
	}
	public function user_registration_show() {
		$this->load->view('registration_form');
	}
    public function admin_page_show($data){
        $this->load->view('admin_page', $data);
    }
    public function payment_show(){
        $this->load->view('payment');
    }

	public function new_user_registration() {
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('email_value', 'Email', 'trim|required|xss_clean|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|matches[password_confirmation]|md5');
        $this->form_validation->set_rules('password_confirmation', 'Password Confirmation', 'trim|required|xss_clean');

        if ($this->form_validation->run() == FALSE) {
			$this->load->view('registration_form');
		} else {
			$data = array(
				'first_name' 			=> $this->input->post('first_name'),
				'last_name' 	=> $this->input->post('last_name'),
				'username' 	=> $this->input->post('username'),
				'email_value' => $this->input->post('email_value'),
                'password'     => $this->input->post('password'),
                'verified' => sha1(uniqid(rand()))
			);
            $email_check = $this->login_database->check_email($data);
            if($email_check == TRUE){
//                $data['message_display'] = 'Email already exists!';
                $this->load->view('registration_form', $data);
            }
			$result = $this->login_database->registration_insert($data) ;
			if ($result == TRUE) {

                $this->email->initialize(array(
                    'protocol' => 'smtp',
                    'smtp_host' => 'smtp.sendgrid.net',
                    'smtp_user' => 'rkostadinov',
                    'smtp_pass' => 'me3eto123',
                    'smtp_port' => 587,
                    'crlf' => "\r\n",
                    'newline' => "\r\n",
                    'mailtype' => 'html',
                ));
                $code = $data['verified'];
                $link = "http://localhost/ci/user_authentication/confirm/$code";


                $button = array(
                    'first_name' 			=> $this->input->post('first_name'),
                    'title' => $link
                );

                $message = $this->load->view('email_view', $button, true);
                $this->email->message($message);

                $data = array(
                    'name' 			=> 'SocialPlaza',
                    'email' 	    => 'admin@sociaplaza.info',
                    'text' 	        => $message,
                    'receiver' 	    => $data['email_value']
                );


                $this->email->from($data['email'], $data['name']);
                $this->email->to($data['receiver']);
                $this->email->subject('Email verification');
                $this->email->message($data['text']);
                $this->email->send();


//				$data['message_display'] = 'Registration Successfully !';
				$this->load->view('login_form', $data);
			} else {
//				$data['message_display'] = 'Username already exist!';
				$this->load->view('registration_form', $data);
		}
		}
	}
    public function confirm($code){
        $result = $this->login_database->confirm($code);

        if($result == TRUE){
           $this->load->view('verified_email');
        }else{
           $this->load->view('err_verifying_email');
        }
    }
	public function user_login_process() {
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login_form');
		} else {
			$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
			);
			$result = $this->login_database->login($data);

			if($result == TRUE){
                $verified = $this->login_database->is_verified($data);
                if($verified == TRUE){
                    $sess_array = array(
                        'username' => $this->input->post('username')
                    );

                    // Add user data in session
                    $result = $this->login_database->read_user_information($sess_array);
                    if($result != false) {
                        $data = array(
                            'name' => $result[0]->first_name,
                            'username' => $result[0]->username,
                            'email' => $result[0]->email_value
                        );
                        $this->session->set_userdata('session', $data);
                        $data = $this->session->all_userdata();
                        $this->load->view('admin_page', $data);
                      }
				}
                else{
                    $this->load->view('non_verified_email');

                }
			}else{
//                $this->session->set_flashdata('message_display', 'Invalid Username or Password');
                $data['message_display'] = 'Invalid Username or Password';
				$this->load->view('login_form', $data);
			}
		}
	}
	public function logout() {
		$this->session->unset_userdata('session');
        redirect(base_url());
	}
}
?>