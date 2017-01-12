<html>
<head>
<title>Login Sajakers</title>
<link rel="stylesheet" type="text/css" href="<?=base_url('aset_sajak/css/bootstrap.css');?>">
<link rel="stylesheet" type="text/css" href="<?=base_url('aset_sajak/css/login.css');?>">
</head>
<body>
<div class="header">
    <div class="row">
        <div class="col-md-4">
            <h1>Sajakin-yuk.com </h1>
        </div>
        <div class="col-md-4" id="col-md-4">

            <a href="#">Registrasi</a>
            <a href="#">Lihat Sajak</a>
        </div>
    </div>

</div>
<div class="container">
    <div class="inner">
        <h1>Pecinta Sajak</h1>
        <h3>Untuk kamu para pencari senja dan ketenangan serta kenangan</h3>
	<div id="konfirmasi"></div>
        <form action="" method="post">
            <lagend>Login </lagend><br>
            <label><span class="glyphicon glyphicon-user"></span></label>
            <input type="text" name="username" placeholder='Username' class="input" /><br>
            <label><span class="glyphicon glyphicon-lock"></span></label>
            <input type="password" name="password" placeholder="password" class="input" /><br>
            <button type="submit" class="button">Sign in</button>
        </form>

    </div>
</div>
<script src="<?=base_url('aset_sajak/jquery-3.1.1.min.js')?>"></script>

<script>
$( "form" ).submit(function( event ) {
  event.preventDefault();
  		var data 	= $( this ).serialize();
  		$("#konfirmasi").html("<div class='alert alert-info'><i class='icon icon-spinner icon-spin'></i> Checking...</div>")
  		$.ajax({
  			type: "POST",
  			data: data,
  			url: "<?php echo base_URL(); ?>index.php/sajak/aksi_login",
  			success: function(r) {
  				if (r.log.masuk != "oke") {
  					$("#konfirmasi").html("<div class='alert alert-danger'>"+r.log.keterangan+"</div>");
  				} else {
  					$("#konfirmasi").html("<div class='alert alert-success'>"+r.log.keterangan+"</div>");
  					window.location.assign("<?php echo base_url(); ?>index.php/sajak/page");
  				}
  			}
  		});
  	});
</script>
</body>
</html>
