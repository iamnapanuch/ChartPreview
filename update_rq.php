<?php
include('connection.php');

if (isset($_POST['update_rq'])) {
    $reques_id = $_POST['reques_id'];
    $status_id = $_POST['status_id'];





    $sql = "UPDATE request_chart SET  status_id='$status_id'
         WHERE reques_id='$reques_id'";
    //  $result = mysqli_query($con,$sql);
    $result = mysqli_query($con, $sql) or die("Error: " . mysqli_error($con));

    if ($result) {
        //echo '<script> alert("Data update"); </script>';
        //  header("Location:manager_user.php");

        // session_destroy();
        echo "<script>window.location='reques_chart_a.php?act=success';</script>";
    } else {
        //echo '<script> alert("Data Not Updated"); </script>';
        //echo "<script>alert('แก้ไขไม่สำเร็จ');window.location='S_Chart_admin_DS.php';</script>";
        echo "<script>window.location='reques_chart_a.php?act=warning';</script>";
    }
}
