<style>
    .form-control {
        background-color:transparent;
    }
    #home-sec .overlay {
        background:rgba(0, 0, 0, 0.80);
        min-height:700px;
    }
    
    #home-sec {
        
    background: url(<?php echo base_url('assets/img/ac.jpg') ?>) no-repeat center center;
    padding: 0;
    -webkit-background-size: cover;
    background-size: cover;
    background-attachment: fixed;
    color:#fff;

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
<div id="home-sec">
    <div class="overlay">
        <div class="container">
           <div class="row pad-top-bottom  move-me">
            <div class="col-lg-6 col-md-6 col-sm-6 text-center" >
                <img src="<?php echo base_url('assets/img/e.png') ?>" class="main-img-2 img-circle wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s" alt="" />
                <h1 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">JOB SEEKER</h1>
                <a href="<?php echo base_url('') ?>jobseeker/profile" class="btn custom-btn-one btn-lg wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".8s" >YOUR PROFILE</a>
                
            </div>


              <div class="col-lg-6 col-md-6 col-sm-6 wow bounceIn animated">
               <form method="post">
                <div class="form-group form-group-lg">
                 <label class="control-label " for="subject">
                  Job
                 </label>
                 <div class="input-group">
                  <div class="input-group-addon">
                   <i class="fa fa-search">
                   </i>
                  </div>
                  <input class="form-control" id="subject" name="subject" placeholder="Find your job" type="text"/>
                 </div>
                </div>
                <div class="form-group form-group-lg">
                 <label class="control-label " for="subject1">
                  Location
                 </label>
                 <div class="input-group">
                  <div class="input-group-addon">
                   <i class="fa fa-location-arrow">
                   </i>
                  </div>
                  <input class="form-control" id="subject1" name="subject1" placeholder="Location" type="text"/>
                 </div>
                </div>
                <div class="form-group">
                 <div>
                  <button class="btn custom-btn-one " name="search" type="submit">
                   Search
                  </button>
                 </div>
                </div>
               </form>
              </div>
             </div>
            </div>

        </div>
    </div>
</div>