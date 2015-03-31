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
	public function new_user_registration() {
		$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('email_value', 'Email', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('registration_form');
		} else {
			$data = array(
				'name' 			=> $this->input->post('name'),
				'user_name' 	=> $this->input->post('username'),
				'user_email' 	=> $this->input->post('email_value'),
				'user_password' => $this->input->post('password'),
                'verified'     => sha1(uniqid(rand()))
			);
			$result = $this->login_database->registration_insert($data) ;
			if ($result == TRUE) {
                $this->email->initialize(array(
                    'protocol' => 'smtp',
                    'smtp_host' => 'smtp.sendgrid.net',
                    'smtp_user' => 'rkostadinov',
                    'smtp_pass' => 'me3eto123',
                    'smtp_port' => 587,
                    'crlf' => "\r\n",
                    'newline' => "\r\n"
                ));

                $code = $data['verified'];
                $message = "http://localhost/ci/user_authentication/confirm/$code";
                $data = array(
                    'name' 			=> 'SocialPlaza',
                    'email' 	    => 'admin@sociaplaza.com',
                    'text' 	        => $message,
                    'receiver' 	    => $data['user_email']
                );
                $this->email->from($data['email'], $data['name']);
                $this->email->to($data['receiver']);
                $this->email->subject('Email verification');
                $this->email->message($data['text']);
                $this->email->send();


				$data['message_display'] = 'Registration Successfully !';
				$this->load->view('login_form', $data);
			} else {
				$data['message_display'] = 'Username already exist!';
				$this->load->view('registration_form', $data);
		}
		}
	}
    public function confirm($code){
        $result = $this->login_database->confirm($code);

        if($result == TRUE){
            echo "Success!";
        }else{
            echo "You`re a failure";
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
				$sess_array = array(
					'username' => $this->input->post('username')
				);

				// Add user data in session
				$result = $this->login_database->read_user_information($sess_array);
				if($result != false){
					$data = array(
						'name' 		=>	$result[0]->name,
						'username'	=>	$result[0]->user_name,
						'email'		=>	$result[0]->user_email
                    );
                    $this->session->set_userdata('session', $data);
//                    var_dump($this->session->all_userdata());
                    $data = $this->session->all_userdata();
                    $this->load->view('admin_page', $data);
				}
			}else{
                $data['message_display'] = 'Invalid Username or Password';
				$this->load->view('login_form', $data);
			}
		}
	}
	public function logout() {
		$this->session->unset_userdata('session');
		$data['message_display'] = '';
		$this->load->view('login_form', $data);
	}
}
?>