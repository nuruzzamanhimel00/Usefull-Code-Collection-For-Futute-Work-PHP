<?php include("lib/Session.php");  ?>
<?php include("../config/config.php");  ?>
<?php include("../lib/Database.php");  ?>
<?php include("../helper/formate.php");  ?>
<?php Session::sess_start(); ?>
<?php 
	$db = new Database();
	$fm = new formate();
	$message = "";
	Session::getLogIn();
?>
<?php 
	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']))
	{
		$username = $fm->validation($_POST['username']);
		$password = $fm->validation(md5($_POST['password']));

		$username = mysqli_real_escape_string($db->conn,$username);
		$password = mysqli_real_escape_string($db->conn,$password);

		$query = "SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password' ";
		$result = $db->select($query);
		if($result)
		{
			//$value = mysqli_fetch_assoc($result); 
				$value = $result->fetch_assoc();
			if($result->num_rows > 0)
			{
				Session::sess_set("login",TRUE);
				Session::sess_set("userId",$value['id']);
				Session::sess_set("username",$value['username']);
				Session::sess_set("name",$value['name']);
				Session::sess_set("userrole",$value['role']);
				echo "<script>window.location='index.php';  </script>";
			}
			else{
				$message = "<span ><p style='color:red; font-size:25px;text-align:center;
                    padding:10px;font-weight: bold;'>Result Not Found !! </p></span>";
			}
		}
		else{
			$message = "<span ><p style='color:red; font-size:20px;text-align:center;
                    padding:10px;font-weight: bold;'>Username And Password not Match !! </p></span>";
		}
		
	}
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
		<form action="" method="post">
			<h1>Admin Login</h1>
			<?php echo $message;  ?>
			<div>
				<input type="text" placeholder="Username" required="" name="username"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="password"/>
			</div>
			<div>
				<input type="submit" name="submit" value="Log in" />
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="#">Training with live project</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>