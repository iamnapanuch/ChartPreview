<?php
include('connection.php');

if (isset($_POST['deletedata'])) {
    $id = $_POST['delete_id'];


    $sql = "DELETE FROM request_chart WHERE reques_id='$id'";
    $result = mysqli_query($con, $sql) or die("Error: " . mysqli_error($con));

    if ($result) {
        //echo '<script> alert("ลบเร็ดคอร์ดแล้ว"); </script>';
        echo "<script>window.location='reques_chart_a.php?act=success';</script>";
        //header("Location:reques_chart_a.php");
    } else {
        //echo '<script> alert("ข้อผิดพลาดในการลบ"); </script>';
        echo "<script>window.location='reques_chart_a.php?act=danger';</script>";
    }
}
