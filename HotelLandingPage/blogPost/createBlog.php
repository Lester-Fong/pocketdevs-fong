<?php 
include "./logic.php"
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="create.css">
    <title>Create a Blog</title>
</head>
<body>
    <div class="container">
        <img src="../imgs/fongtel-logo-bgRemoved.png" alt="">
       <div class="wrapper">
            <form action="" method="post">
                <input type="text" name="title" class="title" placeholder="Blog Title">
                <textarea class="txtarea" name="content" placeholder="Post here..."></textarea>
                <button name="new_post" class="btn">Add Post</button>
            </form>
       </div>
    </div>
</body>
</html>