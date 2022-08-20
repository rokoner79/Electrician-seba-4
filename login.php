<?php 
 include'connection.php';      
?>
<?php

                     if (isset($_POST['login'])) {
                     $login_id = $_POST['login_id'];
                     $password = $_POST['pswrd'];

                     $select = "SELECT * FROM user_information WHERE email= '$login_id' and password = '$password'";
                    $data = mysqli_query($conn,$select);
                    $row = mysqli_fetch_array($data);/* database theke data anar jnno*/
                    if ($row['email']==$login_id && $row['password']==$password) /*database theke data near pr jdi equal hoy*/
						{
                    $role = $row['role'];
                    $id = $row['login'];
                    $_SESSION['login_id'] = $id;  
                    $_SESSION['user_type'] = $role; 
                    if ($role<5) {
                    $_SESSION['login'] = $id;
                    
                    echo "<script type='text/javascript'> document.location ='welcomeadmin.php'</script>";
                    }
					   elseif ($role>4) {
                    $_SESSION['login_id'] = $id; 
                    
                    echo "<script type='text/javascript'> document.location ='welcomeuser.php'</script>";
                    }
                    }
                    else 
                    {
                    echo "<b class='b'>invalid username & password</b";  
                    }  
                    }
                     ?>
                     <?php
                      if(!empty($_GET['logout'])){
                             echo '<div style="color:green; font-weight:bold;">You have been logged out successfully</div>';
                      }
                      ?>
					  
<html>
<body>					  
                <form method="post" ">
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label>Login</label>
                            <input type="email" name="login_id" placeholder="Login" class="form-control" id="em">
                            <div class="error"><span id="emerr"></span></div>
                        </div>
                      </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="pswrd" placeholder="Password" class="form-control" id="pass">
                            <div class="error"><span id="passerr"></span></div>
                        </div>
                      </div>
                      </div>
                      
                      <input type="submit" class="btn btn-primary" name="login" value="Login">

                </form>
   </div>	
 </div>	
</body>
</html>