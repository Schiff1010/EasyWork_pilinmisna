   <div class="col-lg-6  col-md-6 col-sm-6">
                                <div class="row  move-me wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s" >

                                  <?php 
                                  $varcoba = array('class'=>'form-signin');
                                  echo form_open('coba/tescoba', $varcoba);
                                   ?>
                                <form>
                                  <div class="form-group">
                                    <?php echo form_input(array('name'=>'username', 'id'=>'username', 'placeholder'=>'Username','class'=>'form-control', 'value'=>set_value('username'))); ?>
                                    <?php echo form_error('username'); ?>
                                  </div>
                                  <div class="form-group">
                                    <?php echo form_input(array('name'=>'email', 'id'=>'emaol', 'placeholder'=>'Email','class'=>'form-control', 'value'=>set_value('email'))); ?>
                                    <?php echo form_error('email'); ?>
                                  </div>
                                  <div class="form-group">
                                    <?php echo form_input(array('name'=>'password', 'id'=>'password', 'placeholder'=>'Password','class'=>'form-control', 'value'=>set_value('password'))); ?>
                                    <?php echo form_error('password'); ?>
                                  </div>

                                  <?php echo form_submit(array('value'=>'Sign Up', 'class'=>'btn custom-btn-one')); ?>

                                    <!--<div class="form-group">
                                        <input type="text" class="form-control" required="required" placeholder="Username" />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" required="required" placeholder="Email" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" required="required" placeholder="Password" />
                                    </div>
                                    
                                    <div class="form-group">
                                        <a href="" class="btn custom-btn-one ">Sign Up</a>
                                    </div>-->
                                </form>
                                <?php echo form_close(); ?>
                            </div>
                    </div>



                    <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coba extends CI_Controller {

  

    function tescoba(){
       

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');    
            $this->form_validation->set_rules('password', 'Password', 'required');    
                       
            if ($this->form_validation->run() == FALSE) {   
                $this->load->view('static/mera_header');
                $this->load->view('coba');
                $this->load->view('static/mera_footer');
            }else{                
                if($this->user_model->isDuplicate($this->input->post('email'))){
                    $this->session->set_flashdata('flash_message', 'User email already exists');
                    redirect(site_url().'#');
                }else{
                    
                    $clean = $this->security->xss_clean($this->input->post(NULL, TRUE));
                    $id = $this->user_model->insertUser($clean); 
                    $token = $this->user_model->insertToken($id);                                        
                    
                    $qstring = $this->base64url_encode($token);                    
                    $url = site_url() . 'main/complete/token/' . $qstring;
                    $link = '<a href="' . $url . '">' . $url . '</a>'; 
                               
                    $message = '';                     
                    $message .= '<strong>You have signed up with our website</strong><br>';
                    $message .= '<strong>Please click:</strong> ' . $link;                          
                    echo $message; //send this in email
                    exit;
                     
                    
                };              
            }
    }

    


    
}



.board{
   width: 85%;
margin: 0px auto;
}
.board .nav-tabs {
    position: relative;
    margin: 40px auto;
    margin-bottom: 0;
    box-sizing: border-box;

}

.board .tab-content span {
    display:block;
}
.board .tab-content i {
    color: rgb(255, 15, 101);
     margin-right: 15px;
     margin-left: 15px;
     font-style:normal;
}

.board li.active span.round-tabs.one{
    background: #fff !important;
    border: 2px solid #ddd;
    color: rgb(34, 194, 34);
}

.board span.round-tabs.two{
    color: #febe29;
    border: 2px solid #febe29;
}

.board li.active span.round-tabs.two{
    background: #fff !important;
    border: 2px solid #ddd;
    color: #febe29;
}
.board li.active span.round-tabs.three{
    background: #fff !important;
    border: 2px solid #ddd;
    color: #3e5e9a;
}
.board li.active span.round-tabs.four{
    background: #fff !important;
    border: 2px solid #ddd;
    color: #f1685e;
}
.board li.active span.round-tabs.five{
    background: #fff !important;
    border: 2px solid #ddd;
    color: #999;
}

