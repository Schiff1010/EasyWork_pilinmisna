<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Easy Work</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="<?php echo base_url('assets/mera/css/bootstrap.css') ?>" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
    <link href="<?php echo base_url('assets/mera/css/font-awesome.min.css') ?>" rel="stylesheet" />
    <!-- ANIMATE  CSS -->
    <link href="<?php echo base_url('assets/mera/css/animate.css') ?>" rel="stylesheet" />
    <!-- PRETTY PHOTO  CSS -->
    <link href="<?php echo base_url('assets/mera/css/prettyPhoto.css') ?>" rel="stylesheet" />
    <!--  STYLE SWITCHER CSS -->
    <link href="<?php echo base_url('assets/mera/css/styleSwitcher.css') ?>" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="<?php echo base_url('assets/mera/css/style.css') ?>" rel="stylesheet" />
    <!--PINK STYLE VERSION IS BY DEFAULT, USE ANY ONE STYLESHEET FROM FOUR STYLESHEETS (pink,green,blue and brown) HERE-->
    <link href="<?php echo base_url('assets/mera/css/themes/pink.css') ?>" id="mainCSS" rel="stylesheet" />
    <!-- GOOGLE FONTS -->
   
  <style>
  .hd{
    text-align: center;
    font-size: 100px;
    position:relative;
    top: -100px;

  }

  #home-sec {
      
  background: url(<?php echo base_url('assets/mera/img/ac.jpg') ?>) no-repeat center center;
  padding: 0;
  -webkit-background-size: cover;
  background-size: cover;
  background-attachment: fixed;
  color:#fff;

  }

   #home-sec .main-img {
       max-height:200px;
     border:5px solid rgb(255, 15, 101);
    content:url(<?php echo base_url('assets/mera/img/f.jpg'); ?>);  /*SAD IMAGE URL  - LEFT SIDE IMAGE*/
    cursor:pointer;
  }
   #home-sec .main-img:hover {
    content:url(<?php echo base_url('assets/mera/img/e.jpg'); ?>); /*SIMLE IMAGE URL ON HOVER - LEFT SIDE IMAGE*/
    cursor:pointer;
  }
      
  #home-sec .main-img-2 {
       max-height:200px;
     border:5px solid rgb(255, 15, 101);
    content:url(<?php echo base_url('assets/mera/img/e.jpg'); ?>);  /*SMILE IMAGE URL  - RIGHT SIDE IMAGE*/
    cursor:pointer;
  }
  #home-sec .main-img-2:hover {
    content:url(<?php echo base_url('assets/mera/img/f.jpg'); ?>);  /*SAD IMAGE URL ON HOVER - RIGHT SIDE IMAGE*/
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
                   <div class="col-lg-6 col-md-5 col-sm-5 text-center">
                       <img src="<?php echo base_url('assets/mera/img/f.png') ?>" class="main-img img-circle wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s" alt=""/>
                       <h1 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">COMPANY</h1>
                       <a href="<?php echo base_url('home/signup_comp') ?>" class="btn custom-btn-one btn-lg wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".8s" >SignUp</a>
                   </div>
                 
                   <div class="col-lg-6 col-md-5 col-sm-5 text-center">
                       <img src="<?php echo base_url('assets/mera/img/e.png') ?>" class="main-img-2 img-circle wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s" alt="" />
                       <h1 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">JOB SEEKER</h1>
                       <a href="<?php echo base_url('home/signup_js') ?>" class="btn custom-btn-one btn-lg wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".8s">SignUp</a>
                   </div>
               </div>

           </div>
       </div>
   </div>

 
        

    


    
    
</body>
</html>
