<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up - Dairy Tracker</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/signUp.css">
    <link rel="icon" href="assets/imgs/favicon.png">
</head>
<body>

    <main class="wrapper">
       <div class="sign-up-box">
            <h3>Sign Up - Dairy <span class="bg-danger">Tracker</span></h3>
           <form class="form">
                <fieldset class="form-group">
                    <label>Username</label>
                    <input type="text" id="username" class="form-control">
                </fieldset>
                <fieldset class="form-group">
                    <label>Password</label>
                    <input type="password" id="password" class="form-control">
                </fieldset>
                <fieldset class="form-group">
                    <label>Email</label>
                    <input type="email" id="email" class="form-control">
                </fieldset>
                <fieldset class="form-group">
                    <button class="btn btn-primary float-right" id="signUp">Sign Up</button>
                </fieldset>
           </form>
           <p align="center">
                <a href="index.php"><b>Login?<b></a>
            </p>
       </div>
    </main>

<script src="./assets/js/jquery.min.js"></script>
<script src="./assets/js/signUp.js"></script>
</body>
</html>