.board li:after {
    content: " ";
    position: absolute;
    left: 45%;
   opacity:0;
    margin: 0 auto;
    bottom: 0px;
    border: 5px solid transparent;
    border-bottom-color: rgb(255, 15, 101)!important;
    transition:0.1s ease-in-out;
    
}
.board li.active:after {
    content: " ";
    position: absolute;
    left: 45%;
   opacity:1;
    margin: 0 auto;
    bottom: 0px;
    border: 10px solid transparent;
    border-bottom-color: #ddd;
    
}

    .board {
width: 90%;
height:auto !important;
}

.board li.active:after {
content: " ";
position: absolute;
left: 35%;
}


  function login(){
        $data_form = $this->input->post(NULL, TRUE);
        if ($data_form) {
            # code...
            $username = $data_form['username'];
            $password = $data_form['password'];
            $result = $this->login_model->getuser($username,$password);
            if (result) {
                # code...
                $this->session->set_userdata('login', true);
                redirect ('jobseeker/profile');
            }
        }
    }

    function register(){
        $data_form = $this->input->post(NULL, TRUE);
        if ($data_form) {
            $username = $data_form['username'];
            $password = $data_form['password'];
            $email    = $data_form['email'];
            $datas = array(
                'username' => $username,
                'email'    => $email,
                'password' => md5($password)
            );
            $this->login_model->register($datas);
            redirect('jobseeker/profile');
            
        }
        $this->load->view('static/mera_header');
        $this->load->view('wru');
        $this->load->view('static/mera_footer');

    
    }

    <?php if(count($getprov)): ?>
                                    <?php foreach($getprov as $prov): ?>
                                      <option value="<?php echo $prov->id; ?>"><?php echo $prov->name; ?></option>
                                  <?php endforeach; ?>
                                  <?php  ?>
                                 

                                 <?php if(count($getkab)): ?>
                                    <?php foreach($getkab as $kab): ?>
                                      <option value="<?php echo $prov->id; ?>"><?php echo $kab->name; ?></option>
                                  <?php endforeach; ?>
                                  <?php  ?>



        <div class="container example5">
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar5">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://disputebills.com"><img style=" width: 64px;" src="https://res.cloudinary.com/disputebills/image/upload/v1462474206/blue-mark_cnzgry.png" alt="Dispute Bills">Brand Name
                </a>
              </div>
              <div id="navbar5" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </div>
              <!--/.nav-collapse -->
            </div>
            <!--/.container-fluid -->
          </nav>

        </div>



        <div class="example5">
       <nav class="navbar navbar-inverse navbar-fixed-top">
         <div class="container-fluid">
           <div class="navbar-header">
             <a class="navbar-brand" href="#"><img style=" width: 120px; " src="<?php echo base_url('assets/img/log.png') ?>" alt="Easy Work"></a>
           </div>
           <ul class="nav navbar-nav">
             <li class="active"><a href="#">Home</a></li>
             <li><a href="#"></a></li>
             <li><a href="#">Page 2</a></li>
             <li><a href="#">Page 3</a></li>
           </ul>
         </div>
       </nav>                                                                                               
   </div>


   <nav class="navbar navbar-inverse navbar-static-top example6 navbar-fixed-top">
       <div class="container">
         <div class="navbar-header">
           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar6">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
           <a class="navbar-brand text-hide" href="">
           </a>
         </div>
         <div id="navbar6" class="navbar-collapse collapse">
           <ul class="nav navbar-nav navbar-right">
             <li class=""><a href="#">Home</a></li>
             <li><a href="#">About</a></li>
             <li><a href="#">Contact</a></li>
             <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
               <ul class="dropdown-menu" role="menu">
                 <li><a href="#">Action</a></li>
                 <li><a href="#">Another action</a></li>
                 <li><a href="#">Something else here</a></li>
                 <li class="divider"></li>
                 <li class="dropdown-header">Nav header</li>
                 <li><a href="#">Separated link</a></li>
                 <li><a href="#">One more separated link</a></li>
               </ul>
             </li>
           </ul>
         </div>
         <!--/.nav-collapse -->
       </div>
       <!--/.container-fluid -->
     </nav>



  <div class="container example2" >
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://disputebills.com"><img src="<?php echo base_url('') ?>assets/img/log.png" alt="" style="margin-top: -100px; width: 100%;">
          </a>
        </div>
        <div id="navbar2" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
      <!--/.container-fluid -->
    </nav>
  </div>                                    