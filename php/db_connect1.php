<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');    // DB username
define('DB_PASSWORD', '');    // DB password
define('DB_DATABASE', 'university_review');      // DB name
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die( "Unable to connect");
$database = mysqli_select_db($connection ,DB_DATABASE) or die("Connection failed: " . mysqli_connect_error());