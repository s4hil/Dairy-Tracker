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
    <link rel="stylesheet" type="text/css" href="assets/css/data.css">
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
            <div class="row d-flex justify-content-center mt-5">
                <div class="col-12 col-sm-12 col-lg-4 col-md-4 form-col">
                    <h3 class="alert alert-success text-center">Show Data</h3>
                    <form class="form">
                        <fieldset class="form-group">
                            <label>Select Month</label>
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
                        </fieldset>
                        <fieldset class="form-group">
                            <button class="form-control btn btn-primary load">Load Data</button>
                        </fieldset>
                        <fieldset class="form-group">
                            <button class="form-control btn btn-success genSum">Generate Summary</button>
                        </fieldset>
                    </form>
                </div>
                <div class="col-12 col-sm-12 col-lg-8 col-md-4 table-col">
                    <br><br>
                    <h3 class="alert alert-success text-center">Data Table</h3>
                    <a href="exportData.php" target="_blank" class="btn btn-warning mb-2">Export All As Excel</a>
                    <table class="table table-striped" id="main-table">
                        <thead class="table-dark text-white">
                            <tr>
                                <th>S.no</th>
                                <th>Date</th>
                                <th>Quantity(L)</th>
                            </tr>
                        </thead>
                        <tbody id="table-body">
                            <tr>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

    </main>


    <!-- Begin Modal-->
    <div class="modal fade" id="summary-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Summary</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            </button>
          </div>
            <div class="modal-body">
                <h4 class="alert alert-info" id="monthYear"></h4>
                <span class="badge badge-success">Sold Items</span>
                    <div id="sold-items"></div>
                    <div id="error-1"></div>
            
                <span class="badge badge-success">Bought Items</span>    
                    <div id="purchased-items"></div>
                    <div id="error-2"></div>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" id="close-modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End Modal-->


    <!-- Script Files -->
    <script src="https://kit.fontawesome.com/de41999cf3.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/jquery.table2excel.min.js"></script>
    <script src="./assets/js/data.js"></script>
</body>
</html>
<?php
}
}
else {
    echo "You seem lost!";
}
?>