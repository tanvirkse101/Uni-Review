<?php include 'php/db_connect.php';?>
<?php 
    
     // uni submission starts 
     if(isset($_POST['btnUni'])){

      echo "pressed";

        $Uname = $_POST['Name'];
        $location = $_POST['location'];
        $short_desc = $_POST['short_descr'];
        $contact = $_POST['Contact'];

        // $name = $_FILES['UImage']['name'];

        $target_dir = "upload/university/";
        $target_file = $target_dir . basename($_FILES["UImage"]["name"]);
      

        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
         $img_name =  $Uname;
        
         $img_name = preg_replace('/\s+/', '_', $img_name);
        $name = $img_name.".".$imageFileType;
       
       
        // Select file type
       
      
        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif");
      
        // Check extension
        if( in_array($imageFileType,$extensions_arr) ){
       
            // Insert record
        //   $query = "insert into images(name) values('".$name."')";
        //   mysqli_query($con,$query); 
        
           // Upload file
           move_uploaded_file($_FILES['UImage']['tmp_name'],$target_dir.$name);
        }
        
        $sql = "INSERT INTO university (name, location, img_src, short_descr, Contact)
        VALUES ('$Uname', '$location','$name', '$short_desc','$contact')";

        if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
          } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
        

        
    }

    // uni submission end

    //program submission starts

    if(isset($_POST['btnProgram'])){

      echo "pressed";

        $title = $_POST['programCode'];
        $name = $_POST['programName'];
        $short_desc = $_POST['programDesc'];
        $uni =  $_POST['unilist'];

        
        
        $sql = "INSERT INTO program (title,name,  short_description,university)
        VALUES ('$title','$name', '$short_desc','$uni')";

        if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
          } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
        

        // echo $Uname ;
        // echo $location;
        // echo $short_desc;
        // echo $contact;

    }

    // program submissin ends
    

    //course submission starts
    if(isset($_POST['btnCourse'])){

      echo "pressed";

        $title = $_POST['courseCode'];
        $name = $_POST['courseName'];
        $short_desc = $_POST['courseDesc'];
        $uni =  $_POST['unilist'];

        
        
        $sql = "INSERT INTO course (title,name,  short_description,university)
        VALUES ('$title','$name', '$short_desc','$uni')";

        if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
          } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
        

        // echo $Uname ;
        // echo $location;
        // echo $short_desc;
        // echo $contact;

    }

    //course submission ends
    
    //lab submission starts

    if(isset($_POST['btnLab'])){

      echo "pressed";

        $title = $_POST['labCode'];
        $name = $_POST['labName'];
        $short_desc = $_POST['labDesc'];
        $uni =  $_POST['unilist'];

        
        
        $sql = "INSERT INTO lab (title,name,  short_description,university)
        VALUES ('$title','$name', '$short_desc','$uni')";

        if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
          } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }

        }
    // lab submission ends


    // faculty submission starts

    if(isset($_POST['btnFaculty'])){

      echo "pressed";

        $Fname = $_POST['facultyName'];
        $email = $_POST['facultyEmail'];
        $research_area = $_POST['facultyDesc'];
        $uni =  $_POST['unilist'];

       

        // $name = $_FILES['UImage']['name'];

        $target_dir = "upload/faculty/";
        $target_file = $target_dir . basename($_FILES["FImage"]["name"]);
      

        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $name = $Fname.".".$imageFileType;
       
       
        // Select file type
       
      
        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif");
      
        // Check extension
        if( in_array($imageFileType,$extensions_arr) ){
       
            // Insert record
        //   $query = "insert into images(name) values('".$name."')";
        //   mysqli_query($con,$query); 
        
           // Upload file
           move_uploaded_file($_FILES['FImage']['tmp_name'],$target_dir.$name);
        }
        
        $sql = "INSERT INTO faculty (name, email,research_area, img_src,university)
        VALUES ('$Fname', '$email','$research_area', '$name','$uni')";

        if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
          } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
        

        // echo $Uname ;
        // echo $location;
        // echo $short_desc;
        // echo $contact;

    }


    // faculty submission ends



    
    ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminDashBoard</title>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Custom CSS-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/adminDashboard.css">
    <!-- Custom JS -->
    <script src="js/script.js"></script>
    <script src="js/adminDashBoard.js"></script>
    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    

       

    



</head>

