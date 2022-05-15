<?php
include 'connection.php';
include 'check_admin.php';
include 'menu_admin.php';
include 'head.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home_A</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php include 'query/h_a.php' ?>
                <br>
                <br>
                <br>
                <h3 align="center">สถิติการดูเวชระเบียน</h3>
                <?php include 'js/h_a_j.php' ?>
                </p>
                <div class="col-sm-auto text-center">
                    <h3>ตารางสรุป</h3>
                    <table class="table table-striped" border="1" cellpadding="0" cellspacing="0" align="center">
                        <thead>
                            <tr class="table-primary">
                                <th width="0%">เดือน/ปี</th>
                                <th <center>จำนวนคนดูชารจ์</center>
                                </th>
                            </tr>
                        </thead>
                        <?php include 'query/h_a2.php' ?>
                        <tr class="table-danger">
                            <td align="center">รวม</td>
                            <td align="center"><b>
                                    <?php echo number_format($amount_total, 0); ?>คน</b></td>
                            </td>
                        </tr>
                    </table>
                    <?php include 'footer.php' ?>
                    <?php include 'noti.php' ?>
                </div>
            </div>
        </div>
    </div>

</body>

</html>