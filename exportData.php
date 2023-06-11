<?php 
    include 'loginCheck.php';
    if (isset($_SESSION['loginStatus'])) {
        if ($_SESSION['loginStatus'] == true) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Export Data - Dairy Tracker</title>
    <style>
        td {
            border: 1px solid grey;
        }
        table {
            width: 30%;
        }
    </style>
</head>
<body>

<table id="main-table">
    <thead>
        <tr>
            <th>Date</th>
            <th>Quantity</th>
        </tr>
    </thead>
    <tbody>
        <?php

            require 'assets/php/config.php';
            $user_id = $_SESSION['userID'];

            $sql = "SELECT * FROM `dairy_records` WHERE `user_id` = '$user_id' ORDER BY `id` ASC";
            $res = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($res)) {
                ?>
                    <tr>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                    </tr>
                <?php
            }
        ?>
    </tbody>
</table>

<script src="./assets/js/jquery.min.js"></script>
<script src="./assets/js/jquery.table2excel.min.js"></script>
<?php 
    $fileName = $_SESSION['userName']."_".date('d-m-Y');
?>
<script>
    $("#main-table").table2excel({
        exclude: ".excludeThisClass",
        name: "Dairy Records",
        filename: "<?php echo $fileName; ?>.xls",
        //preserveColors: false
});
</script>
</body>
</html>
<?php
}
}
else {
    echo "You seem lost";
}
?>