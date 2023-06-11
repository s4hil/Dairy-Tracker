<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login - Dairy Tracker</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="icon" href="assets/imgs/favicon.png">
</head>
<body>

    <main class="wrapper">
        <div class="login-box">
            <h2 class="header text-center">
                <span>Dairy</span>
                <span class="bg-danger">Tracker</span>
            </h2>


            <form class="form" onsubmit="return validateLogin();" action="loginCheck.php" method="POST">
                <fieldset class="form-group">
                    <label>Username</label>
                    <input type="text" id="username" class="form-control" name="username">
                </fieldset>
                <fieldset class="form-group">
                    <label>Password</label>
                    <input type="password" id="password" class="form-control" name="password">
                </fieldset>
                <fieldset class="form-group">
                    <input type="submit" name="login" class="btn btn-success float-right" value="Login">
                </fieldset>
            </form>
            <?php
                include 'loginCheck.php';
                if (isset($_SESSION['msg'])) {
                    ?>
                        <div class="alert alert-danger text-center">
                            <?php
                                echo $_SESSION['msg'];
                                unset($_SESSION['msg']);
                            ?>
                        </div>
                    <?php
                }
            ?>
            <p align="center">
                <a href="signUp.php"><b>Create Account?<b></a>
            </p>
        </div>
    </main>

<script src="./assets/js/jquery.min.js"></script>
<script src="./assets/js/login.js"></script>
</body>
</html>
