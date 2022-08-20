<html>
<head>
<link rel="stylesheet" href="style.css"/>
</head>

<body>
<ul> 
<li><a href="index.php">Home</a></li>
<li><a href="search.php">Search an electrisian</a></li>
<li><a href="register.php">Register as an electrisian</a></li>
<li><a href=" ">Contact us</a></li> <br>
</ul>
</body>

</html>

<html>
<body>
<h1> Welcome for registetion </h1>
<form action="register.php" method="POST" enctype="multipart/form-data">
<input type="text" name="username" placeholder="username"><br>
<input type="text" name="email" placeholder="enter email"><br>
<input type="text" name="password" placeholder="enter password"><br>
<input type="text" name="contact" placeholder="enter contact number"><br>
<input type="text" name="thana" placeholder="enter your thana"><br>
image:<input type="file" name="upfile"><br>

<button name="submit">Register as an electrician</button>
</form>
</body>
</html>
<?php
session_start();
include 'connection.php';
if(isset($_POST['submit']))
{
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$contact = $_POST['contact'];
$thana = $_POST['thana'];
$filename = $_FILES['upfile']['name'];
$tmploc = $_FILES['upfile']['tmp_name'];
$uploc = "images/".$filename;
$select="SELECT * FROM information where email='$email'";
$sql=mysqli_query($conn,$select);
if(mysqli_num_rows($sql)>0)
{
    echo "Email Id Already Exists"; 
	exit;
}
else
{
    move_uploaded_file($tmploc,$uploc);
$query="INSERT INTO information(username,email,password,contact,thana,image) VALUES ('$username', '$email', '$password','$contact','$thana','$image')";
$sql=mysqli_query($conn,$query);
}
}
?>
<?php
include'footer.php'; 
?>