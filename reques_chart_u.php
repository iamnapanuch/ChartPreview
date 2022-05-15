<?php
session_start();
include 'connection.php';
include 'check_user.php';
?>
<?PHP include 'menu_user.php' ?>
<?PHP include 'head.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="refresh" content="1800;url=logout.php" />
    <br>
    <link rel="stylesheet" href="css/r_c_u.css">
    <br>
    <left>
        <h5>     <a class="A" href="home_admin.php"> Home</a> | Request Chart
            <div class="text-center">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal3">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    ขอดูเวชระเบียน
                </button>
            </div>
            <?php include 'modal/add_an_u.php' ?>
        </h5>
        <div class="mb-4">
        </div>
    </left>
</head>

<body>
    <?php include 'query/r_c_a_q.php' ?>
    <?php include 'modal/SC_ModalB.php' ?>
    <div class="container-fluid">
        <div class="table-responsive">
            <table id="dataTables_filter" class="table">
                <thead class="thead-light">
                    <tr>
                        <th>เลขที่ขอ</th>
                        <th>AN</th>
                        <th>HN</th>
                        <th style='width:15%'>ชื่อผู้ป่วย</th>
                        <th style='width:10%'>Admit</th>
                        <th>Discharge</th>
                        <th style='width:15%'>ชื่อผู้ขอ</th>
                        <th style='width:12%'>วันที่ขอ</th>
                        <th>สถานะ</th>
                        <th>ปุ่ม</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include 'query/r_c_u_f.php' ?>
                    <script type="text/javascript" src="js/r_c_u.js"></script>
                    <script type="text/javascript" src="js/r_c_u2.js"></script>
                </tbody>
            </table>
        </div>
    </div>
    </div>

    <?php include 'footer.php' ?>
    <?php include 'noti_u.php' ?>
</body>


</html>