<body style="background-color:rgb(121, 216, 233)">

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

        

        <!-- Links -->
        <ul class="navbar-nav" style="margin-left:35%;">
            <li class="nav-item">
                <a class="nav-link" href="homepage.php"><i class="fa fa-fw fa-home"></i> Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=><i class="fa fa-fw fa-user-circle"></i> Logout</a>
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

    <div class="container p-3">

        <div>
            <h1 class="text-center text-danger m-2 p-5" >DashBoard</h1>

        </div>
        <div class="text-center m-5 p-5">
            
            <button data-toggle="collapse" data-target="#addUni" class="space" onmouseover="hover(this)" onmouseout= "endHover(this)" >
                <h3 class=" text-dark">Add University</h3>
            </button>

            <div id="addUni" class="collapse m-2 formBorder">
                <form method="post" enctype="multipart/form-data" >
                    

                    <div class="form-group m-2">
                        <label  for="Image"> <h3>University Image:</h3></label>
                        <input type="file" class="form-control" id="Image" placeholder="Choose file" name="UImage" required>
                      </div>

                    <div class="form-group m-2">
                      <label for="Name"><h3>University Name:</h3></label>
                      <input type="text" class="form-control" id="Name" placeholder="Enter Name" name="Name" required>                      
                    </div>  
                    <div class="form-group m-2">
                        <label for="location"><h3>University Location:</h3></label>
                        <input type="text" class="form-control" id="location" placeholder="Enter location" name="location" required>                      
                      </div> 
                    
                    <div class="form-group m-2">
                        <label for="short_descr"><h3>University Short Description:</h3></label>
                        <input type="text" class="form-control" id="short_descr" placeholder="Enter short description" name="short_descr" required>                      
                      </div> 

                    <div class="form-group m-2">
                        <label for="Contact"><h3>University Contact:</h3></label>
                        <input type="number" class="form-control" id="Contact" placeholder="Enter Contact" name="Contact" required>                      
                      </div> 
                    <button type="submit" name="btnUni" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>


        <div class="text-center m-5 p-5">
            
            <button data-toggle="collapse" data-target="#addProgram" class="space" onmouseover="hover(this)" onmouseout= "endHover(this)" >
                <h3 class=" text-dark">Add Program</h3>
            </button>

            <div id="addProgram" class="collapse m-2 formBorder">

               
                <label for="selectUni"><h3>Choose a University:</h3></label>
                <select id="selectUni" name="unilist" form="ProgrammForm">

                <?php 
                  $sql = "SELECT id, name FROM university";
                  $result = mysqli_query($conn, $sql);
                  while($row = mysqli_fetch_array($result) ){
                    echo "<option value=".$row['id'].">".$row['name']. "</option>";
                  }
                
                ?>
                <!-- <option value="volvo">University 1</option>
                <option value="saab">University 2</option>
                <option value="opel">University 3</option>
                <option value="audi">University 4</option> -->
                </select>

                <form method="post"  id="ProgrammForm" enctype="multipart/form-data">
                    
                    <div class="form-group m-2">
                      <label for="programCode"><h3>Program Code:</h3></label>
                      <input type="text" class="form-control" id="programCode" placeholder="Enter Code" name="programCode" required>
                    </div>    

                    <div class="form-group m-2">
                      <label for="programName"><h3>Program Name:</h3></label>
                      <input type="text" class="form-control" id="programName" placeholder="Enter Name" name="programName" required>
                    </div>  

                    <div class="form-group m-2">
                        <label for="programDesc"><h3>Program Description:</h3></label>
                        <input type="text" class="form-control" id="programDesc" placeholder="Enter description" name="programDesc" required>
                      </div>  
                    <button type="submit" class="btn btn-primary" name="btnProgram">Submit</button>
                  </form>
            </div>
        </div>

        <div class="text-center m-5 p-5">
            
            <button data-toggle="collapse" data-target="#addCourse" class="space" onmouseover="hover(this)" onmouseout= "endHover(this)" >
                <h3 class=" text-dark">Add Course</h3>
            </button>

            <div id="addCourse" class="collapse m-2 formBorder">


                <label for="selectUni"><h3>Choose a University:</h3></label>
                <select id="selectUni" name="unilist" form="CourseForm">
                <?php 
                  $sql = "SELECT id, name FROM university";
                  $result = mysqli_query($conn, $sql);
                  while($row = mysqli_fetch_array($result) ){
                    echo "<option value=".$row['id'].">".$row['name']. "</option>";
                  }
                
                ?>
                </select>

                <form method="post"  id="CourseForm" enctype="multipart/form-data">
                    
                    <div class="form-group m-2">
                      <label for="courseCode"><h3>Course Code:</h3></label>
                      <input type="text" class="form-control" id="courseCode" placeholder="Enter Code" name="courseCode" required>
                    </div>    

                    <div class="form-group m-2">
                      <label for="courseName"><h3>Course Name:</h3></label>
                      <input type="text" class="form-control" id="courseName" placeholder="Enter Name" name="courseName" required>
                    </div>  

                    <div class="form-group m-2">
                        <label for="courseDesc"><h3>Course Description:</h3></label>
                        <input type="text" class="form-control" id="courseDesc" placeholder="Enter description" name="courseDesc" required>
                      </div>  
                    <button type="submit" class="btn btn-primary" name="btnCourse" >Submit</button>
                  </form>
            </div>
        </div>



        <div class="text-center m-5 p-5">
            
            <button data-toggle="collapse" data-target="#addLab" class="space" onmouseover="hover(this)" onmouseout= "endHover(this)" >
                <h3 class=" text-dark">Add Lab</h3>
            </button>

            <div id="addLab" class="collapse m-2 formBorder">


                <label for="selectUni"><h3>Choose a University:</h3></label>
                <select id="selectUni" name="unilist" form="LabForm">
                <?php 
                  $sql = "SELECT id, name FROM university";
                  $result = mysqli_query($conn, $sql);
                  while($row = mysqli_fetch_array($result) ){
                    echo "<option value=".$row['id'].">".$row['name']. "</option>";
                  }
                
                ?>
                </select>

                <form method="post" id="LabForm" enctype="multipart/form-data">
                    
                    <div class="form-group m-2">
                      <label for="labCode"><h3>Lab Code:</h3></label>
                      <input type="text" class="form-control" id="labCode" placeholder="Enter Code" name="labCode" required>
                    </div>    

                    <div class="form-group m-2">
                      <label for="labName"><h3>Lab Name:</h3></label>
                      <input type="text" class="form-control" id="labName" placeholder="Enter Name" name="labName" required>
                    </div>  

                    <div class="form-group m-2">
                        <label for="labDesc"><h3>Lab Description:</h3></label>
                        <input type="text" class="form-control" id="labDesc" placeholder="Enter description" name="labDesc" required>
                      </div>  
                    <button type="submit" class="btn btn-primary" name="btnLab">Submit</button>
                  </form>
            </div>
        </div>



        <div class="text-center m-5 p-5">
            
            <button data-toggle="collapse" data-target="#addFaculty" class="space" onmouseover="hover(this)" onmouseout= "endHover(this)" >
                <h3 class=" text-dark">Add Faculty</h3>
            </button>

            <div id="addFaculty" class="collapse m-2 formBorder">


                <label for="selectUni"><h3>Choose a University:</h3></label>
                <select id="selectUni" name="unilist" form="FacultyForm">
                <?php 
                  $sql = "SELECT id, name FROM university";
                  $result = mysqli_query($conn, $sql);
                  while($row = mysqli_fetch_array($result) ){
                    echo "<option value=".$row['id'].">".$row['name']. "</option>";
                  }
                
                ?>
                </select>

                <form method="post"  id="FacultyForm" enctype="multipart/form-data">

                <div class="form-group m-2">
                        <label  for="Image"> <h3>Faculty Image:</h3></label>
                        <input type="file" class="form-control" id="Image" placeholder="Choose file" name="FImage" required>
                      </div>

                    
                    <div class="form-group m-2">
                        

                    <div class="form-group m-2">
                      <label for="facultyName"><h3>Faculty Name:</h3></label>
                      <input type="text" class="form-control" id="facultyName" placeholder="Enter Name" name="facultyName" required>
                    </div>  

                    <label for="facultyEmail"><h3>Faculty Email:</h3></label>
                      <input type="email" class="form-control" id="facultyEmail" placeholder="Enter Code" name="facultyEmail" required>
                    </div>

                    <div class="form-group m-2">
                        <label for="facultyDesc"><h3>Research Area:</h3></label>
                        <input type="text" class="form-control" id="facultyDesc" placeholder="Enter Courses" name="facultyDesc" required>
                      </div>  
                    <button type="submit" name="btnFaculty" class="btn btn-primary">Submit</button>
                  </form>
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