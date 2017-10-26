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
 

  #home-sec {
      
  background: url(<?php echo base_url('assets/mera/img/ac.jpg') ?>) no-repeat center center;
  padding: 0;
  -webkit-background-size: cover;
  background-size: cover;
  background-attachment: fixed;
  color:#fff;

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
               
                    <div class="col-lg-2 col-md-2 col-sm-2 text-center ">
                        <a href="#pp" class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".1s" data-toggle="collapse" >
                            <i class="fa fa-info icon-round icon-round-active"></i>
                            <h3 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s">Profil Perusahaan</h3>
                        </a>
                        <a href="#lw" class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".3s" data-toggle="collapse" data-target="#lw">
                            <i class="fa fa-briefcase icon-round"></i>
                            <h3 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">Post Lowongan</h3>
                        </a>
                        <a href="#berkas" class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".5s" data-toggle="collapse" data-target="#berkas">
                            <i class="fa fa-recycle icon-round icon-round-active"></i>
                            <h3 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".6s"></h3>
                        </a>
                        <a href="<?php echo base_url('') ?>home/cari" class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".7s">
                            <i class="fa fa-paper-plane-o icon-round"></i>
                            <h3 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".8s">Search</h3>
                        </a>  
                    </div>

                    
                      <div class="col-lg-10  col-md-10  col-sm-10 collapse" id="pp">

                        
                              <div class="form-group">
                                  <input type="text" class="form-control" required="required" placeholder="Nama Perusahaan" />
                              </div>
                              <div class="form-group">
                                  <input type="text" class="form-control" required="required" placeholder="Jenis Perusahaan" />
                              </div>
                              <div class="form-group">
                                  <input type="email" class="form-control" required="required" placeholder="Email" />
                              </div>
                              <div class="form-group">
                                  <input type="text" class="form-control" required="required" placeholder="Alamat" />
                              </div>
                              
                             <form class="form-inline ">        
                                <select class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="provinsi" name="provinsi">
                                  <option selected>Provinsi</option>
                                  <option value="1">database1</option>
                                  <option value="2">database2</option>
                                </select>
                                <select class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="kota" name="kota">
                                  <option selected>Kota</option>
                                  <option value="1">db1</option>
                                  <option value="2">database2</option>
                                </select>
                           </form>
                              <br>
                              <div class="form-group">
                                  <a href="" class="btn custom-btn-one ">Submit</a>
                              </div>

                          

                    </div>

                    <div class="col-lg-10  col-md-10  col-sm-10 collapse" id="lw">
                            
                            <div class="form-group">
                                  <input type="text" class="form-control" required="required" placeholder="Nama Pekerjaan" />
                              </div>
                              <div class="form-group">
                                  <input type="text" class="form-control" required="required" placeholder="Kota" />
                              </div>
                              <div class="form-group">
                                  <input type="email" class="form-control" required="required" placeholder="Detail Pekerjaan" />
                              </div>
                              <div class="form-group">
                                  <input type="text" class="form-control" required="required" placeholder="Syarat-syarat" />
                              </div>
                              <div class="form-group">
                                  <input type="text" class="form-control" required="required" placeholder="tanggal post" />
                              </div>
                              <div class="form-group">
                                  <a href="" class="btn custom-btn-one ">Create</a>
                              </div>
                          </div>

                    <div class="col-lg-10  col-md-10  col-sm-10 collapse" id="berkas">
                      <form class="form-horizontal">
                        <!-- Sertifikasi input-->
                        <div class="form-group">
                          <label class="control-label" for="textinput">Sertfikasi</label>  
                          <div class="">
                          <input id="textinput" name="textinput" type="text" placeholder="Nama Sertifikasi" class="form-control input-md">
                            
                          </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                          <label class=" control-label" for="selectbasic"></label>
                          <div class="">
                            <select id="selectbasic" name="selectbasic" class="form-control">
                              <option value="1">Option one</option>
                              <option value="">Option two</option>
                            </select>
                          </div>
                        </div>

                        <!-- File Button --> 
                        <div class="form-group">
                          <label class=" control-label" for="filebutton"></label>
                          <div class="">
                            <input id="filebutton" name="filebutton" class="input-file" type="file">
                          </div>
                        </div>

                        <!-- Dokumen input-->
                        <div class="form-group">
                          <label class=" control-label" for="textinput">Dokumen</label>  
                          <div class="">
                          <input id="dok" name="dok" type="text" placeholder="Nama Dokumen" class="form-control input-md">
                            
                          </div>
                        </div>

                        <!-- File Button --> 
                        <div class="form-group">
                          <label class=" control-label" for="filebutton"></label>
                          <div class="">
                            <input id="filebutton" name="filebutton" class="input-file" type="file">
                          </div>
                        </div>

                       <div class="form-group">
                           <a href="#hire-sec" class="btn custom-btn-one ">Submit</a>
                       </div>
                      
                      </form>
                      
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
