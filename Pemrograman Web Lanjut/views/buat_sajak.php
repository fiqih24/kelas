

<div class="box box-info">
  <div class="box-header">
    <i class="fa fa-envelope"></i>

    <h3 class="box-title">Buat Votingan</h3>
    <!-- tools box -->
    <div class="pull-right box-tools">
      <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Minimaize">
        <i class="fa fa-minus"></i></button>
    </div>
    <!-- /. tools -->
  </div>
  <div class="box-body">
    <form action="<?=site_url('sajak/proses_buat_sajak')?>" method="post">
      <div class="form-group">
        <input type="text" class="form-control" name="judul_sajak" placeholder="Judul Sajak">

      </div>
      <div class="form-group">
        <label>Kategori Sajak</label>
        <select name="kategori" class="form-control">
          <?php foreach ($kategori_sajak as $kategori) {?>
          <option value="<?=$kategori->id_kategori?>"><?=$kategori->kategori?></option>
            <?php } ?>
        </select>
      </div>
      <div>

        <textarea name="isi_sajak" class="textarea" placeholder="Isi Sajak" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
      </div>
  <div class="box-footer clearfix">
    <button type="submit" class="pull-right btn btn-default" >Buat sajak
      <i class="fa fa-arrow-circle-right"></i></button>
  </div>
</form>
</div>



<br>

  <div class="panel panel-info">
<div class="panel-body">

     <table id="fiq_dt" class="table table-bordered">
       <thead>
         <tr>
           <th>Judul sajak</th>
           <th >Judul sajak</th>
           <th >Aksi</th>
         </tr>
       </thead>

       <tbody>
         <?php

             foreach ($list_sajak as $sjk) { ?>
               <tr>
                     <td class="ctr"><?=$sjk->judul_sajak?></td>
                     <td><?=$sjk->status_sajak?></td>
                     <td class="">
                     <div class="input-group-btn">
                       <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Action
                         <span class="fa fa-caret-down"></span></button>
                       <ul class="dropdown-menu">
                         <li><a href="#" onclick="return sjk_hapus_sajak('<?=$sjk->id_sajak?>');">Hapus</a></li>
                         <li><a href="#" onclick="return tutup_sajak('<?=$sjk->id_sajak?>');">Tutup sajak</a></li>

                       </ul>
                     </div>


               </div>
                     </td>
                     </tr>


<?php      }       ?>
       </tbody>
     </table>
</div>
