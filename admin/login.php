<?php
	ob_start();
	include "../config.php";
	include "function.php";
	?>  
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Login Form Template</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets_login/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets_login/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets_login/css/form-elements.css">
        <link rel="stylesheet" href="assets_login/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets_login/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets_login/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets_login/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets_login/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets_login/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body style="background-image:url(assets_login/img/backgrounds/1.jpg)">

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		
                        		
                        			<h2>Login Admin</h2>
                        		
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="user" name="user" placeholder="Username..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password"  name="pass" placeholder="Password..." class="form-password form-control" id="form-password">
			                        </div>
			                        <button type="submit" class="btn" name="btn_dangnhap">Sign in!</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets_login/js/jquery-1.11.1.min.js"></script>
        <script src="assets_login/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets_login/js/jquery.backstretch.min.js"></script>
        <script src="assets_login/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets_login/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>       
        <?php
		
		if(isset($_POST['btn_dangnhap'])){
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		$login=login($user,$pass);
		$row=$login->fetch();
			
			if($user==$row['UserName']&&$pass==$row['Password'])
			{
				if(!isset($_SESSION))
					session_start();
					$_SESSION["UserID"]=$row['UserID'];
					$_SESSION["success"]=true;
					$_SESSION['hotenadmin']=$row['Name'];
					$_SESSION['email']=$row['Email'];
					$_SESSION['phone']=$row['Phone'];
					$_SESSION['quyenhan']=$row['Jurisdiction'];
					echo "<script>window.location='index.php?ADpage=QL-BV'</script>";
			}
			else
				echo "<script>alert('Thông Tin không chính xác')</script> ";
	}
?>
       
   
	<?php
	ob_end_flush();
?>

