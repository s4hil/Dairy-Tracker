<?php 
    include 'loginCheck.php';
    if (isset($_SESSION['loginStatus'])) {
        if ($_SESSION['loginStatus'] == true) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Statistics - Dairy Tracker</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link rel="icon" href="assets/imgs/favicon.png">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/common.css">
    <style>
        .main-content {
            display: flex;
            justify-content: center;
            flex-direction: column; 
            align-items: center;
        }
        
        .main-content canvas {
            width: 500px;
            height: 500px;
        }

        .main-content button {
            width: 200px;
            margin-top: 15px;
        }
        #chart-box {
            background-color: #fff; 
        }

        @media only screen and (max-width: 768px){
            canvas {
                width: 90% !important;
                height: auto;
            }
        }
        img[alt="www.000webhost.com"] {
        	display: none !important;
        }
    </style>
</head>
<body>

    <main class="wrapper">
        <?php require 'assets/components/navbar.php'; ?>
        <section class="main-content mt-5">
            <div id="chart-box"><canvas id="myChart"></canvas></div>
            <button id="download-img" class="btn btn-success">Download</button>
        </section>
    </main>

    <!-- Script Files -->
    <script src="https://kit.fontawesome.com/de41999cf3.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/chart.min.js"></script>
    <script src="./assets/js/statistics.js"></script>
</body>
</html>
<?php
}
}
else {
    echo "You seem lost!";
}
?>