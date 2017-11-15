
   <style>
       
   </style>

    <div class="col-lg-8 col-md-8 col-sm-8 wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s" style="position: ;">

        <div class="board">
            <div class="board-inner">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active">
                        <a href="#dp" data-toggle="tab" title="PROFILE">
                            <span class="round-tabs one">
                                <i class="fa fa-user"></i>
                            </span>
                        </a></li>

                    <li><a href="#profile" data-toggle="tab" title="PENGALAMAN KERJA">
                        <span class="round-tabs two">
                            <i class="fa fa-briefcase"></i>
                        </span>
                    </a>
                    </li>
                    <li><a href="#exp" data-toggle="tab" title="BERKAS">
                        <span class="round-tabs three">
                            <i class="fa fa-recycle"></i>
                        </span></a>
                    </li>

                   

                </ul>
            </div>

            <div class="tab-content">
                
                <div class="tab-pane fade in active" id="dp">
                    <div class="col-lg-10  col-md-8  col-sm-8">
                    <h4 class="head text-center">DATA PRIBADI</h4>
                    <form action="" method="post" >
                         <div class="form-group ">
                            <label class="control-label" for="nama_lengkap">Nama Lengkap</label>
                            <input class="form-control" id="nama_lengkap" name="nama_lengkap" type="text"/>
                         </div>

                        <div class="form-inline form-group ">
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
                        </div>

                        <div class="form-group ">
                            <label class="control-label " for="nomor" >No.Hp</label>
                            <input class="form-control" id="nomor" name="nomor" type="text"/>
                        </div>
                        <div class="form-group ">
                            <label class="control-label " for="email">Email</label>
                            <input class="form-control" id="email" name="email" type="text"/>
                        </div>
                        <div class="form-group ">
                            <label class="control-label " for="pendidikan">Pendidikan Terakhir</label>
                            <input class="form-control" id="pendidikan" name="pendidikan" type="text"/>
                        </div>
                        <div class="form-group ">
                            <label class="control-label " for="Alamat">Alamat</label>
                            <input class="form-control" id="Alamat" name="Alamat" type="text"/>
                        </div>
                        <div class="form-inline ">        
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
                        </div>

                        <div class="checkbox">
                            <label><input type="checkbox">Agree</label>
                        </div>
                        <div class="form-group">
                            <a href="#" class="btn custom-btn-one ">Submit</a>
                        </div>
                    </form>
                </div>
                </div>

                <div class="tab-pane fade" id="profile">
                    <div class="col-lg-8  col-md-8  col-sm-8">
                        <h4 class="head text-center">PENGALAMAN KERJA</h4>
                        <form action="" method="post">
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
                    
                </div>

                <div class="tab-pane fade" id="exp">
                    <div class="col-lg-8  col-md-8  col-sm-8">
                        <h4 class="head text-center">BERKAS TAMBAHAN</h4>
                        <form class="form-horizontal" action="" method="post">
                            <!--image input preview-->
                            <form id="form1" runat="server">
                              <label class="control-label">Input foto</label>
                              <input id="input-b5" name="input-b5[]" type="file" multiple>
                            </form>
                          <!-- Sertifikasi input-->
                          <div class="form-group">
                            <label class="control-label" for="textinput">Sertfikasi</label>  
                            <div class="">
                            <input id="textinput" name="textinput" type="text" placeholder="Nama Sertifikasi" class="form-control input-md">
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

        </div>
</div>


