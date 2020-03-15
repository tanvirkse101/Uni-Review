<div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="homepage.php"><i class="fa fa-fw fa-home"></i> Home</a>
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
            <a href="homepage.php" class="nav-link" href=><i class="fa fa-fw fa-home"></i> Home</a>
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

<!--Bootstrap JS,JQ-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>