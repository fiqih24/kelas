<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
          <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>jQuery UI Datepicker - Default functionality</title>
          <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
          <link rel="stylesheet" href="/resources/demos/style.css">
          <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
          <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
          <script>
          $( function() {
            $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' }).val();
          } );
          </script> 
<title>REGISTER</title>
</head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/bootstrap/css/bootstrap.css')?>">
<body>
<?php


//KOSONG
?>
  
  <form class="form-horizontal" method="post" action="<?php echo base_url(). 'index.php/Register_sajak/insert'; ?>">
        <div class="container">
			<div class="row">
                
                    <div class="col-md-7 col-md-offset-3">
                        
                        <div class="form-group">
                                    <label class="control-label col-sm-2" for="nama">Username :</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="username" required>
                                    </div>
                        </div>
                        
                        <div class="form-group">
                                    <label class="control-label col-sm-2" for="password">Password :</label>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control" name="password" required>
                                    </div>
                        </div>
                        
                        <div class="form-group">
                                    <label class="control-label col-sm-2" for="email">Email :</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="email" required>
                                    </div>
                        </div>
                        
                        <div class="form-group">
                                    <label class="control-label col-sm-2" for="nama">Nama :</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="nama" required>
                                    </div>
                        </div>
                        
                        <div class="form-group">
                                    <label class="control-label col-sm-2" for="Tanggal">Tannggal Lahir :</label>
                                    <div class="col-sm-6">
                                       <input type="text" id="datepicker" name="tanggal">
                                    </div>
                        </div>
                        
                        
                        
                        <div class="form-group">
                                    <label class="control-label col-sm-2" for="alamat">Alamat :</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="alamat" required>
                                    </div>
                        </div>
                        
                        <div class="form-group">
                                    <label class="control-label col-sm-2" for="tentang">Tentang :</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="tentang" required>
                                    </div>
                        </div>
                            <div class="col-md-4 col-md-offset-3">
                                <button class="btn btn-lg btn-primary btn-block btn-login" name="submit" type="submit">Submit</button>
                            </div>
                    </div>
                </div>
            </div>
            </form>

</body>
</html>
