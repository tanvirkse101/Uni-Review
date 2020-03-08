 
<?php
session_start();
include 'php/db_connect.php';

if(isset($_POST['action']))
{
  $email = $_POST['email'];
  $password = $_POST['password'];
  if(empty($email)||empty($password))
  {
    echo 'Please fill';
  }
  else
  {
    $query = "SELECT * FROM user WHERE email='$email'";
    $result = mysqli_query($conn,$query);
    if($row=mysqli_fetch_assoc($result))
    {
      $db_password = $row['password'];
      if($password==$db_password)
      {
        header("location:homepage.php");
      }
      else
      {
        echo 'Incorrect pass';
      }
      $_SESSION["name"] = $row['name'];
      $_SESSION["email"] = $row['email'];
    }
  }
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Uni-Review-Login</title>



    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style1.css" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.mini.css" type="text/css" />   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 


  <br />
    
<div style="margin:20"
<nav class="navbar navbar-inverse" >
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Uni-Review </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
       <!-- <li><a href="#">Link</a></li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signup.php">signup</a></li>
        
       
       
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>



</head>

<body background="images/cool.jpg">

<br>
<br>
  <div class="login-card">
    <hr style="width:80%;">
    <ul class="info">
                <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a>&nbsp;&nbsp; <a href="#" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>&nbsp;&nbsp;<a href="#" target="_blank"><i class="ai ai-google-scholar ai-1x"></i></a>&nbsp;&nbsp;<a href="#" target="_blank"><i class="ai ai-orcid ai-1x"></i></a>&nbsp;&nbsp;<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>&nbsp;&nbsp;<a href="#"><i class="fa fa-github" aria-hidden="true"></i></a>&nbsp;&nbsp;<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>&nbsp;&nbsp;<a href="#"><i class="ai ai-arxiv ai-1x"></i></a>&nbsp;&nbsp;<a href="#"><i class="ai ai-researchgate ai-1x"></i></a></li>
            </ul>
    <h1>Sign In</h1><br>
  <form action="" method="post">
    <input type="email" name="email" placeholder="email">
    <input type="password" name="password" placeholder="password">
  <div class="text-danger text-center"></div>
    <input type="submit" name="action" class="login login-submit" value="login">
  </form>

  <div class="login-help">
  <a href="signup.php">Register</a>  <br></br>
  <a href="#">Forgot Password</a>
 </div>
</div>


 

</body>



<div class="footer-copyright navbar-fixed-bottom" align="center">
  <div class="container">
    <div class="span 12">
        
        <p>&#169; created by Tasnim Tabassum Anne</p>
        
    </div>
  </div>
</div>


</html> 