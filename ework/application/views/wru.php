  
   
  <style>
  .hd{
    text-align: center;
    font-size: 100px;
    position:relative;
    top: -100px;

  }

  #home-sec .overlay {
      padding-top:50px;
      background:rgba(0, 0, 0, 0.80);
      min-height:690px;
  }

  #home-sec {
      
  background: url(<?php echo base_url('assets/img/ac.jpg') ?>) no-repeat center center;
  padding: 0;
  -webkit-background-size: cover;
  background-size: cover;
  background-attachment: fixed;
  color:#0000;

  }

   #home-sec .main-img {
       max-height:200px;
     border:5px solid rgb(255, 15, 101);
    content:url(<?php echo base_url('assets/img/f.jpg'); ?>);  /*SAD IMAGE URL  - LEFT SIDE IMAGE*/
    cursor:pointer;
  }
   #home-sec .main-img:hover {
    content:url(<?php echo base_url('assets/img/e.jpg'); ?>); /*SIMLE IMAGE URL ON HOVER - LEFT SIDE IMAGE*/
    cursor:pointer;
  }
      
  #home-sec .main-img-2 {
       max-height:200px;
     border:5px solid rgb(255, 15, 101);
    content:url(<?php echo base_url('assets/img/e.jpg'); ?>);  /*SMILE IMAGE URL  - RIGHT SIDE IMAGE*/
    cursor:pointer;
  }
  #home-sec .main-img-2:hover {
    content:url(<?php echo base_url('assets/img/f.jpg'); ?>);  /*SAD IMAGE URL ON HOVER - RIGHT SIDE IMAGE*/
    cursor:pointer;
  }
     
    </style>



</head>
<body>

    <div id="home-sec">
       <div class="overlay">
           <div class="container">
               <div class="row pad-top-bottom  move-me">
                 <h1 class="hd">who are you?</h1>
                   <div class="col-lg-5 col-md-5 col-sm-5 text-center" >
                       <img src="<?php echo base_url('assets/img/f.png') ?>" class="main-img img-circle wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s" alt=""/>
                       <h1 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">COMPANY</h1>
                       <a href="#" class="btn custom-btn-one btn-lg wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".8s" data-toggle="modal" data-target="#compsg">SignUp</a>
                   </div>

                    <div class="col-lg-2 col-md-2 col-sm-2 text-center  ">
                        <a href="<?php echo base_url('') ?>" class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".1s">
                            <i class="fa fa-home icon-round icon-round-active"></i>
                            <h3 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s">HOME</h3>
                        </a>
                        <a href="#" class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".3s" data-toggle="modal" data-target="#login">
                            <i class="fa fa-sign-in icon-round"></i>
                            <h3 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s ">LOGIN</h3>
                        </a>
                    </div>
                 
                   <div class="col-lg-5 col-md-5 col-sm-5 text-center" ">
                       <img src="<?php echo base_url('assets/img/e.png') ?>" class="main-img-2 img-circle wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s" alt="" />
                       <h1 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">JOB SEEKER</h1>
                       <a href="#" class="btn custom-btn-one btn-lg wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".8s" data-toggle="modal" data-target="#js_sg">SignUp</a>
                   </div>
               </div>

               <!-- Modal Company -->
                <div class="modal fade" id="compsg" role="dialog">
                  <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="wow bounceIn animated" style="color: black;">REGISTER PERUSAHAAN</h4>
                      </div>
                      <div class="modal-body">
                        <div class="col-lg-12  col-md-12  col-sm-12">
                            <div class="row  move-me wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s" >

                              <?php if(isset($_SESSION['success'])){ ?>
                                <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>

                              <?php } ?>
                              
                              <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>

                            <form action="" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control" required="required" placeholder="Nama Perusahaan" />
                                </div>
                                <div class="form-group form-inline">
                                        <input type="text" class="form-control" id="namapegawai" placeholder="Nama Lengkap">
                                        <input type="tel" class="form-control" id="hp" placeholder="No.Hp">
                                 </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" required="required" placeholder="Email" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password" name="password" required="required" placeholder="Password" />
                                </div>
                                
                                <div class="form-group">
                                    <a href="" class="btn custom-btn-one " type="submit" name="register">Sign Up</a>
                                </div>

                            </form>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                    
                  </div>
                </div>
           </div>

               <!-- Modal Jobseeker -->
                <div class="modal fade" id="js_sg" role="dialog">
                  <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="wow bounceIn animated" style="color: black;">REGISTER JOBSEEKER</h4>
                      </div>
                      <div class="modal-body">
                            <div class="col-lg-12  col-md-12 col-sm-12">
                                <div class="row  move-me wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s" >

                                  <?php if(isset($_SESSION['success'])){ ?>
                                    <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>

                                  <?php } ?>
                                  
                                  <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>

                                  <form action="" method="POST">
                                  
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="username" name="username" required="required" placeholder="Username" />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="email" required="required" placeholder="Email" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="password" name="password" required="required" placeholder="Password" />
                                    </div>
                                    <div class="form-group">
                                      <input type="password" class="form-control" id="password_confirm" name="password" required="password" placeholder="Confirm password" />
                                    </div>
                                    
                                    <div >
                                        <button href="" class="btn custom-btn-one " type="submit" name="register">Sign Up</button>
                                    </div>
                                    
                                </form>
                                
                            </div>
                        </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                    
                  </div>
                </div>
           </div>

               <!-- Modal Login -->
                <div class="modal fade" id="login" role="dialog">
                  <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="wow bounceIn animated" style="color: black;">LOGIN</h4>
                      </div>
                      <div class="modal-body wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">
                              <div class="col-lg-12  col-md-12  col-sm-12">

                                 <?php if(isset($_SESSION['success'])){ ?>
                                   <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>

                                 <?php } ?>
                                 
                                 <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>


                                   <form action="" method="POST">
                                       <div class="form-group">
                                           <input type="text" class="form-control" name="username" required="required" placeholder="Username" />
                                       </div>
                                       <div class="form-group">
                                           <input type="password" class="form-control" name="password" required="required" placeholder="password" />
                                       </div>
                                      
                                       <div>
                                           <button href="#hire-sec" class="btn custom-btn-one" name="signin">SIGN IN</button>
                                       </div>

                                   </form>
                               </div>
                            </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                    
                  </div>
                </div>
           </div>

       </div>
   </div>
    
</body>

