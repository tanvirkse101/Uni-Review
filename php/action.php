<?php
    if(!isset($_SESSION['uni_id'])){
        session_start();
    }

    require 'db_connect.php';
    $university="";
    $uni_id = $_SESSION['uni_id'];
    $sqlu =  "SELECT id,name FROM university WHERE id='$uni_id'";
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
    //if(isset($_GET['del'])){
        //$id=$_GET['del'];
        //echo $id;
        //$sql="DELETE FROM university_comment WHERE id='$id'";

        //if($conn->query($sql)){
        //    $string = "location:../comments.php?uni_id=".$uni_id;
         //   header($string);
        //}
    //}
 ?>