<?php
    require 'db_connect.php';
    session_start();
    $uni_id = $_GET['uni_id'];
    $sqlu =  "SELECT name, location, rating, img_src, short_descr, contact FROM university WHERE id='$uni_id'";
    $result = mysqli_query($conn,$sqlu);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
           $university = $row['name'];
        }
    }

    $msg = "";
    if(isset($_POST['submit'])){
        $name = $_SESSION["name"];
        $comment = $_POST["comment"];
        $date = date("Y-m-d");
        
        $sql = "INSERT INTO university_comment(name,university,comment,cur_date)VALUES('$name','$university','$comment','$date')";
        if($conn->query($sql)){
            $msg = "Posted Successfully!";
        }
        else $msg = "Failed to post comment!";
    }

 ?>