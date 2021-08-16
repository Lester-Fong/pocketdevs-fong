<?php 

include "./logic.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./blogstyle.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@400;700&family=Kaushan+Script&display=swap" rel="stylesheet">
    <title>Fongtel Blog</title>
</head>
<body>
<section id="blogs">
        <div class="blog-title">
            <?php if(isset($_REQUEST["index"])) {?>
                <a class="blogs" href="../index.php"><h1>Blogs</h1></a>
            <?php } else {?>   
                <a class="blogs" href="../home.php"><h1>Blogs</h1></a>
            <?php } ?> 

            <?php if (isset($_REQUEST["info"])) {?>
                <?php if ($_REQUEST["info"] == "added") {?>
                    <div class="alert" role="alert">
                        Post have been added successfully!
                    </div>
                <?php } else if ($_REQUEST["info"] == "updated") { ?>
                    <div class="alert" role="alert">
                        Post have been updated successfully!
                    </div>
                <?php } else if ($_REQUEST["info"] == "deleted") { ?>
                    <div class="alert" role="alert">
                        Post have been deleted successfully!
                    </div>
                <?php } ?>
            <?php }?>
           
            <?php if (isset($_REQUEST["index"])) {?>
                <a href="../../index.php">+ Create a New Post</a>
            <?php } else { ?>
                <a href="./createBLog.php">+ Create a New Post</a>
            <?php } ?>
        </div>



        
        <div class="blog-container">
            <div class="wrapper">
                <?php foreach($query as $q) {?>
                <div class="card">
                    <h3 class="card-title"><?php echo $q['title'];?></h3>
                    <h5 class="card-user">By: <?php echo $q['user_name'];?></h5>
                    <p class="card-text"><?php echo $q['content'];?></p>
                    <?php if (isset($_REQUEST["index"])) {?>
                         <a href="./view.php?id=<?php echo $q['id'];?>&index" class="card-anchor">Read More &rarr;</a>
                    <?php } else { ?>
                         <a href="./view.php?id=<?php echo $q['id'];?>&<?php echo $q['user_name'];?>" class="card-anchor">Read More &rarr;</a>
                    <?php } ?>
                </div>
                <?php }?>
            </div>
        </div>

</section>
</body>

</html>