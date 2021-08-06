<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>LogIn</title>
</head>
<body>
    <div class="wrapper">
        <form action="./login.php" method="post">
            <h1>LOGIN</h1>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?> </p>
            <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?> </p>
            <?php } ?>

            <label for="">User Name</label>
            <input type="text" name="uname" placeholder="User Name">

            <label for="">Password</label>
            <input type="password" name="password" placeholder="Password">

            <button type="submit">Log In</button>

            <a href="./signup.php" class="create">Create an account to Book!</a>
        </form>
    </div>
</body>
</html>