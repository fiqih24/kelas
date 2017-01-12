<div class="box box-info">
  <div class="box-header">
    <i class="fa fa-envelope"></i>

    <h3 class="box-title">Kirim Pesan</h3>
    <!-- tools box -->
    <div class="pull-right box-tools">
      <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Minimaize">
        <i class="fa fa-minus"></i></button>
    </div>
    <!-- /. tools -->
  </div>
  <div class="box-body">
    <form action="<?=site_url('sajak/kirim_pesan')?>" method="post">
      <div class="form-group">
        <input type="text" class="form-control" name="username" placeholder="Username :">

      </div>
      <div>
          <input type="text" class="form-control" name="judul_pesan" placeholder="Judul Pesan :">
      </div>
      <div>
        <br>
        <textarea name="isi_pesan" class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
      </div>

  </div>
  <div class="box-footer clearfix">
    <button type="submit" class="pull-right btn btn-default" id="sendEmail">Send
      <i class="fa fa-arrow-circle-right"></i></button>
  </div>
</div>
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Inbox</h3>

    <div class="box-tools pull-right">
      <div class="has-feedback">
        <!--<input type="text" id="cari_pesan" onclick="return ajx_cari_pesan()" class="form-control input-sm" placeholder="cari"> -->
        <span class="glyphicon glyphicon-search form-control-feedback"></span>
      </div>
    </div>
    <!-- /.box-tools -->
  </div>
  <!-- /.box-header -->
  <div class="box-body no-padding">

    <div class="table-responsive mailbox-messages">
      <table id="fiq_dt" class="table table-hover table-striped">
        <tbody>
          <?php foreach ($list_pesan as $pesan_masuk){ ?>
        <tr>
          <td><a href="#" onclick="return sjk_hapus_pesan('<?=$pesan_masuk->id_pesan?>');"><i class="fa fa-trash-o"></i></a></td>

          <td class="mailbox-name"><a href=""><?=$pesan_masuk->pengirim?></a></td>
          <td class="mailbox-subject"><b><?=$pesan_masuk->judul_pesan?></b> - <?=$pesan_masuk->isi_pesan?>
          </td>
          <td class="mailbox-attachment"></td>
          <td class="mailbox-date"><?=$pesan_masuk->waktu?></td>
        </tr>

        <?php } ?>

        </tbody>
      </table>
      <!-- /.table -->
    </div>
    <!-- /.mail-box-messages -->
  </div>

</div>
