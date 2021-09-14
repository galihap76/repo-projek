<?php


include_once 'database-query.php';



if(isset($_POST["register"])){
	  if(registrasi($_POST)>0){	 
		echo "
		<script>
		alert('User baru berhasil di tambahkan, silakan login terlebih dahulu!');
		document.location.href='login.php';
		</script>
		";
	  }else{
		 echo "
		<script>
		alert('User baru gagal di tambahkan!');
		document.location.href='registrasi.php';
		</script>
		";
	  }
  }

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sign Up</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
<!--        My Css-->
   <style>
	   .invalid-username{
		   margin-top:8px;
		   border:1px solid red;
		   border-radius:7px;
		   padding:5px;
	   }
		 .invalid-password{
		   margin-top:8px;
		   border:1px solid red;
		   border-radius:7px;
		   padding:5px;
	   }
	   input:valid{
		   background-color: #C0FFB6;
		   border:1px solid #5DFF56;
	   }
		</style>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Sign Up</h3></div>
                                    <div class="card-body">
                                        <form action="" method="post">
                                            <div class="form-group">
                                                <label class="small mb-1" for="username">Username</label>
                                                <input class="form-control py-4" id="username" name="username" type="text" placeholder="Username" maxlength="10" autocomplete="off" required/>                       
                                               
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="password">Password</label>
                                                <input class="form-control py-4" id="password" name="password" type="password" placeholder="Password" required/>
                                              
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="password2">Password</label>
                                                <input class="form-control py-4" id="password2" name="password2" type="password" placeholder="Konfirmasi Password" required/>
                                              
                                            </div>                              
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button type="submit" class="btn btn-primary" name="register">Sign Up</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="login.php">Sudah Punya Akun? Sign In!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    </body>
</html>
