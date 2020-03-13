<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Custom CSS-->
    <link rel="stylesheet" href="css/style.css">
    <!-- Custom JS -->
    <script src="js/script.js"></script>
    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">
    </script>
</head>

<body>
    <?php session_start() ?>
    <?php include 'php/db_connect.php';?>

    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href=""><i class="fa fa-fw fa-home"></i> Home</a>
        <a href=""><i class="fa fa-fw fa-envelope"></i> Messages</a>
        <a href=""><i class="fa fa-fw fa-bell"></i> Notifications</a>
        <a href=""><i class="fa fa-fw fa-cogs"></i> Settings</a>

    </div>

    <nav class="navbar navbar-expand-md bg-dark navbar-dark shadow">

        <button class="openbtn bg-dark" onclick="openNav()">&#9776; <b style="font-size: 18px;">Menu</b> </button>

        <a class="navbar-brand" style="margin-left:25%;" href="#">
            <img class="rounded-circle" style="width: 50px;height: 50px" src="images/Uni_Logo.png" alt="Logo"
                style="width:40px;">
        </a>

        <a class="navbar-brand" href="#">Uni-Review</a>

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

        </nav>

        <!-- Links -->
        <ul class="navbar-nav" style="margin-left:15%;">
            <li class="nav-item">
                <a class="nav-link" href=><i class="fa fa-fw fa-home"></i> Home</a>
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
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" style="margin-right: 2%"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-cogs"></i>
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

    <!--Main Body Start-->

    <div class="container-xl shadow-lg p-3 border" style="background-color: white;">

        <div class="jumbotron bg-primary shadow-lg">
            <h1 class="display-4" style="color:white;text-align: center;">University List</h1>
            <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function () {
                    $('.search-box input[type="text"]').on("keyup input", function () {
                        /* Get input value on change */
                        var inputVal = $(this).val();
                        var resultDropdown = $(this).siblings(".result");
                        if (inputVal.length) {
                            $.get("php/backend-search.php", {
                                term: inputVal
                            }).done(function (data) {
                                // Display the returned data in browser
                                resultDropdown.html(data);
                            });
                        } else {
                            resultDropdown.empty();
                        }
                    });

                    // Set search input value on click of result item
                    $(document).on("click", ".result p", function () {
                        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
                        $(this).parent(".result").empty();
                    });
                });
            </script>
            <div class="search-box text-center">
                <input type="text" autocomplete="off" placeholder="Search country..." />
                <div class="result"></div>
            </div>
        </div>
        <?php 
                $sql = 'SELECT id, name, location, rating, img_src FROM university';
                $result = mysqli_query($conn,$sql);
                $info = mysqli_fetch_all($result, MYSQLI_ASSOC);
                mysqli_free_result($result);
                mysqli_close($conn);
        ?>
        <div class="card-columns">

            <?php foreach($info as $info) { ?>

            <div class="card shadow border rounded" style="width:356px;height:402px">
                <img class="card-img-top mx-auto d-block" style="padding:3px; height: 200px;width: 353px;"
                    src="upload/university/<?php echo $info['img_src'];?>" alt="<?php echo $info['name'];?>">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b><a
                                    style="color: black;"><?php echo htmlspecialchars($info['name']); ?>
                                    <??>

                                </a></b>
                        </li>
                        <li class="list-group-item">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star-half checked"></span> <a style="margin-left: 10px;"
                                href="#"><?php echo htmlspecialchars($info['rating']); ?></a>
                        </li>
                        <li class="list-group-item"><a
                                href="university.php?<?php echo "uni_id="; ?><?php echo $info['id'];?>"> Click for more
                                info -> </a></li>
                    </ul>
                </div>
            </div>

            <?php } ?>

        </div>

    </div>

    <!--Main Body End-->

    <!--Bootstrap JS,JQ-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>