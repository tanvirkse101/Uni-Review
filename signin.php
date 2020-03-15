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
      if($password==$db_password && $row['usertype']=="regular")
      {
        header("location:homepage.php");
      }
      if($password==$db_password && $row['usertype']=="admin")
      {
        header("location:adminDashboard.php");
      }
      else
      {
        echo 'Incorrect pass';
      }
      $_SESSION["name"] = $row['name'];
      $_SESSION["email"] = $row['email'];
      $_SESSION["usertype"] = $row['usertype'];
    }
  }
}

?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Index</title>
   <!--Bootstrap CSS-->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
     integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <!--Custom CSS-->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/style1.css">
   <!-- Custom JS -->
   <script src="js/script.js"></script>
   <!-- Load an icon library -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>

 <body>

   <div id="mySidebar" class="sidebar">
     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
     <a href=""><i class="fa fa-fw fa-home"></i> Home</a>
     <a href=""><i class="fa fa-fw fa-envelope"></i> Messages</a>
     <a href=""><i class="fa fa-fw fa-bell"></i> Notifications</a>
     <a href=""><i class="fa fa-fw fa-cogs"></i> Settings</a>

   </div>

   <nav class="navbar navbar-expand-md bg-dark navbar-dark shadow">

     <button class="openbtn bg-dark" onclick="openNav()">&#9776; <b style="font-size: 18px;">Menu</b> </button>

     <a class="navbar-brand" style="margin-left:40%;" href="#">
       <img class="rounded-circle" style="width: 50px;height: 50px" src="images/Uni_Logo.png" alt="Logo"
         style="width:40px;">
     </a>

     <a class="navbar-brand" href="#">Uni-Review</a>

     <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

     </nav>

     <!-- Links -->
     <ul class="navbar-nav" style="margin-left:15%;">
       <li class="nav-item">
         <a class="nav-link" href= "homepage.php"><i class="fa fa-fw fa-home"></i> Home</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="signin.php"><i class="fa fa-fw fa-user-circle"></i>
           <?php
                if(isset($_SESSION["name"])) 
                {
                echo $_SESSION["name"];
                }
                else
                {
                    echo 'Login';
                }
                ?>
         </a>
       </li>
       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="#" id="dropdown01" style="margin-right: 2%" data-toggle="dropdown"
           aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-cogs"></i>
           Settings</a>
         <div class="dropdown-menu" aria-labelledby="dropdown01">
           <?php
                    if(isset($_SESSION["name"]) && $_SESSION["usertype"]=="regular") 
                    {
                         echo '<a class="dropdown-item" href="userprofile.php">Edit Profile</a>
                         <a class="dropdown-item" href="php/logout.php">logout</a>
                         <a class="dropdown-item" href="aboutpage.php">About</a>
                         <a class="dropdown-item" href=""> Contact Us</a>';
                    }
                    elseif(isset($_SESSION["name"]) && $_SESSION["usertype"]=="admin")
                    {
                        echo '<a class="dropdown-item" href="userprofile.php">Edit Profile</a>
                        <a class="dropdown-item" href="php/logout.php">logout</a>
                        <a class="dropdown-item" href="aboutpage.php">About</a>
                        <a class="dropdown-item" href="adminDashboard.php">Admin Dashboard</a>';
                    }
                    else
                    {
                        echo '<a class="dropdown-item" href="signup.php">Register</a>
                        <a class="dropdown-item" href="aboutpage.php">About</a>
                        <a class="dropdown-item" href="#">Contact Us</a>';
                    }
                    ?>

         </div>
       </li>

     </ul>
   </nav>
   <!----------------------------------------Main Body Start----------------------------------------------------->



   <br>
   <br>
   <div class="login-card shadow-lg">
     <hr style="width:80%;">
     <ul class="info">
       <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a>&nbsp;&nbsp; <a href="#" target="_blank"><i
             class="fa fa-linkedin" aria-hidden="true"></i></a>&nbsp;&nbsp;<a href="#" target="_blank"><i
             class="ai ai-google-scholar ai-1x"></i></a>&nbsp;&nbsp;<a href="#" target="_blank"><i
             class="ai ai-orcid ai-1x"></i></a>&nbsp;&nbsp;<a href="#"><i class="fa fa-twitter"
             aria-hidden="true"></i></a>&nbsp;&nbsp;<a href="#"><i class="fa fa-github"
             aria-hidden="true"></i></a>&nbsp;&nbsp;<a href="#"><i class="fa fa-facebook"
             aria-hidden="true"></i></a>&nbsp;&nbsp;<a href="#"><i class="ai ai-arxiv ai-1x"></i></a>&nbsp;&nbsp;<a
           href="#"><i class="ai ai-researchgate ai-1x"></i></a></li>
     </ul>
     <h1>Sign In</h1><br>
     <form action="" method="post">
       <input type="email" name="email" placeholder="email">
       <input type="password" name="password" placeholder="password">
       <div class="text-danger text-center"></div>
       <input type="submit" name="action" class="login login-submit" value="login">
     </form>

     <div class="login-help">
       <a href="signup.php">Register</a> <br></br>
       <a href="#">Forgot Password</a>
     </div>
   </div>



   <!-------------------------------------------------Main Body End---------------------------------------->

   <!--Bootstrap JS,JSQ-->
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
     integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
   </script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
     integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
   </script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
     integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
   </script>
 </body>

 </html>