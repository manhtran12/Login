<?php	 
 $conn = pg_connect("host=ec2-54-205-183-19.compute-1.amazonaws.com dbname=dbfdi5nhqt1i93 user=uxnxvpzveabldk password=f5ed2b8e64715c9f3b7d61680b46a417d137813cff0de179fd02fc921625059d");
 if(!$conn){echo "Loi ket noi";}
if(isset($_POST['login'])){
	$username = $_POST['username'];
 	$password = $_POST['password'];
 	$sql= "SELECT * FROM accout WHERE user_name ='$username' and password='$password'";
	$result = pg_query($conn, $sql);
	$check = pg_num_rows($result);
	if($check == 1){
		echo "Vao dc roi";
	}
	else{
		echo "Ngu vl";
	}
 }
		

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="container">
		<div class="card">
			<h3>Sign In</h3>
		</div>
		<form method="post">
			<div class="card-body">
				<label>username</label>
				<input type="text" name="username">
				<label>password</label>
				<input type="password" name="password">
				<button name="login" type="submit" value="login">Login</button>
			</div>
		</form>
	</div>
</body>
</html>
