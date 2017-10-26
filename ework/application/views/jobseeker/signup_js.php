<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
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
        
      #home-sec {
          
          background: url(<?php echo base_url('assets/mera/img/ac.jpg') ?> ) no-repeat center center;
      padding: 0;
      -webkit-background-size: cover;
      background-size: cover;
      background-attachment: fixed;
      color:#fff;
  }
   #home-sec .main-img {
       
       max-height:200px;
     border:5px solid rgb(255, 15, 101);
    content:url(<?php echo base_url('assets/mera/img/e.jpg') ?> );  /*SAD IMAGE URL  - LEFT SIDE IMAGE*/
    cursor:pointer;
  }
   #home-sec .main-img:hover {
    content:url(<?php echo base_url('assets/mera/img/f.jpg') ?> ); /*SIMLE IMAGE URL ON HOVER - LEFT SIDE IMAGE*/
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
                             <img src="<?php echo base_url('assets/mera/img/e.jpg') ?>" class="main-img img-circle wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s" alt=""/>
                             <h1 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">Job Seeker</h1>
                         </div>

                        
                            <div class="col-lg-6  col-md-6 col-sm-6">
                                <div class="row  move-me wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s" >
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control" required="required" placeholder="Nama Lengkap" />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" required="required" placeholder="Email" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" required="required" placeholder="Password" />
                                    </div>
                                    
                                    <div class="form-group">
                                        <a href="<?php echo base_url('') ?>home/lengkapidata" class="btn custom-btn-one ">Sign Up</a>
                                    </div>

                                </form>
                            </div>
                    </div>
             </div>
         </div>
     </div>

    <!-- HOME SECTION END-->

    <!--  JQUERY CORE SCRIPTS -->
    <script src="<?php echo base_url('') ?>assets/mera/js/jquery-1.10.2.js"></script>
    <!--  BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url('') ?>assets/mera/js/bootstrap.js"></script>
    <!--  SCROLL SCRIPTS -->
    <script src="<?php echo base_url('') ?>assets/mera/js/jquery.easing.min.js"></script>
    <!--  WOW ANIMATION SCRIPTS -->
    <script src="<?php echo base_url('') ?>assets/mera/js/wow.min.js"></script>
    <!-- EASY PIE CHART SCRIPTS -->
    <script src="<?php echo base_url('') ?>assets/mera/js/jquery.easypiechart.min.js"></script>
    <!-- PRETTY PHOTO SCRIPTS -->
    <script src="<?php echo base_url('') ?>assets/mera/js/jquery.prettyPhoto.js"></script>
    <!--  STYLE SWITCHER SCRIPTS -->
    <script src="<?php echo base_url('') ?>assets/mera/js/styleSwitcher.js"></script>
    <!--  CUSTOM SCRIPTS -->
    <script src="<?php echo base_url('') ?>assets/mera/js/custom.js"></script>
    
</body>
</html>
