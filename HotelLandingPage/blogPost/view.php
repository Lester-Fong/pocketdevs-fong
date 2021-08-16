<?php 

include "./logic.php";
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
        <?php if(isset($_REQUEST["index"])) {?>
            <a class="a-logo" href="../index.php"><img class="view-logo" src="./imgs/fongtel-logo-bgRemoved.png" alt=""></a>
        <?php } else {?>   
            <a class="a-logo" href="../home.php"><img class="view-logo" src="./imgs/fongtel-logo-bgRemoved.png" alt=""></a>
        <?php } ?>  
    </div>
        <div class="blog-container">
            <div class="view-card">
                <?php foreach($query as $q) {?>
                    <div class="view-title">
                        <h1><?php echo $q['title']; ?></h1>
                        <h5 class="card-user">Created by: <?php echo $q['user_name'];?></h5>
                        <?php if(isset($_REQUEST['index'])) { ?>
                            <div class="view-btns">
                                <a class="edit" href="../../index.php">Edit</a>
                                <form method="post">
                                    <a class="delete" href="../../index.php">Delete</a>
                                </form>
                            </div>
                        <?php } else if($q['user_name'] !== $_SESSION['user_name']) {?>
                            <div></div>
                        <?php } else { ?>
                            <div class="view-btns">
                                <a class="edit" href="edit.php?id=<?php echo $q['id']; ?>">Edit</a>
                                <form method="post">
                                    <input type="text" hidden name="id" value="<?php echo $q['id'];?>">
                                    <button class="delete" name="delete">Delete</button>
                                </form>
                            </div>
                        <?php } ?>

                    </div>
                    <div class="view-text">
                        <p><?php echo $q['content']; ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>

</section>
</body>

</html>