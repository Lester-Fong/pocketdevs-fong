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
            <h1>Blogs</h1>
            <a class="a-logo" href="../index.html"><img class="view-logo" src="./imgs/fongtel-logo-bgRemoved.png" alt=""></a>
        </div>
        <div class="blog-container">
            <div class="view-card">
                <?php foreach($query as $q) {?>
                    <div class="view-title">
                        <h1><?php echo $q['title']; ?></h1>

                        <div class="view-btns">
                            <a class="edit" href="edit.php?id=<?php echo $q['id']; ?>">Edit</a>

                            <form method="post">
                                <input type="text" hidden name="id" value="<?php echo $q['id'];?>">
                                <button class="delete" name="delete">Delete</button>
                            </form>
                        </div>
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