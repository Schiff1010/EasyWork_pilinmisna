<style>
    
    #testimonial-main {
      background: url(assets/img/ac.jpg) no-repeat center center;
      padding: 0;
      -webkit-background-size: cover;
      background-size: cover;
      background-attachment: fixed;
      color:#fff;
    }
    #testimonial-main  .overlay {
      padding-top: 20px;
      background: rgba(0, 0, 0, 0.80);
      min-height: 690px;
    }

    .board{
      width: 70%;
      margin: 0px auto;

    }
    .board .nav-tabs {
      position: relative;
      margin: 20px auto;
      margin-bottom: 0;
      box-sizing: border-box;

    }

    .board li.active span.round-tabs.one{
      background: #fff !important;
      border: 2px solid #ddd;
      color: rgb(34, 194, 34);
    }
    
    .board li.active:after {
      border: 0px solid transparent;
        
    }
    span.round-tabs.one{
      color: rgb(34, 194, 34);
      border: 2px solid rgb(34, 194, 34);
    }

    #login{
      top: 20%;

    }

   
   

</style>

<section id="testimonial-main">
        <div class="overlay">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s" id="navi">
                  <div class="board">
                      <div class="board-inner">
                          <ul class="nav nav-tabs" id="">
                              <li class="active">
                                  <a href="#" data-toggle="tab" title="HOME" data-target="#home">
                                      <span class="round-tabs one">
                                          <i class="fa fa-home"></i>
                                      </span>
                                  </a></li>

                              <li><a href="#" title="SIGN IN" data-toggle="modal" data-target="#login">
                                  <span class="round-tabs two">
                                      <i class="fa fa-sign-in"></i>
                                  </span>
                              </a>
                              </li>

                              
                              

                              <li><a href="wru"  title="JOIN US">
                                  <span class="round-tabs four">
                                      <i class="fa fa-users"></i>
                                  </span>
                              </a></li>

                              <li><a href="#contact"  title="CONTACT US">
                                  <span class="round-tabs five">
                                      <i class="fa fa-comments"></i>
                                  </span></a>
                              </li>

                          </ul>
                      </div>

                     
                      </div>

                  </div>
              </div>

              <div class="tab-content">
                  <div class="tab-pane fade in active" id="home">
                      <div class="row pad-top-bottom wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s" id="">
                                      <div class="col-4- col-md-12 col-sm-12 text-center">
                                          <h1>EASY WORK</h1>

                                          <div id="testimonials" class="carousel slide" data-ride="carousel">

                                              <ol class="carousel-indicators">
                                                  <li data-target="#testimonials" data-slide-to="0" class=""></li>
                                                  <li data-target="#testimonials" data-slide-to="1" class="active"></li>
                                                  <li data-target="#testimonials" data-slide-to="2" class=""></li>
                                              </ol>

                                              <div class="carousel-inner">
                                                  <div class="item">
                                                      <div class="container center">
                                                          <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 slide-custom">

                                                              <h4><i class="fa fa-quote-left"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit onec molestie non sem vel condimentum. <i class="fa fa-quote-right"></i></h4>
                                                              <div class="user-img pull-right">
                                                                  <img src="assets/img/user2.png" alt="" class="img-circle image-responsive" />
                                                              </div>
                                                              <h5 class="pull-right">Lorem Dolor</h5>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="item active">
                                                      <div class="container center">
                                                          <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 slide-custom">
                                                              <h4><i class="fa fa-quote-left"></i>Aenean faucibus luctus enim. Duis quis sem risu suspend lacinia elementum nunc. <i class="fa fa-quote-right"></i></h4>
                                                              <div class="user-img pull-right">
                                                                  <img src="assets/img/user.gif" alt="" class="img-circle image-responsive" />
                                                              </div>
                                                              <h5 class="pull-right">Faucibus luctus</h5>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="item">
                                                      <div class="container center">
                                                          <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 slide-custom">
                                                              <h4><i class="fa fa-quote-left"></i>Sed ultricies, libero ut adipiscing fringilla, ante elit luctus lorem, a egestas dui metus a arcu condimentum. <i class="fa fa-quote-right"></i></h4>
                                                              <div class="user-img pull-right">
                                                                  <img src="assets/img/user2.png" alt="" class="img-circle image-responsive" />
                                                              </div>
                                                              <h5 class="pull-right">Sed ultricies</h5>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                  </div>     
              </div>

              <div class="modal fade " id="login" role="dialog">
                 <div class="modal-dialog">
                   <!-- Modal Content -->
                   <div class="modal-content"></div>
                     <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                       <h4 class="modal-title">LOGIN</h4>
                     </div>
                     <div class="modal-body">
                       <div class="col-lg-12  col-md-12  col-sm-12">

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

           
    </section>
   
  