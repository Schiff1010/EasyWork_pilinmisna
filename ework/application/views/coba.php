
    <style>
        
      #home-sec {
          
          background: url(<?php echo base_url('assets/img/ac.jpg') ?> ) no-repeat center center;
      padding: 0;
      -webkit-background-size: cover;
      background-size: cover;
      background-attachment: fixed;
      color:#fff;
  }
   #home-sec .main-img {
       
       max-height:200px;
     border:5px solid rgb(255, 15, 101);
    content:url(<?php echo base_url('assets/img/e.jpg') ?> );  /*SAD IMAGE URL  - LEFT SIDE IMAGE*/
    cursor:pointer;
  }
   #home-sec .main-img:hover {
    content:url(<?php echo base_url('assets/img/f.jpg') ?> ); /*SIMLE IMAGE URL ON HOVER - LEFT SIDE IMAGE*/
    cursor:pointer;
}
        .form-control{
            background-color:transparent;
        }

    </style>
    



</head>
<body>
  
         <div id="home-sec">
             <div class="overlay">
                 <div class="container">
                         <div class="col-lg-5 col-md-5 col-sm-5 text-center">
                             <img src="<?php echo base_url('assets/img/e.jpg') ?>" class="main-img img-circle wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s" alt=""/>
                             <h1 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">Job Seeker</h1>
                         </div>

                            <div class="col-lg-6  col-md-6 col-sm-6">
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
             </div>
         </div>
     </div>

  