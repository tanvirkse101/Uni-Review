<?php include 'php/action.php'?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'php/headlinks.php'?>
</head>

<body class="bg-primary">
    <?php include 'php/nav.php'?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 bg-light rounded mt-2">
                <h4 class="content-center">Leave your review</h4>
                <form action="comments.php?<?php echo "uni_id="; ?><?php echo  $uni_id;?>" method="POST" class="p-2">
                    <div class="form-group">
                        <h5>Name: <?php echo $name ?></h5>
                    </div>
                    <div class="form-group">
                        <textarea name="comment" class="form-control rounded-0" placeholder="Write your comment"
                            required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-danger rounded-0" value="Post Comment">
                        <h5 class="float-right text-success p-2"><?php echo $msg ?></h5>
                    </div>
                </form>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-5 rounded bg-light p-3">
                <?php 
                $sql = "SELECT * FROM university_comment WHERE university='$university' ORDER BY id DESC";
                $result=$conn->query($sql);
                while($row=$result->fetch_assoc()){
            ?>
                <div class="card mb-2 border-secondary">
                    <div class="card-header bg-secondary py-1 text-light">
                        <span class="font-italic">Posted By: <?php echo $row['name'] ?></span>
                        <span class="font-italic float-right">On: <?php echo $row['cur_date'] ?></span>
                    </div>
                    <div class="card-body py-2">
                        <p class="card-text"><?php $row['comment'] ?></p>
                    </div>
                    <div class="card=footer py-2">
                        <div class="float-right">
                            <a href="php/action.php?del=<?php $row['id'] ?>" class="text-danger mr-2"
                                onclick="return confirm('Do you want to delete this message?');" title="Delete"><i
                                    class="fa fa-fw fa-trash"></i></a>
                            <a href="comments.php?edit=<?php $row['id'] ?>" class="text-success mr-2"
                                onclick="return confirm('Do you want to delete this message?');" title="Edit"><i
                                    class="fa fa-fw fa-edit"></i></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>