<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Sign Up</title>
</head>
<body>
    <div class="wrapper">
        <form action="./signup-check.php" method="post">
            <h1>Sign Up</h1>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?> </p>
            <?php } ?>
            
            <label for="">Name</label>
            <?php if (isset($_GET['name'])) { ?>
                <input type="text"
                       name="name" 
                       placeholder="Name" 
                       value="<?php echo $_GET['name']; ?>"
                       required>
                    

            <?php } else { ?>
                <input  type="text" 
                        name="name"
                        placeholder="Name">
            <?php }?>


            <label for="">User Name</label>
            <?php if (isset($_GET['uname'])) { ?>
                <input type="text"
                       name="uname" 
                       placeholder="Username" 
                       value="<?php echo $_GET['uname']; ?>">

            <?php } else { ?>
                <input  type="text" 
                        name="uname"
                        placeholder="Username">
            <?php }?>

            <label for="">Password</label>
            <input type="password" name="password" placeholder="Password">
            
            <label for="">Confirm Password</label>
            <input type="password" name="re_password" placeholder="Match your password">

            <button type="submit">Sign Up</button>

            <a href="./index.php" class="create">Already have an Account?</a>
        </form>
    </div>
</body>
</html>