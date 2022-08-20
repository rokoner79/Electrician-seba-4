<?php
include'connection.php';
?>
<html>
<body>
<form method="POST">
	<label>username</label>
	<input type="email" name="username"><br>
	<label>Password</label>
	<input type="password" name="password"><br>
	<input type="submit" class="btn btn-primary" name="login" value="Login">
</form>
</body>
</html>

<?php
if(isset($_POST['login'])){
	$uname=$_POST['username'];
	$pw=$_POST['password'];
	/*$select="select * from test where login=$uname and password=$pw"; */
	$select = "SELECT * FROM tbl_user WHERE login = '$uname' and password = '$pw'";

	$data=mysqli_query($conn,$select);
	$row=mysqli_fetch_array($data);
	if($row['login']==$uname && $row['password']==$pw)
	{
		$role=$row['role'];
		$id=$row['login'];
		if($role<5)
		{
			echo "<script type='text/javascript'>document.location'admin.php'</script>";
		}
		else if($role>4)
		{
			echo "<script type='text/javascript'>document.location'welcome.php'</script>";
		}
	}
	}
	else
	{
		echo "<b class='b'>invalid username & password</b";  
	}
}

	?>