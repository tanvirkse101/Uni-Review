<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Custom CSS-->
    <link rel="stylesheet" href="css/reviewpage.css">
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
                <a class="nav-link" href="signin.php"><i class="fa fa-fw fa-user-circle"></i> Login</a>
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
    <div class="mainbody" id="main">
        
        <table class="shadow p-3 mb-5 bg-white rounded">
           <tr class="shadow p-3 mb-5 bg-white rounded">
                <td><h3>Course title:</h3></td>
                <td> <h2>internet and web technolodgy <small> course code : 482</small></h2> </td>
            </tr>
            <tr class="shadow p-3 mb-5 bg-white rounded">
                <td>user name :</td>
                <td> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias velit minima quasi architecto quidem, </td>
            </tr>
            <tr class="shadow p-3 mb-5 bg-white rounded">
                <td>user name :</td>
                <td> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias velit minima quasi architecto quidem, </td>
            </tr>

            <tr class="shadow p-3 mb-5 bg-white rounded">
                <td>user name :</td>
                <td> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias velit minima quasi architecto quidem,</td>
            </tr>

            <tr class="shadow p-3 mb-5 bg-white rounded">
                <td>user name :</td>
                <td> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias velit minima quasi architecto quidem, </td>
            </tr>

            <tr class="shadow p-3 mb-5 bg-white rounded">
                <td>user name :</td>
                <td> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias velit minima quasi architecto quidem, </td>
            </tr>


        </table>

        <div class="row">
            
            <div class="col-lg-6">
                <div class="input-group shadow p-3 mb-5 bg-white rounded">
                    <input style="margin-right: 50px;" type="text" class="form-control" placeholder="Give your review ">
                    <span class="input-group-btn">
                        <button class="btn btn-success" type="button">Post</button>
                    </span>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
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