<?php 
    include 'loginCheck.php';
    if (isset($_SESSION['loginStatus'])) {
        if ($_SESSION['loginStatus'] == true) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard - Dairy Tracker</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link rel="icon" href="assets/imgs/favicon.png">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/dashboard.css">
    <link rel="stylesheet" type="text/css" href="assets/css/common.css">
    <style>
        .wrapper {
            padding: 0px;
        }
        .row {
            padding: 20px;
            padding-top: 0px;
        }
    </style>
</head>
<body>
    <main class="wrapper container-fluid">
        <?php require 'assets/components/navbar.php'; ?>
        <section class="main-content container-fluid">
            <div class="row mt-5 d-flex justify-content-center">
                <div class="col-12 col-lg-4 col-sm-12 col-md-12 form-col">
                    <h3 class="alert alert-info text-center">Add Record</h3>
                    <form class="form">
                        <fieldset class="form-group">
                            <label>Date</label>
                            <input id="date" class="form-control">
                        </fieldset>
                        <fieldset class="form-group">
                            <label>Quantity</label>
                            <input type="text" id="quantity" class="form-control">
                        </fieldset>
                        <fieldset class="form-group">
                            <button class="form-control btn btn-success addRecord"><i class="fas fa-plus"></i> Save</button>
                        </fieldset>
                        <div class="msg"></div>
                    </form>
                </div>
                <div class="col-12 col-lg-8 col-sm-12 col-md-12 table-col">
                    <h3 class="alert alert-info text-center">Date: <span id="date-label"></span></h3>
                    <table class="table table-striped">
                        <thead class="table-dark text-white">
                            <tr>
                                <th>Date</th>
                                <th>Quantity(L)</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="table-body"></tbody>
                    </table>
                </div>
            </div>
        </section>

    </main>
    
    <!-- Begin Modal-->
            <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                  </div>
                  <div class="modal-body">
                    <input hidden type="number" id="delRecID">
                    Are you sure?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="close-modal">Close</button>
                    <button type="button" class="btn btn-danger" id="delRecord">Delete</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Modal-->

    <!-- Script Files -->
    <script src="https://kit.fontawesome.com/de41999cf3.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/dashboard.js"></script>
</body>
</html>
<?php
}
}
else {
    echo "You seem lost!";
}

?>