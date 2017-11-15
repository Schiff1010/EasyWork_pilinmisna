<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coba extends CI_Controller {
    
    public function formregister(){
        $this->load->view('static/mera_header');
        $this->load->view('coba');
        $this->load->view('static/mera_footer');
    }

    public function login(){

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
        if($this->form_validation->run() == TRUE){

            $username = $_POST['username'];
            $password = md5($_POST['password']);

            //check user in database
            $this->db->select('*');
            $this->db->from('akun');
            $this->db->where(array('username' => $username, 'password' => $password));
            $query = $this->db->get();
            $user = $query->row();
            //if user exists
            if ($user->email){
                //temporary message
                $this->session->set_flashdata('success', 'you are logged in');
 
                //set session variable
                //
                $_SESSION['user_logged'] = TRUE;
                $_SESSION['username'] = $user->username;

                //redirect to profile page
                redirect('jobseeker/lengkapidata', 'refresh');

            }else{
                $this->session->set_flashdata('error', 'tidak terdaftar');
                //redirect('coba/login', 'refresh');
            }
        }




        $this->load->view('static/mera_header');
        $this->load->view('login');
        $this->load->view('static/mera_footer');
    }




    public function register(){

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
                redirect('coba/login', 'refresh');
            }
        }

            $this->load->view('static/mera_header');
            $this->load->view('wru');
            $this->load->view('static/mera_footer');
        
    } 








	public function cobaregister(){

        //create the data object
        $data = new stdClass();

        //set validation rules
        $this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric|min_length[4]|is_unique[users.username]', array('is_unique' => 'this username already exist. please choose another one.'));
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 
            'Password', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('password_confirm', 'Confirm Password', 'trim|required|min_length[6]|matches[password]');

        if($this->form_validation->run() === false){

            //validation no ok, send validaiton error to the view
            $this->load->view('static/mera_header');
            $this->load->view('coba', $data);
            $this->load->view('static/mera_footer');
        } else {

            // set variables from the form    
            $username   = $this ->input->post('username');
            $email      = $this ->input->post('email');
            $password   = $this ->input->post('password');

            if($this->mcoba->create_user($username, $email, $password)){
                //user creation ok
                $this->load->view('static/mera_header');
                $this->load->view('jobseeker/js_tampil');
                $this->load->view('static/mera_footer');
            
            } else {
                //user creation failed, this should never happen
                $data->error = 'there was a problem creating your new account. Please try again.';

                //send error to the view
                $this->load->view('static/mera_header');
                $this->load->view('jobseeker/js_tampil');
                $this->load->view('static/mera_footer');
            }

        }

        
        
    }


    
}
