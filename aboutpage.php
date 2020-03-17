<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about page</title>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Custom CSS-->
    <link rel="stylesheet" href="css/aboutpage.css">
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
            <img class="rounded-circle" style="width: 50px;height: 50px" src="images/Uni_Logo.png" alt="Logo"
                style="width:40px;">
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
                <a href="homepage.php" class="nav-link" href=><i class="fa fa-fw fa-home"></i> Home</a>
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
                    <a class="dropdown-item" href="">About</a>
                    <a class="dropdown-item" href=""> Contact Us</a>
                </div>
            </li>
        </ul>
    </nav>

    <!--Main Body Start-->



    <div class="container">
        
        <h1 class="headeradmin">Admins of this website</h1>
        <div class="row">
            <div class="col-md-4">

                <div class="shadow-lg p-3 mb-5 bg-white rounded" id="centerblock">
                    <img class="center" src="images/profile-avatar.png" alt="">
                    <div class="profile-userbuttons">
                        <table class="shadow-lg p-3 mb-5 bg-white rounded">
                            <tr>
                                <td>first name:</td>
                                <td>Minhaj Uddin</td>
                            </tr>
                            <tr>
                                <td>University:</td>
                                <td>North South University</td>
                            </tr>
                            <tr>
                                <td>email:</td>
                                <td>user one@gmail.com </td>
                            </tr>
                            <tr>
                                <td>phone:</td>
                                <td>0178549586</td>
                            </tr>
                            
                        </table>
                    
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="shadow-lg p-3 mb-5 bg-white rounded" id="centerblock">
                    <img class="center" src="images/profile-avatar.png" alt="">
                    <div class="profile-userbuttons">
                        <table class="shadow-lg p-3 mb-5 bg-white rounded">
                            <tr>
                                <td>name:</td>
                                <td>tanvir ahmed</td>
                            </tr>
                            <tr>
                                <td>University:</td>
                                <td>North South University</td>
                            </tr>
                            <tr>
                                <td>email:</td>
                                <td>user one@gmail.com </td>
                            </tr>
                            <tr>
                                <td>phone:</td>
                                <td>0178549586</td>
                            </tr>
                           
                        </table>
                       
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="shadow-lg p-3 mb-5 bg-white rounded" id="centerblock">
                    <h5 style="text-align:center;">location of headoffice</h5>
                    
                    <div style="max-height: 342px" id="map">
                        
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="shadow-lg p-3 mb-5 bg-white rounded" id="centerblock">
                    <img class="center" src="images/profile-avatar.png" alt="">
                    <div class="profile-userbuttons">
                        <table class="shadow-lg p-3 mb-5 bg-white rounded">
                            <tr>
                                <td>first name:</td>
                                <td>Anne Tabassum</td>
                            </tr>
                             <tr>
                                <td>University:</td>
                                <td>North South University</td>
                            </tr>
                            <tr>
                                <td>email:</td>
                                <td>user one@gmail.com </td>
                            </tr>
                            <tr>
                                <td>phone:</td>
                                <td>0178549586</td>
                            </tr>
                            
                        </table>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="shadow-lg p-3 mb-5 bg-white rounded" id="centerblock">
                    <img class="center" src="images/profile-avatar.png" alt="">
                    <div class="profile-userbuttons">
                        <table class="shadow-lg p-3 mb-5 bg-white rounded">
                            <tr>
                                <td>first name:</td>
                                <td>Mainul islam rajon</td>
                            </tr>
                             <tr>
                                <td>University:</td>
                                <td>North South University</td>
                            </tr>
                            <tr>
                                <td>email:</td>
                                <td>user one@gmail.com </td>
                            </tr>
                            <tr>
                                <td>phone:</td>
                                <td>0178549586</td>
                            </tr>
                            
                        </table>
                       
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="shadow-lg p-3 mb-5 bg-white rounded" id="centerblock">
                    <h3 style="text-align :center;" class="shadow-lg p-3 mb-5 bg-white rounded">Short Description</h3>
                    
                    <p style="font-size: x-small;">After HSC or equivalent exams, students often face difficulty to choose the best University for themselves amongst the huge pool of private and public Universities. Some have senior siblings, relatives, or friends to ask for advice and reviews but many face a lack of guidance. This lack of guidance might lead them to pick the University which might not be best suited for them. This is where our website Uni-Review comes to the assistance of unaware students. The reviews & ratings come from students who have studied in those Universities themselves. The students get a glimpse of the environment of the university along with various useful information. The website will offer the students important information other than reviews. Eager students can learn about the various programs offered, specialized courses, faculties, labs, etc. The students will be able to clear various doubts they have about a particular university. The aim of the website is to empower young students with the knowledge to find the best suited University for them.</p>
                    
                </div>
            </div>
        </div>
        
    </div>
    <!--Main Body End-->
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 23.8151, lng: 90.4255},
          zoom: 18
        });
      }
    </script>
   
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVchufqfCud7_b95sVGmKDlcTq_pUuEkA&callback=initMap"
    async defer></script>

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