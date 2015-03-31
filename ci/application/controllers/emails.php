<?php

class Emails extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('email');


    }

    public function index(){
        echo form_open('emails/send');
        echo form_label('Name:');
        echo form_input('name');
        echo "<br/>";
        echo "<br/>";
        echo form_label('Email:');
        echo form_input('email');
        echo "<br/>";
        echo "<br/>";
        echo form_label('Text:');
        echo form_input('text');
        echo "<br/>";
        echo "<br/>";
        echo form_label('Receiver:');
        echo form_input('receiver');
        echo "<br/>";
        echo "<br/>";
        echo form_submit('submit', 'Send');
        echo form_close();

    }

    public function send(){
        $this->email->initialize(array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.sendgrid.net',
            'smtp_user' => 'rkostadinov',
            'smtp_pass' => 'me3eto123',
            'smtp_port' => 587,
            'crlf' => "\r\n",
            'newline' => "\r\n"
        ));
        $data = array(
            'name' 			=> $this->input->post('name'),
            'email' 	    => $this->input->post('email'),
            'text' 	        => $this->input->post('text'),
            'receiver' 	    => $this->input->post('receiver')
        );
        $this->email->from($data['email'], $data['name']);
        $this->email->to($data['receiver']);
        $this->email->subject('Email Test');
        $this->email->message($data['text']);
        $this->email->send();

        echo $this->email->print_debugger();


    }

}