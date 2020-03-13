<?php
if (isset($_POST['add'])) {
    include_once 'db.php';
    
    $username = $_POST['user'];
    $message = $_POST['message'];
    
    $sql = "INSERT INTO tbl_user_comments (username, message) VALUES ('$username', '$message')";
    $stmt = $conn->prepare($sql);
    
    $stmt->execute();
    $comment_id = $stmt->insert_id;
    ?>
<?php
    
    $sql_sel = "SELECT * FROM tbl_user_comments WHERE id = $comment_id";
    
    $result = $conn->query($sql_sel);
    
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) // using prepared staement
    {
        ?>

<div id="comment-<?php echo $row["id"];?>" class="comment-row">
	<div class="comment-user"><?php echo $row["username"];?></div>
	<div class="comment-msg" id="msgdiv"><?php echo $row["message"];?></div>

	<div class="delete" name="delete" id="delete"
		onclick="deletecomment(<?php echo $row["id"];?>)">Delete</button>





</div>

<?php
    }
}
?>
