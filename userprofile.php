<?php include 'php/db_connect.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userprofile</title>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Custom CSS-->
    <link rel="stylesheet" href="css/userprofile.css">
    <!-- Custom JS -->
    <script src="js/script.js"></script>
    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="homepage.php"><i class="fa fa-fw fa-home"></i> Home</a>
        <a href=""><i class="fa fa-fw fa-envelope"></i> Messages</a>
        <a href=""><i class="fa fa-fw fa-bell"></i> Notifications</a>
        <a href=""><i class="fa fa-fw fa-cogs"></i> Settings</a>
    </div>

    <nav class="navbar navbar-expand-md bg-dark navbar-dark">

        <button class="openbtn bg-dark" onclick="openNav()">&#9776; <b style="font-size: 18px;">Menu</b> </button>

        <a class="navbar-brand" style="margin-left:25%;" href="#">
            <img class="rounded-circle" style="width: 50px;height: 50px" src="images/Uni_Logo.png" alt="Logo" style="width:40px;">
        </a>

        <a class="navbar-brand" href="#">Uni-Review</a>

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <form class="example" action="action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </nav>

        <!-- Links -->
        <ul class="navbar-nav" style="margin-left:15%;">
            <li class="nav-item">
                <a class="nav-link" href="homepage.php"><i class="fa fa-fw fa-home"></i> Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=><i class="fa fa-fw fa-user-circle"></i> Login</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" style="margin-right: 2%" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-cogs"></i>
                    Settings</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="userprofile.php">Edit Profile</a>
                    <a class="dropdown-item" href="aboutpage.php">About</a>
                    <a class="dropdown-item" href=""> Contact Us</a>
                </div>
            </li>
        </ul>
    </nav>

    <!--Main Body Start-->
    <div class="shadow-lg p-3 mb-5 bg-white rounded" id="centerblock">
        <div class="row">

            <a href="#" class="thumbnail shadow-lg p-3 mb-5 bg-white rounded" id="profileimage">
                <img src="images/profile-avatar.png" alt="">
            </a>
            <div class="profile-userbuttons">




                <table class="shadow-lg p-3 mb-5 bg-white rounded">
                    
                    <?php
                    session_start();
                     $Uemail = $_SESSION["email"];
                    $sql = "SELECT name, contact  FROM user Where email = '$Uemail'";
                    $result = mysqli_query($conn, $sql);
                    $info = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    // echo  $result[0]['name'] ;
                    
                    ?>


                    <tr>
                        <td>name:</td>
                        <td><?php echo  $info[0]['name'] ;?></td>
                        
                    </tr>
                    
                    <tr>
                        <td>email:</td>
                        <td><?php  echo  $Uemail ; ?> </td>
                        
                    </tr>
                    <tr>
                        <td>phone:</td>
                        <td><?php  echo  $info[0]['contact'] ; ?></td>
                        
                    </tr>
                    
                    
                    
                </table>

                






                <button type="button" class="btn btn-success btn-sm ">save</button>
                <button type="button" class="btn btn-danger btn-sm">Edit</button>
            </div>
        </div>
    </div>

    <!--Main Body End-->

    <!--Bootstrap JS,JSQ-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body></html>