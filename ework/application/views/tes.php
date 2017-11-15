  <style>
    #home-sec {
      
  background: url(<?php echo base_url('assets/img/ac.jpg') ?>) no-repeat center center;
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
              <div>
                <div class="col-lg-4 col-md-4 col-sm-4 text-center">
                  <div id="accordion" class="">
                    <a href="#profile" class="wow bounceIn animated accordion-toggle" data-wow-duration="1s" data-wow-delay=".1s" data-toggle="collapse" data-parent="#accordion"  >
                      <i class="fa fa-info icon-round icon-round-active"></i>
                      <h3 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s">Profil Perusahaan</h3>
                    </a>
                  </div>
                  <div>
                    <a href="#lowongan" class="wow bounceIn animated accordion-toggle" data-wow-duration="1s" data-wow-delay=".3s" data-toggle="collapse" data-parent="#accordion" >
                      <i class="fa fa-briefcase icon-round"></i>
                      <h3 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">Post Lowongan</h3>
                    </a>
                  </div>
                  <div>
                    <a href="#berkas" class="wow bounceIn animated accordion-toggle" data-wow-duration="1s" data-wow-delay=".5s" data-toggle="collapse">
                      <i class="fa fa-recycle icon-round icon-round-active"></i>
                      <h3 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".6s"></h3>
                    </a>
                  </div>
                  <div>
                    <a href="#" class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".7s">
                      <i class="fa fa-paper-plane-o icon-round"></i>
                      <h3 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".8s">Search</h3>
                    </a> 
                  </div>
                </div>

                <div class="col-lg-8 col-md-8 col-sm-8"> 
                  <div id="profile" class="collapse in" >
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
                  <div id="lowongan" class="collapse">
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
                  </div>
                  
                </div>
              </div>
  
            </div>
        </div>
    
<script>
 
</script>