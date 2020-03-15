<?php
session_start();
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
    <?php include'php/headlinks.php' ?>
</head>

<body>
    <?php include 'php/db_connect.php';?>
    <?php include 'php/nav.php' ?>

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
                        $info1 = mysqli_fetch_assoc($result);
                       


                        echo  '<a href="university.php?uni_id='.$info1['id'].'">'.$info1['name'].'</a>';
                        
                    }                                      
                    ?></h3>

                    <h3><?php if(isset($_COOKIE['two'])){
                        $uni_id = $_COOKIE['two'];
                        $sql = "SELECT id, name FROM university WHERE id='$uni_id'";
                        $result = mysqli_query($conn,$sql);
                        $info2 = mysqli_fetch_assoc($result);
                       


                        echo  '<a href="university.php?uni_id='.$info2['id'].'">'.$info2['name'].'</a>';
                    }                                      
                    ?></h3>
                    <h3><?php if(isset($_COOKIE['three'])){
                        $uni_id = $_COOKIE['three'];
                        $sql = "SELECT id, name FROM university WHERE id='$uni_id'";
                        $result = mysqli_query($conn,$sql);
                        $info3 = mysqli_fetch_assoc($result);
                       


                        echo  '<a href="university.php?uni_id='.$info3['id'].'">'.$info3['name'].'</a>';
                        
                    }                                      
                    ?></h3>

                </div>

                <div id="Programs" class="tabcontent">

                    <?php 
                    $uni_id = $_GET['uni_id'];
                    $sql = "SELECT name, short_description, rating, university FROM program WHERE university='$uni_id'";
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
                            <h5><b><?php echo htmlspecialchars($info['name']); ?></b></h5>
                        </li>
                        <?php }
                        } ?>
                    </ul>


                </div>

                <script>
                    // Get the element with id="defaultOpen" and click on it
                    document.getElementById("defaultOpen").click();
                </script>

                <div id="Reviews" class="tabcontent">
                    <a href="comments.php?<?php echo "uni_id="; ?><?php echo  $uni_id;?>">Add/edit comments</a>
                </div>

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