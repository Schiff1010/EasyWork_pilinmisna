<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobseeker extends CI_Controller {

	  function signup(){

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
                redirect('home/index', 'refresh');
            }
        }


        $this->load->view('static/mera_header');
        $this->load->view('jobseeker/signup_js');    
        $this->load->view('static/mera_footer');
             
    }
     function inputjs(){
        
         $akun = array(
            'username' => $this->input->post('Email'),
            'password' => $this->input->post('Password') 
        );
        $this->db->insert('akun', $akun);

        redirect('lengkapidata');
    }
    
    function profile(){
        
        $this->load->view('static/mera_header');
        $this->load->view('jobseeker/profile_js');
        $this->load->view('static/mera_footer');
    }

    function profiletes(){
        
        $this->load->view('static/mera_header');
        $this->load->view('jobseeker/profile2');
        $this->load->view('static/mera_footer');
    }


    function search(){
        $this->load->view('static/mera_header');
        $this->load->view('jobseeker/search');
        $this->load->view('static/mera_footer');
    }

    function tampil(){
        $this->load->view('static/mera_header');
        $this->load->view('jobseeker/js_tampil');
        $this->load->view('static/mera_footer');
    }

    
}
