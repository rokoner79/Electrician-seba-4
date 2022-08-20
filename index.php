<?php
session_start();
include 'connection.php';
include'navbarindex.php';
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

$sql=mysqli_query($conn,"SELECT * FROM user_information where email='$email'");
if(mysqli_num_rows($sql)>0)
{
    echo "Email Id Already Exists"; 
	exit;
}
else
{
	move_uploaded_file($tmploc,$uploc);

$query="INSERT INTO user_information(username,email,password,contact,thana,image) VALUES ('$username', '$email', '$password','$contact','$thana','$filename')";
$sql=mysqli_query($conn,$query);
}
}
?>

<html>

<body>
<h1>Welcome </h1>
<form action="index.php" method="POST" enctype="multipart/form-data">
<input type="text" name="username" placeholder="username"><br>
<input type="text" name="email" placeholder="enter email"><br>
<input type="text" name="password" placeholder="enter password"><br>
<input type="text" name="contact" placeholder="enter contact number"><br>
<input type="text" name="thana" placeholder="enter thana"><br>
image:<input type="file" name="upfile" placeholder="Upload your image"><br>
<br>
<button name="submit">Signup as a user</button><br>
<a id="demo" onmouseover="over()" onmouseout="out()" href="login.php">Login</a><br><br>
</form>
<script>
    function over()
    {
        document.getElementById("demo").style.color='red';
    }
	    function out()
    {
        document.getElementById("demo").style.color='green';
    }
	
</script>
</body>
</html>
<?php
	include'footer.php';
?>