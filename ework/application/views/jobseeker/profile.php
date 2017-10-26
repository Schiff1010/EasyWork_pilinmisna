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
                        <a href="#dp" class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".1s" data-toggle="collapse" >
                            <i class="fa fa-info icon-round icon-round-active"></i>
                            <h3 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s">Data Pribadi</h3>
                        </a>
                        <a href="#" class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".3s" data-toggle="collapse" data-target="#pk">
                            <i class="fa fa-briefcase icon-round"></i>
                            <h3 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">Pengalaman Kerja</h3>
                        </a>
                        <a href="#berkas" class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".5s" data-toggle="collapse" data-target="#berkas">
                            <i class="fa fa-recycle icon-round icon-round-active"></i>
                            <h3 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".6s">Berkas</h3>
                        </a>
                        <a href="<?php echo base_url('') ?>home/cari" class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".7s">
                            <i class="fa fa-paper-plane-o icon-round"></i>
                            <h3 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".8s">Search</h3>
                        </a>
                    </div>

                    
                      <div class="col-lg-10  col-md-10  col-sm-10 collapse" id="dp">

                           <div class="form-group ">
                            <label class="control-label" for="nama_lengkap">Nama Lengkap</label>
                            <input class="form-control" id="nama_lengkap" name="nama_lengkap" type="text"/>
                           </div>

                          <form class="form-inline ">
                                <label class="control-label " for="tahun_lahir"></label>
                                <input class="form-control" id="tahun_lahir" name="tahun_lahir" type="text" placeholder="Tahun Lahir"/>
                               <select class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="jk" name="jk"> 
                                 <option selected>jenis Kelamin</option>
                                 <option value="1">Perempuan</option>
                                 <option value="2">Laki-Laki</option>
                               </select>
                               <select class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="status" name="status">
                                 <option selected>Status Pernikahan</option>
                                 <option value="1">Menikah</option>
                                 <option value="2">Belum Menikah</option>
                               </select> 
                          </form>

                           <div class="form-group ">
                            <label class="control-label " for="nomor" >
                             No.Hp
                            </label>
                            <input class="form-control" id="nomor" name="nomor" type="text"/>
                           </div>
                           <div class="form-group ">
                            <label class="control-label " for="email">
                             Email
                            </label>
                            <input class="form-control" id="email" name="email" type="text"/>
                           </div>
                            <div class="form-group ">
                              <label class="control-label " for="pendidikan">Pendidikan Terakhir</label>
                              <input class="form-control" id="pendidikan" name="pendidikan" type="text"/>
                           </div>
                          <div class="form-group ">
                            <label class="control-label " for="Alamat">
                             Alamat
                            </label>
                            <input class="form-control" id="Alamat" name="Alamat" type="text"/>
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

                           <div class="checkbox">
                               <label><input type="checkbox">Agree</label>
                             </div>
                             <div class="form-group">
                                 <a href="#" class="btn custom-btn-one ">Submit</a>
                             </div>
                    </div>

                    <div class="col-lg-10  col-md-10  col-sm-10 collapse" id="pk">
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control" required="required" placeholder="Nama Perusahaan" />
                                    </div>
                                    <div class="form-group form-inline ">
                                            <input type="text" class="form-control" id="namapegawai" placeholder="jabatan">
                                            <input type="text" class="form-control" id="hp" placeholder="tahun">
                                     </div>
                                   
                                    
                                    <div class="form-group">
                                        <a href="#hire-sec" class="btn custom-btn-one ">Submit</a>
                                    </div>

                                </form>
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
