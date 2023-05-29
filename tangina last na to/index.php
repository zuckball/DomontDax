
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>

    </header>

    <div class="login">
        <div class="form-login">
            <h2>Login</h2>
            <form action="login_request.php" method="post">
            <?php
         if(isset($_GET['error'])){
             echo "<div class='error'>" . $_GET['error'] . "</div>";
         }
        ?>
                <div class="fill-box">
                    <input type="email" name="username" id="#" required placeholder="Email">
                </div>
                <div class="fill-box">
                    <input type="password" name="password" id="#" required placeholder="Password">
                </div>
                <input type="submit" value="Sign In" class="btn">
                <div class="reg">
                    <p>Dont have an account? <a href="reg-link">Register</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>