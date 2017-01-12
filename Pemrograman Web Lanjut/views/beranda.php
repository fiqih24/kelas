  <!-- isi halaman awal row -->
<div class="row">
  <!-- Left col -->
  <div class="col-md-8">
    <!-- MAP & BOX PANE -->
    <!-- quick email widget -->
            <div class="box box-info">
              <div class="box-header">
                <i class="fa fa-envelope"></i>

                <h3 class="box-title">Apa yang Ingin Kamu Sajakan ?</h3>
                <!-- tools box -->

                <!-- /. tools -->
              </div>
              <div class="box-body">
                <form action="<?=site_url('sajak/update_status')?>" method="post">
                  <div>
                    <textarea name="status" class="textarea" placeholder="Isi Sajak disini yuk....." style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>

              </div>
              <div class="box-footer clearfix">
                <button type="submit" class="pull-right btn btn-default" >update
                  <i class="fa fa-arrow-circle-right"></i></button>
                   </form>
              </div>

            </div>

    <!-- /.box -->
  </div>
  <div class="col-md-4">
    <div class="box box-default collapsed-box">
      <div class="box-header with-border">
        <h3 class="box-title">Sajak Hari Ini</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
          </button>
        </div>
        <!-- /.box-tools -->
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        Aku hanya si penakut,
        yang Merangkai sajak indah dikala senja, agar ketika malam dapat bersembunyi dalam gelapnya.
        ketika berenang aku tak sanggup berhenti tuk mengenang,
        walaupun aku tenggelam,
        sdirimu tetaplah menjadi masa laluku yang kelam
        <br>
        <br>
        by :  Headmaster Sajak Developer

      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>

  <div class="row">

    <!-- box status buka-->
  <div class="col-md-8">
    <?php foreach ($list_status as $list) {?>
    <div class="box box-widget">
      <div class="box-header with-border">
        <div class="user-block">
          <img class="img-circle" src="<?=base_url('foto_profil/'.$list->foto)?>" alt="User Image">
          <span class="username"><a href="#"><?=$list->nama?></a></span>
          <span class="description"><?=$list->tgl_status?></span>
        </div>


        <div class="box-tools">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
      <?php if ($this->session->userdata('status')=="admin"){ ?>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>

          <?php } ?>
        </div>
      </div>

      <div class="box-body">

        <p><?=$list->isi_status?></p>

        <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
        <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
        <span class="pull-right text-muted">0 like</span>
      </div>


    </div>
    <?php }?>
      <!--ttutup box list status /.box-footer -->
  </div>

        <!-- box aktifitas -->
  <div class="col-md-4">

    <!-- PRODUCT LIST -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Sajak terkini </h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <ul class="products-list product-list-in-box">

          <!-- /.item -->
          <?php foreach ($sjk_samping as $sjk_terkini){?>
          <li class="item">
            <div class="product-img">
              <img src="<?=base_url('aset_sajak/gambar/senja1.jpg')?>" height="50" width="50" alt="Product Image">
            </div>
            <div class="product-info">
              <a href="javascript::;" class="product-title"><?=$sjk_terkini->judul_sajak?>
                <span class="label label-info pull-right"><?=$sjk_terkini->kategori?></span></a>
                  <span class="product-description">
                    <?=$sjk_terkini->isi_sajak?>
                  </span>
            </div>
          </li>
          <?php } ?>
        </ul>
      </div>
      <!-- /.box-body -->
      <div class="box-footer text-center">
        <a href="javascript::;" class="uppercase">View All Products</a>
      </div>

    </div>
  <!-- /.tutup box aktifitas -->

  </div>
