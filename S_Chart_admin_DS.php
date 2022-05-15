<?php include 'connection.php';
include 'check_admin.php';
?>
<?PHP include 'menu_admin.php' ?>
<?PHP include 'head.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="refresh" content="1800;url=logout.php" />
    <br>
    <link rel="stylesheet" href="css/s_c_a_ds.css">
    <br>

    <left>
        <h5>     <a class="A" href="home_admin.php"> Home</a> | System Chart
            <button type="button" class="btn btn-info btn-ms top-0 start-0" data-toggle="modal" data-target="#myModal">Add Chart</button>
            <?php include 'modal/add_an.php' ?>
        </h5>
    </left>
</head>

<body>
    <?php include 'query/s_c_a_q.php' ?>
    <?php include 'modal/SC_ModalA.php' ?>
    <div class=" container">
        <div class="table-responsive">
            <table id="dataTables_filter" class="table">
                <thead class="thead-light">
                    <tr>
                        <th>AN</th>
                        <th>HN</th>
                        <th style='width:20%'>ชื่อผู้ป่วย</th>
                        <th>Admit</th>
                        <th style='width:12%'>Discharge</th>
                        <th>Status</th>
                        <th>Update</th>
                        <th>Read</th>
                    </tr>
                </thead>
                <tbody <?php include 'query/s_c_a_f.php' ?> <script type="text/javascript" src="js/s_c_a.js">
                    </script>
                    <script type="text/javascript" src="js/s_c_a2.js"></script>
                    <?php include 'noti.php' ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php include 'footer.php' ?>
</body>


</html>