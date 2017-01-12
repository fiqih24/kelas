<?php foreach ($list_sajak as $liat_sajak){ ?>
  <div class="box box-default collapsed-box">
    <div class="box-header with-border">
      <h3 class="box-title">Judul : <?=$liat_sajak->judul_sajak?></h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
        </button>
      </div>
      <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="panel panel-primary">
          <div class="panel-heading">
              <h3 class="panel-title">
                  <span class="glyphicon glyphicon-hand-right"></span>  <?=$liat_sajak->judul_sajak?></h3>
          </div>
          <div class="panel-body">
              <ul class="list-group">
                <?=$liat_sajak->isi_sajak?>
              </ul>
          </div>
          <div class="panel-footer text-center">
            <a href="<?=site_url('sajak/vote_sajak/'.$liat_sajak->id_sajak)?>">  <button class="btn btn-primary btn-block btn-sm">      Vote</button></a>

      </div>

    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
  <?php } ?>
