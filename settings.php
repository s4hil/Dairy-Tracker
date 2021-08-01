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
        img[alt="www.000webhost.com"] {
        	display: none !important;
        }
    </style>
</head>
<body>

    <main class="wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <header class="navbar-brand">
                    <span>Dairy</span>
                    <span class="bg-danger">Tracker</span>
                </header>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.html"> <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="data.html"><i class="fas fa-database"></i> Data</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="statistics.html"><i class="fas fa-chart-line"></i> Statistics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="other.html"><i class="fas fa-box-open"></i> Other</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="settings.html"><i class="fas fa-cogs"></i> Settings</a>
                        </li>
                    </ul>
                </div>
          </div>
        </nav>

        <section class="main-content">
            <div class="pt-5 row container-fluid d-flex justify-content-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <h3 class="text-center alert alert-success">Settings</h3>
                    <form class="form">
                        <fieldset class="form-group">
                            <label>Price Per Litre</label>
                            <input type="text" id="price" class="form-control">
                        </fieldset>
                        <button class="form-control btn btn-primary" id="updatePrice">Update</button>
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
