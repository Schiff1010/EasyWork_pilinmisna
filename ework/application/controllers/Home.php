<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		//$this->load->view('header');
        $this->load->view('home');
	}

    function wru(){
        $this->load->view('wru');
    }
    function login(){
        $this->load->view('login');
    }
    function signup_js(){
       // $this->data['signup'] = $this->m_signjs->getSignup('akun');
        $this->load->view('jobseeker/signup_js');

    }
    function cari(){
        $this->load->view('jobseeker/search');
    }
    function lengkapidata(){
        $this->load->view('jobseeker/profile');
    }

    function signup_comp(){
        $this->load->view('company/signup_comp');
    }

    function company_profile(){
        $this->load->view('company/pro_comp');
    }
   


    
}
