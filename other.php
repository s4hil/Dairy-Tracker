<?php 
    include 'loginCheck.php';
    if (isset($_SESSION['loginStatus'])) {
        if ($_SESSION['loginStatus'] == true) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Other - Dairy Tracker</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link rel="icon" href="assets/imgs/favicon.png">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/other.css">
    <link rel="stylesheet" type="text/css" href="assets/css/common.css">
    <style>
        .row {
            margin: 0;
        }
    </style>
</head>
<body>

    <main class="wrapper">
        <?php require 'assets/components/navbar.php'; ?>

        <section class="main-content">
            <div class="mt-5 row container-fluid d-flex justify-content-center">
                <div class="col-12 col-sm-12 col-lg-4 col-md-4">
                    <h3 class="alert alert-success text-center">Add Item</h3>
                    <form class="form">
                        <fieldset class="form-group">
                            <label>Date</label>
                            <input type="date" id="date" class="form-control">
                        </fieldset>
                        <fieldset class="form-group">
                            <label>Item Name</label>
                            <input type="text" id="item" class="form-control">
                        </fieldset>
                        <fieldset class="form-group">
                            <label>Item Quantity</label>
                            <input type="text" id="item-quantity" class="form-control">
                        </fieldset>
                        <fieldset class="form-group">
                            <button class="btn btn-primary addItem form-control">Add Item</button>
                        </fieldset>
                        <div class="msg"></div>
                    </form>
                </div>
                <div class="col-12 col-sm-12 col-lg-8 col-md-8">
                    <h3 class="alert alert-success text-center">Purchased Items</h3>
                    <div>
                        <form class="form mb-3">
                            <fieldset class="form-group d-flex">
                                <label>Select Month</label>
                            </fieldset>
                            <fieldset class="d-flex">
                                <select class="form-control" id="month">
                                    <option value="0">Select</option>
                                    <option value="1">January</option>
                                    <option value="2">Febuary</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                                <button class="btn btn-success ml-3" id="loadTable">Load</button>
                            </fieldset>
                        </form>
                    </div>
                    <table class="table table-striped">
                        <thead class="table-dark text-white">
                            <tr>
                                <th>Date</th>
                                <th>Item</th>
                                <th>Quantity</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="table-body"></tbody>
                    </table>
                </div>
            </div>
        </section>
        
    </main>

    <!-- Script Files -->
    <script src="https://kit.fontawesome.com/de41999cf3.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/other.js"></script>
</body>
</html>
<?php
}
}
else {
    echo "You seem lost";
}
?>