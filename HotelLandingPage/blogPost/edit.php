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
       <a class="a-logo" href="../home.php"><img class="view-logo" src="./imgs/fongtel-logo-bgRemoved.png" alt=""></a>
       <div class="wrapper">

       <?php foreach($query as $q){ ?>
            <form action="" method="post">
                <input type="text" required name="title" value="<?php echo $q['title']; ?>" class="title" placeholder="Blog Title">
                <textarea class="txtarea" required name="content" placeholder="Post here..."><?php echo $q['content']; ?></textarea>
                <button name="update" class="btn">Update Post</button>
            </form>
        <?php }?>
       </div>
    </div>
</body>
</html> 