<?php

if(!isset($_COOKIE['one'])){
    $cookie_name = 'one';
    $cookie_value = $_GET['uni_id'];
    setcookie($cookie_name, $cookie_value, time()+ (86400+30),'/');
}

else if(!isset($_COOKIE['two'])){
    $cookie_name = 'two';
    $cookie_value = $_GET['uni_id'];
    setcookie($cookie_name, $cookie_value, time()+ (86400+30),'/');
}
else {
    $cookie_name = 'three';
    $cookie_value = $_GET['uni_id'];
    setcookie($cookie_name, $cookie_value, time()+ (86400+30),'/');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniversityPage</title>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Custom CSS-->
    <link rel="stylesheet" href="css/style.css">
    <!-- Custom JS -->
    <script src="js/script.js"></script>
    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php include 'php/db_connect.php';?>
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
            <img class="rounded-circle" style="width: 50px;height: 50px" src="images/Uni_Logo.png" alt="Logo"
                style="width:40px;">
        </a>

        <a class="navbar-brand" href="#">Uni-Review</a>

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <form class="example" action="">
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
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" style="margin-right: 2%"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-cogs"></i>
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

    <?php 
        $uni_id = $_GET['uni_id'];
        // $uni_name=$_GET['uni_name'];
        $sql = "SELECT name, location, rating, img_src, short_descr, contact FROM university WHERE id='$uni_id'";
        $result = mysqli_query($conn,$sql);
        $info = mysqli_fetch_assoc($result);
    ?>
    <div class="container-xl shadow-lg p-3 border" style="background-color: white;">

        <div class="card">

            <div class="card-header shadow" style="background-color: black;">

                <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="rounded mx-auto d-block" id="carousel_images" src="images/NSU/outer.jpg">
                        </div>
                        <div class="carousel-item">
                            <img class="rounded mx-auto d-block" id="carousel_images" src="images/NSU/inner.jpg">
                        </div>
                        <div class="carousel-item">
                            <img class="rounded mx-auto d-block" id="carousel_images" src="images/NSU/fresher.jpg">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>

                </div>

            </div>

            <div class="card-body shadow">

                <!-- Tab links -->
                <div class="tab">
                    <button class="tablinks" onclick="openTab(event, 'University')">University</button>
                    <button class="tablinks" onclick="openTab(event, 'Programs')" id="defaultOpen">Programs</button>
                    <button class="tablinks" onclick="openTab(event, 'Reviews')">Reviews</button>
                </div>

                <!-- Tab content -->
                <div id="University" class="tabcontent">

                    <h1 style="text-align: center;"> <?php echo htmlspecialchars($info['name']); ?></h1>
                    <li style="text-align: center;" class="list-group-item">
                        <span> Ratings: </span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star-half checked"></span>

                    </li>
                    <table class="table table-striped" style="text-align: center;">
                        <tr>
                            <td> <?php echo htmlspecialchars($info['location']); ?></td>
                        </tr>
                        <tr>
                            <td> <?php echo htmlspecialchars($info['contact']); ?></td>
                        </tr>
                        <tr>
                            <td><a href="faculty.php">Faculties</a></td>
                        </tr>
                        <tr>
                            <td>
                                <h3>Short Description</h3>
                                <P>
                                    <?php echo htmlspecialchars($info['short_descr']); ?>
                                </P>
                            </td>
                        </tr>
                    </table>


                    <a href="homepage.php">
                        <h1>See Also </h1>
                    </a>
                    <h3><?php if(isset($_COOKIE['one'])){
                        $uni_id = $_COOKIE['one'];
                        $sql = "SELECT id, name FROM university WHERE id='$uni_id'";
                        $result = mysqli_query($conn,$sql);
                        $info = mysqli_fetch_assoc($result);
                       


                        echo  '<a href="university.php?uni_id='.$info['id'].'">'.$info['name'].'</a>';
                        
                    }                                      
                    ?></h3>
                    
                    <h3><?php if(isset($_COOKIE['two'])){
                        $uni_id = $_COOKIE['two'];
                        $sql = "SELECT id, name FROM university WHERE id='$uni_id'";
                        $result = mysqli_query($conn,$sql);
                        $info = mysqli_fetch_assoc($result);
                       


                        echo  '<a href="university.php?uni_id='.$info['id'].'">'.$info['name'].'</a>';
                    }                                      
                    ?></h3>
                    <h3><?php if(isset($_COOKIE['three'])){
                        $uni_id = $_COOKIE['three'];
                        $sql = "SELECT id, name FROM university WHERE id='$uni_id'";
                        $result = mysqli_query($conn,$sql);
                        $info = mysqli_fetch_assoc($result);
                       


                        echo  '<a href="university.php?uni_id='.$info['id'].'">'.$info['name'].'</a>';
                        
                    }                                      
                    ?></h3>
                        
                </div>

                <div id="Programs" class="tabcontent">

                    <?php 
                   $uni_id = $_GET['uni_id'];
                    $sql = "SELECT title, name, short_description, rating, university FROM program WHERE university='$uni_id'";
                    $result = mysqli_query($conn,$sql);
                    $info = mysqli_fetch_all($result, MYSQLI_ASSOC);

                    
                    mysqli_free_result($result);
                    mysqli_close($conn);
                    
                    ?>
                    <a href="courseList.php?<?php echo "uni_id="; ?><?php echo $uni_id;?>">
                        <h2>Courses</h2>
                    </a>
                    <hr />
                    <a href="labList.php?<?php echo "uni_id="; ?><?php echo  $uni_id;?>">
                        <h2>Labs</h2>
                    </a>
                    <hr />
                    <a href="programlist.php?<?php echo "uni_id="; ?><?php echo  $uni_id;?>">
                        <h2>Programs</h2>
                    </a>
                    <ul class="list-group list-group-flush">
                        <?php if(!empty($info)){
                            foreach($info as $info) { ?>
                        <li class="list-group-item">
                            <h5><b><?php echo htmlspecialchars($info['title']); ?></b></h5>
                        </li>
                        <?php }
                        } ?>
                    </ul>


                </div>

                <div id="Reviews" class="tabcontent">

                    <ul class="list-group">

                        <li class="list-group-item">
                            <div class="info">
                                <a href="#">Anie Silverston</a>
                                <span>4 hours ago</span>
                            </div>
                            <a class="avatar" href="#">
                                <img style="border-radius: 50%;" src="images/profile-avatar.png" width="35"
                                    alt="Profile Avatar" title="Anie Silverston" />
                            </a>
                            <p>Suspendisse gravida sem?</p>
                        </li>

                        <li class="list-group-item">
                            <div class="info">
                                <a href="#">Jack Smith </a>
                                <span>3 hours ago</span>
                            </div>
                            <a class="avatar" href="#">
                                <img style="border-radius: 50%;" src="images/student.png" width="35"
                                    alt="Profile Avatar" title="Jack Smith" />
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse gravida sem sit amet
                                molestie portitor.</p>

                        </li>

                        <li class="list-group-item">
                            <div class="info">
                                <a href="#">Jack Smith </a>
                                <span>3 hours ago</span>
                            </div>
                            <a class="avatar" href="#">
                                <img style="border-radius: 50%;" src="images/student.png" width="35"
                                    alt="Profile Avatar" title="Jack Smith" />
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse gravida sem sit amet
                                molestie portitor.</p>
                        </li>

                        <li class="list-group-item">
                            <form>
                                <div class="form-group">
                                    <label for="comment">Add a comment</label>
                                    <input type="email" class="form-control" placeholder="Your comments">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </li>

                        <li class="list-group-item">
                            <a href="review.php">Load More Reviews +</a>
                        </li>
                    </ul>
                </div>

                <script>
                    // Get the element with id="defaultOpen" and click on it
                    document.getElementById("defaultOpen").click();
                </script>

            </div>

        </div>


        <!--Main Body End-->

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