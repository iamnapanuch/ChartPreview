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
    <link rel="stylesheet" href="css/r_c_a.css">

    <br>

    <left>
        <h5>     <a class="A" href="home_admin.php"> Home</a> | Reques Chart
        </h5>
        <div class="mb-4">
        </div>
    </left>
</head>

<body>
    <?php include 'query/r_c_a_q.php' ?>
    <?php include 'modal/SC_ModalB.php' ?>
    <?php include 'modal/SC_ModalC.php' ?>
    <div class=" container-fluid">
        <div class="table-responsive">
            <table id="dataTables_filter" class="table">
                <thead class="thead-light">
                    <tr>
                        <th>เลขที่ขอ</th>
                        <th>AN</th>
                        <th>HN</th>
                        <th style='width:20%'>ชื่อผู้ป่วย</th>
                        <th style='width:12%'>Admit</th>
                        <th>Discharge</th>
                        <th style='width:20%'>ชื่อผู้ขอ</th>
                        <th style='width:12%'>วันที่ขอ</th>
                        <th style='width:12%'>สถานะ</th>
                        <th style='width:10%'>ดูเวชระเบียน</th>
                        <th>แก้ไขสถานะ</th>
                        <th>ลบเร็ดคอร์ด</th>
                    </tr>
                </thead>
                <tbody>

                    <?php include 'query/r_c_a_f.php' ?>

                    <script type="text/javascript" src="js/r_c_a_js.js"></script>
                    <script type="text/javascript" src="js/r_c_a_js2.js"></script>
                    <script type="text/javascript" src="js/r_c_a_js3.js"></script>
                </tbody>
            </table>


        </div>
    </div>
    </div>
    <?php include 'footer.php' ?>
    <?php include 'noti.php' ?>

</body>


</html>