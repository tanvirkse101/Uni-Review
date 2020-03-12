<?php include 'php/db_connect.php';?>
<?php
session_start();
ob_flush();
$message="";
 
if(isset($_POST['action']))
{          
    if($_POST['action']=="Sign up")
    {
		extract ($_POST);
         $email = mysqli_real_escape_string($connection,$_POST['email']);
		$name = mysqli_real_escape_string($connection,$_POST['name']);
       
		$contact = floatval(mysqli_real_escape_string($connection,$_POST['contact']));
        $password = mysqli_real_escape_string($connection,$_POST['password']);

    echo $email;
    echo $name;
    echo $contact;
		$strSQL1 = mysqli_query($connection,"insert into users (email,name,contact,password) values ('".$email."','".$name."','".$contact."','".($password)."')");
?>
		<META HTTP-EQUIV="refresh" CONTENT="1;URL=signin.php">

<?php 

		if ($strSQL1)
		 {
			
			 echo "Inserted";
			 
			 
			$strSQL2 = mysqli_query($connection,"select user_id from users where email='".$email."' and password='".($password)."'") ;
        	$Results = mysqli_fetch_array($strSQL2);
			//echo $Results['user_id'];
			 
			 unset($_POST);
			 
			 ?>
             <META HTTP-EQUIV="refresh" CONTENT="1;URL=signin.php">
             <?php
		 
		 }
		 if(!$strSQL1)
		 {
			  $message = " Input not correct. Please make sure all required fields are filled out correctly";
		 }
		
	}
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Uni-Review-Sign up</title>



		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style1.css" type="text/css" />
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="css/bootstrap.mini.css" type="text/css" />

<br />
				
<div style="margin:20"
<nav class="navbar navbar-inverse" >
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Uni-Review</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
       <!-- <li><a href="#">Link</a></li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
       	<li><a href="homepage.php">Home</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>




	</head>


<SCRIPT LANGUAGE="JavaScript">
function check() {
fn=document.form1.name.value;
if (fn.length<1) {
alert("Please Enter First Name");
document.form1.name.focus();
return false;
}
pn=document.form1.contact.value;
if(pn.length<9) {
alert("Please Enter Contact no");
document.form1.phone.focus();
return false;
}
pw=document.form1.password.value;
if(pw.length<6) {
alert("Password must be above 6 chara");
document.form1.password.focus();
return false;
}
repw=document.form1.repassword.value;
if(repw != pw) {
alert("Password not matching");
document.form1.password.focus();
return false;
}

return true
}
</script>


<br>
<br>
<body background="images/ll.jpg">

	<div class="login-card">
        	<h1>Sign-IN</h1><br>
            	<form name="form1"action="" method="post" onsubmit=" check();">

            <input type="email" name="email" class="form-control input-sm chat-input" placeholder="email" />
            </br>

            <input type="text" name="name" class="form-control input-sm chat-input" placeholder="name" />
            </br>
            
      <!--       <input type="text" id="address" class="form-control input-sm chat-input" placeholder="Address" />
            </br> -->

             <input type="text" name="contact" class="form-control input-sm chat-input" size="10" maxlength="10" placeholder="contact" />
            </br>
	

			<!--<input type="text" name="mark1"  placeholder="mark" />
            <input type="text" name="mark2"  placeholder="mark" />
            <input type="text" name="mark3" placeholder="mark" />*/ -->

	</br>
    </br>
    

            <input type="password" name="password" class="form-control input-sm chat-input" placeholder="password" />
             <input type="password" name="repassword" class="form-control input-sm chat-input" placeholder="Re enter password" />
            </br>



 				<div class="text-danger text-center"> <?php echo $message; ?> </div>




			<input type="submit" name="action" class="login login-signup" value="Sign up">
             <div class="login-help">
    			<a href="#">Login</a>
  				</div>
            </div>
        
        </div>
    </div>
</div>



</form>














</body>
<br>
<br>


<div class="footer-copyright navbar-bottom" align="center">
	<div class="container">
		<div class="span 12">
				
				<!-- <p>&#169; Created By Fahim Khan</p> -->
				
		</div>
	</div>
</div>


</html>

