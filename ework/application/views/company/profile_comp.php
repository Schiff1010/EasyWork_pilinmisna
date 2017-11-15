<style>
    #home-sec {
      
  background: url(<?php echo base_url('assets/img/ac.jpg') ?>) no-repeat center center;
  padding: 0;
  -webkit-background-size: cover;
  background-size: cover;
  background-attachment: fixed;
  color:#fff;

  }

  #home-sec .overlay {
      padding-top:100px;
      background:rgba(0, 0, 0, 0.80);
      min-height:700px;
  }
   .form-control{
            background-color:transparent;
        }

      .example2 .navbar-brand>img {
        padding: 7px 15px;
      }
      .navbar{
        height: 100px;
        padding-top: 40px;

      }


</style>



</head>
<body>
  <!--<div class="navbar navbar-default">
    *<div class="container">
     * <h2><span class="glyphicon glyphicon-home"></span>&nbsp;Welcome</h2>
    *</div>
  </div>-->
                                                                      

   <div id="home-sec">
        <div class="overlay">
            <div class="container">
                    <div class="col-lg-4 col-md-4 col-sm-4 text-center">
                      <a href="<?php echo base_url('') ?>" class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".1s">
                          <i class="fa fa-home icon-round icon-round-active"></i>
                          <h3 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s">HOME</h3>
                      </a>
                        <a id="coba" href="#profile" class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".1s" data-toggle="collapse" data-parent="#coba" >
                            <i class="fa fa-info icon-round icon-round"></i>
                            <h3 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s">PROFILE PERUSAHAAN</h3>
                        </a>
                        <a href="#lowongan" class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".3s" data-toggle="collapse" data-parent="#coba">
                            <i class="fa fa-briefcase icon-round icon-round-active"></i>
                            <h3 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">POST LOWONGAN</h3>
                        </a>
                        
                    </div>

                    
                      <div class="col-lg-8 col-md-8 col-sm-8 collapse in wow bounceIn animated" id="profile">
                        <!--<?php echo form_open('company/profile'); ?>-->
                        <form action="">
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
                                 <input type="text" class="form-control" required="required" placeholder="website" />
                             </div>
                             <div class="form-group">
                                 <input type="text" class="form-control" required="required" placeholder="No Telp" />
                             </div>
                             <div class="form-group">
                                 <input type="text" class="form-control" required="required" placeholder="Alamat" />
                             </div>
                             <div class="form-inline">
                               <select class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="provinsi" name="provinsi">
                                 <option selected>Provinsi</option>
                                 
                                 <!--<option value="2">database2</option>-->
                               </select>
                               <select class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="kota" name="kota">
                                 <option selected>Kota</option>  
                               </select>
                             </div>
                              
                             <br>
                             <div class="form-group">
                                 <a href="" class="btn custom-btn-one ">Submit</a>
                             </div>
                        </form>
               
                    </div>


                    <div class="col-lg-8 col-md-8 col-sm-8 collapse wow bounceIn animated" id="lowongan">
                            
                            <div class="form-group">
                                  <input type="text" class="form-control" required="required" placeholder="Nama Pekerjaan" />
                              </div>
                              <div class="form-group">
                                  <input type="text" class="form-control" required="required" placeholder="Lokasi" />
                              </div>
                              <div class="form-inline">
                                <select class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="provinsi" name="provinsi">
                                  <option selected>Provinsi</option>
                                  
                                  <!--<option value="2">database2</option>-->
                                </select>
                                <select class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="kota" name="kota">
                                  <option selected>Kota</option>  
                                </select>
                              </div><br>
                              <div class="form-group">
                                  <textarea type="email" class="form-control" required="required" placeholder="Detail Pekerjaan" style="min-height: 100px;"></textarea>  
                              </div>
                              <div class="form-group">
                                <textarea name="syarat" id="" cols="30" rows="5" class="form-control" required="required" placeholder="Syarat-syarat"></textarea>
                              </div>
                              <div class="form-group">
                                  <input type="text" class="form-control" required="required" placeholder="tanggal post" />
                              </div>
                              <div class="form-group">
                                  <a href="" class="btn custom-btn-one ">Create</a>
                              </div>
                          </div>

                
                  

                
            </div>
        </div>
    
