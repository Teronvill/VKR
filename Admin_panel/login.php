
<?php session_start ();
include ("config.php");
if (!(isset($_SESSION["admin"])))
{
    if(isset($_POST['submit']))
    {
        if ($password ===md5(trim($_POST['password'])))
        {
            if ($name ===md5(trim($_POST['name'])))
            {
                $info = 'Осуществляется вход';
                $_SESSION['admin'] =$_POST['name'];
				setcookie('username',$_POST['name'],time()+3600*24*14);
                echo "<html><head'><meta http-equiv='Refresh' content='2; URL=http://tpyug/Admin_panel/index.php'</head></html>";
            }
            else {
                $info=  "Данные не верны";
            }
        }
        else {
            $info= "Данные не верны";
        }
    }
	else {
		$info= "Авторизация";
	}
}
else {
    $info = 'Вы уже авторизованы';
    echo "<html><head><meta http-equiv='Refresh' content='2; URL=index.php'</head></html>";
}
?>


<!doctype html>
<html lang="en">
  <head>
  	<title>Авторизация</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body onload="checkCookie()">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"><? echo $info?></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				
					<div class="wrap d-md-flex justify-content-center">
						
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
					 <?php
if (!(isset($_SESSION['admin'])))
{
	echo '<h3 class="mb-4">Вход</h3>
	</div>	
</div>

	  <form  class="signin-form" method="post" action="">
	<div class="form-group mb-3">
		<label class="label" for="name">Логин</label>
		<input type="text" class="form-control name" placeholder="Логин" name="name" required >
  <label class="label" for="password">Пароль</label>
<input type="password" class="form-control" placeholder="Пароль" name="password" required>
</div>
<div class="form-group">
  <button type="submit" name="submit" class="form-control btn btn-primary rounded submit px-3">Войти</button>
</div>
<div class="form-group d-md-flex">
  <div class="w-50 text-left">
	  <label class="checkbox-wrap checkbox-primary mb-0">Запомнить
				<input class="acheckbox" type="checkbox" checked>
				<span class="checkmark"></span>
				  </label>
			  </div>
			  <div class=" w-50 text-right"><label ><a  href="http://tpyug/">Вернуться на главную</a></label></div>		
</div>
</form>';
}
?>
			      			
		        </div>
		      </div>
			</div>
		</div>
	</section>

	
	
	</body>
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</html>

