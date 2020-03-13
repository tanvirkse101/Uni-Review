<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <?php include'php/headlinks.php' ?>
</head>

<body>
    <?php session_start() ?>
    <?php include 'php/db_connect.php';?>
    <?php include 'php/nav.php' ?>
    <!--Main Body Start-->

    <div class="container-xl shadow-lg p-3 border" style="background-color: white;">

        <div class="jumbotron bg-primary shadow-lg">
            <h1 class="display-4" style="color:white;text-align: center;">University List</h1>
            <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
            <script>
                $(document).ready(function () {
                    $('.search-box input[type="text"]').on("keyup input", function () {
                        /* Get input value on change */
                        var inputVal = $(this).val();
                        var resultDropdown = $(this).siblings(".result");
                        if (inputVal.length) {
                            $.get("php/backend-search.php", {
                                term: inputVal
                            }).done(function (data) {
                                // Display the returned data in browser
                                resultDropdown.html(data);
                            });
                        } else {
                            resultDropdown.empty();
                        }
                    });

                    // Set search input value on click of result item
                    $(document).on("click", ".result p", function () {
                        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
                        $(this).parent(".result").empty();
                    });
                });
            </script>
            <div class="search-box text-center">
                <input type="text" autocomplete="off" placeholder="Search country..." />
                <div class="result"></div>
            </div>
        </div>
        <?php 
                $sql = 'SELECT id, name, location, rating, img_src FROM university';
                $result = mysqli_query($conn,$sql);
                $info = mysqli_fetch_all($result, MYSQLI_ASSOC);
                mysqli_free_result($result);
                mysqli_close($conn);
        ?>
        <div class="card-columns">

            <?php foreach($info as $info) { ?>

            <div class="card shadow border rounded" style="width:356px;height:402px">
                <img class="card-img-top mx-auto d-block" style="padding:3px; height: 200px;width: 353px;"
                    src="upload/university/<?php echo $info['img_src'];?>" alt="<?php echo $info['name'];?>">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b><a
                                    style="color: black;"><?php echo htmlspecialchars($info['name']); ?>
                                    <??>

                                </a></b>
                        </li>
                        <li class="list-group-item">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star-half checked"></span> <a style="margin-left: 10px;"
                                href="#"><?php echo htmlspecialchars($info['rating']); ?></a>
                        </li>
                        <li class="list-group-item"><a
                                href="university.php?<?php echo "uni_id="; ?><?php echo $info['id'];?>"> Click for more
                                info -> </a></li>
                    </ul>
                </div>
            </div>

            <?php } ?>

        </div>

    </div>

    <!--Main Body End-->

</body>

</html>