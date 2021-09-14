<?php
session_start();

include_once 'database-query.php';

//cek cookie
if(isset($_COOKIE["iu"]) && isset($_COOKIE["ku"])){
     $id = $_COOKIE['iu']; // ID USER
	$key = $_COOKIE['ku']; // KEY USER
	
	//ambil username berdasarkan id
	
	$result = mysqli_query($conn, "SELECT username FROM user_rumah_sakit WHERE id=$id");
	$row = mysqli_fetch_assoc($result);
	
	//cek cookie dan username
	if($key === hash('sha512', $row['username'])){
		$_SESSION['login']=true;
	}
}


//cek ketika tombol di tekan pada login
  if(isset($_POST["login"])){
	 $username = mysqli_real_escape_string($conn, $_POST["username"]); 
	 $password = mysqli_real_escape_string($conn, $_POST["password"]); 
	  
	  $result = mysqli_query($conn, "SELECT * FROM user_rumah_sakit WHERE username = '$username'");
	  
	  //cek username
	  if(mysqli_num_rows($result) === 1){
		  
		  //cek password
		  $row = mysqli_fetch_assoc($result);
		  if(password_verify($password, $row["password"])){
			  //set session
			  $_SESSION["login"]=true;
			    //cek remember me
			  if(isset($_POST["remember"])){
				  //buat cookie
				 setcookie('iu', hash('sha512', $row['id']), time()+250);
				  setcookie('ku', hash('sha512', $row["username"]), time()+250);
			  }
			  
			  header("Location: index.php");	
		  }else{
			  echo "<script>
			  alert('Maaf login anda salah!');
			document.location.href='login.php';
			  </script>";
			  
		  }
          //jika tidak ada username dan password yang benar (kedua nya salah)
	  }if(mysqli_num_rows($result) === 0){
		  echo "<script>
			  alert('Maaf login anda salah!');
			document.location.href='login.php';
			  </script>";
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
        <title>Administrator Login</title>
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
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
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="remember" name="remember" type="checkbox" />
                                                    <label class="custom-control-label" for="remember">Remember Me</label>
                                                </div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="lupa-password.php">Lupa Password?</a>
                                                <button type="submit" class="btn btn-primary" name="login">Login</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="registrasi.php">Tidak Punya Akun? Sign up!</a></div>
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
