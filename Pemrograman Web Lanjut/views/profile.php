
   <!-- Main content -->
   <section class="content">

     <div class="row">
       <div class="col-md-3">

         <!-- Profile Image -->
         <div class="box box-primary">
           <div class="box-body box-profile">
             <img class="profile-user-img img-responsive img-circle" src="<?=base_url('foto_profil/')?><?=$baris_user->foto?>" alt="User profile picture">

             <h3 class="profile-username text-center"><?=$baris_user->nama?></h3>

             <p class="text-muted text-center">Sajak Engginner</p>

             <ul class="list-group list-group-unbordered">
               <li class="list-group-item">
                 <b>Followers</b> <a class="pull-right">1,322</a>
               </li>
               <li class="list-group-item">
                 <b>Following</b> <a class="pull-right">543</a>
               </li>

             </ul>

             <?php echo form_open_multipart('sajak/ubah_foto');?>
             <div class="form-group">
               <label for="exampleInputFile">Ubah Foto Profile</label>
               <input type="file" name="foto_profil" id="exampleInputFile">
               <button type="submit"><i class="fa fa-cloud-upload"> upload</i></button>


             </div>
           </form>
           </div>
           <!-- /.box-body -->
         </div>
         <!-- /.box -->

         <!-- About Me Box -->
         <div class="box box-primary">
           <div class="box-header with-border">
             <h3 class="box-title">About Me</h3>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
             <strong><i class="fa fa-book margin-r-5"></i> Tentang</strong>

             <p class="text-muted">
              <?=$baris_user->tentang?>
             </p>

             <hr>

             <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

             <p class="text-muted"> <?=$baris_user->alamat?></p>

             <hr>

             <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

             <p>
               <span class="label label-danger">Sajak Query Language (SQL)</span>
               <span class="label label-success">Sajak Igniter (SI)</span>
               <span class="label label-info">Sajak Script (Sjs)</span>
               <span class="label label-warning">Object Oriented Sajak (OOS)</span>
               <span class="label label-primary">Sajak For Her (SFH)</span>
             </p>

             <hr>

             <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

             <p>Tak Ada Hati Yang Tak Retak</p>
           </div>
           <!-- /.box-body -->
         </div>
         <!-- /.box -->
       </div>
       <!-- /.col -->
       <div class="col-md-9">
         <div class="nav-tabs-custom">
           <ul class="nav nav-tabs">
             <li class="active"><a href="#activity" data-toggle="tab">Status</a></li>
             <li><a href="#settings" data-toggle="tab">Edit Profile</a></li>
           </ul>
           <div class="tab-content">
             <div class="active tab-pane" id="activity">
               <!-- Post -->
               <?php foreach ($statusku as $my_status){?>
               <div class="post">
                 <div class="user-block">
                   <img class="img-circle img-bordered-sm" src="<?=base_url('foto_profil/'.$this->session->userdata('foto'))?>" alt="user image">
                       <span class="username">
                         <a href="#"><?=$my_status->username?></a>
                         <a href="" onclick="return sjk_hapus_status('<?=$my_status->id_status?>');"class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                       </span>
                   <span class="description"><?=$my_status->tgl_status?></span>
                 </div>
                 <!-- /.user-block -->
                 <p>
                  <?=$my_status->isi_status?>
                 </p>

               </div>
               <?php } ?>
               <!-- /.post -->


               <!-- /.post -->
             </div>
             <!-- /.tab-pane -->


             <!-- /.tab-pane -->
             <div class="tab-pane" id="settings">
               <form class="form-horizontal" action="<?=site_url('sajak/update_profil')?>" method="post">
                 <div class="form-group">
                   <label for="inputName" class="col-sm-2 control-label">Name</label>

                   <div class="col-sm-10">
                     <input type="text" class="form-control"  id="inputName" name="nama" placeholder="Nama" value="<?=$baris_user->nama?>">
                   </div>
                 </div>
                 <div class="form-group">
                   <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                   <div class="col-sm-10">
                     <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email" value="<?=$baris_user->email?>">
                   </div>
                 </div>
                 <div class="form-group">
                   <label for="inputTglLahir" class="col-sm-2 control-label">Tanggal Lahir</label>

                   <div class="col-sm-10">
                     <input type="text" name="tgl_lahir" class="form-control" id="tanggal" placeholder="tanggal lahir" value="<?=$baris_user->tgl_lahir?>">
                   </div>
                 </div>
                 <div class="form-group">
                   <label for="inputAlamat" class="col-sm-2 control-label">Alamat</label>

                   <div class="col-sm-10">
                     <textarea class="form-control" name="alamat" id="inputExperience" placeholder="Experience"><?=$baris_user->alamat?></textarea>
                   </div>
                 </div>
                 <div class="form-group">
                   <label for="inputEmail" class="col-sm-2 control-label">tentang</label>

                   <div class="col-sm-10">
                     <input type="text" class="form-control" name="tentang" id="inputSkills" placeholder="Tentang" value="<?=$baris_user->tentang?>">
                   </div>
                 </div>

                 <div class="form-group">
                   <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" class="btn btn-danger">Simpan Profil</button>
                   </div>
                 </div>
               </form>
             </div>
             <!-- /.tab-pane -->
           </div>
           <!-- /.tab-content -->
         </div>
         <!-- /.nav-tabs-custom -->
       </div>
       <!-- /.col -->
     </div>
     <!-- /.row -->

   </section>
