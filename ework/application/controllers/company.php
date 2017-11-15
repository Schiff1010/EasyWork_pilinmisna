  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {


    function profile(){
    	$this->load->view('static/mera_header');
       $this->load->view('company/profile_comp');
      $this->load->view('static/mera_footer');
    }

    function tesaja(){
    	$this->load->view('static/mera_header');
        $this->load->view('tes');
        $this->load->view('static/mera_footer');
    }

   # function profile(){
    #    $this->load->model('mcoba')
    #    $getProv = $this->mcoba->getProv();
    #    $getKab = $this->mcoba->getKab();
    #    $this->load->view('static/mera_header', 'company/profile_comp', 'static/mera_footer', ['getProv'=>$getProv, 'getKab'=>$getKab]);
        
    #}

    function getProvinsi(){

    }


    
}


