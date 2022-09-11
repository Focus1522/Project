<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="homeheader">
        <div class="logo">
            <img src="logo.png">
        </div>
        <h2>Home Page</h2>
    </div>

    <div class="menu">
        <ul>
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">About</a></li>
        </ul>
    </div>

    <div class="homecontent">
        <!--  notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="success">
                <h3>
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
    
        <!-- logged in user information -->
        <?php if (isset($_SESSION['username'])) : ?>
            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
            <p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
        <?php endif ?>
    </div>

</body>
</html>













<!----fewfew---->
<!----fwefwefw------>
<!------fsadsafaefsf------->
<!-------efewfwef----fewfwef---->

<!----dwed---dwedwedfe------->


<!---fefweff--dedfewf ---fwef>




