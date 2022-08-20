
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
<h1> Welcome </h1>
</ul>

</body>

</html>
<html>
<form action="" method="post">
<input type="text" name="search_name" placeholder="Enter your nearest thana">
<input type="submit" name="search" value="Search" class="btn btn-info">
</form>
</html>
<?php
session_start();
include 'connection.php';
if(isset($_REQUEST['search']))	
{
	$recv = $_REQUEST['search_name'];
	$query = "SELECT * FROM `information` WHERE `thana` LIKE '%$recv%'";
	$adanprodan=mysqli_query($conn,$query);


?>

<table class="table">
<thead class = "thead-dark">
<tr>
<th> username </th>
<th> email </th>
<th> contact </th>
<th> thana </th>

</tr>
</thead>
<?php

while($row = mysqli_fetch_assoc($adanprodan))
{
$username = $row['username'];
$email = $row ['email'];
$contact = $row ['contact'];
$thana = $row ['thana'];

?>
<tbody>
<tr>
<td><?php echo $username ;?> </td> 
&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; <td><?php echo $email ;?> </td>
&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<td><?php echo $contact ;?> </td> 
&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<td><?php echo $thana ;?> </td> 


</tr>
</tbody>
</table>
<?php
}
?>

<?php

}

?>

<?php
include'footer.php'; 
?>