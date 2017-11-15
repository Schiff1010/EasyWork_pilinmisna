<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{

		    $this->load->view('static/mera_header');
        $this->load->view('slider');
        $this->load->view('static/mera_footer');
	}

    function wru(){

      if (isset($_POST['register'])){
          $this->form_validation->set_rules('username', 'Username', 'required');
          $this->form_validation->set_rules('email', 'Email', 'required');
          $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
          $this->form_validation->set_rules('password', 'password_confirm', 'required|min_length[8]|matches[password]');


          //if form validation true
          if($this->form_validation->run() == TRUE){
              echo "form validated";

              //add user in database
              
              $data = array(
                  'username' => $_POST['username'],
                  'email' => $_POST['email'],
                  'password' => md5($_POST['password'])
              );
              $this->db->insert('akun', $data);
              $this->session->set_flashdata("success", "your account has been registered");
              redirect('wru', 'refresh');
          }
      }
       $this->load->view('static/mera_header');
       $this->load->view('wru');
       $this->load->view('static/mera_footer');
    }

  

}
