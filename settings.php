<?php 
    include 'loginCheck.php';
    if (isset($_SESSION['loginStatus'])) {
        if ($_SESSION['loginStatus'] == true) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data - Dairy Tracker</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link rel="icon" href="assets/imgs/favicon.png">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/settings.css">
    <link rel="stylesheet" type="text/css" href="assets/css/common.css">
    <style>
        .wrapper {
            width: 100%;
        }
        .main-content {
            width: 100%;
            display: flex;
            justify-content: center;
        }
        
    </style>
</head>
<body>

    <main class="wrapper">
        <?php require 'assets/components/navbar.php'; ?>
        <section class="main-content">
            <div class="pt-5 row container-fluid d-flex justify-content-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <h3 class="text-center alert alert-success">Settings</h3>
                    <form class="form">
                        <fieldset class="form-group">
                            <label>Price Per Litre</label>
                            <input type="text" id="price" class="form-control">
                        </fieldset>
                        <fieldset class="form-group">
                            <label>Telegram Chat ID</label>
                            <input type="text" id="chat-id" class="form-control">
                        </fieldset>
                        <fieldset class="form-group">
                            <label>Telegram Bot Token</label>
                            <textarea type="text" id="token" class="form-control" rows="2"></textarea>
                        </fieldset>
                        <button class="form-control btn btn-success" id="addSettings">Add</button>
                        <button class="form-control btn btn-primary" id="updateSettings">Update</button>
                    </form><br>
                    <div class="msg"></div>
                </div>
            </div>
        </section>
        
    </main>

    <!-- Script Files -->
    <script src="https://kit.fontawesome.com/de41999cf3.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/settings.js"></script>
</body>
</html>
<?php
}
}
else {
    echo "You seem lost!";
}
?>