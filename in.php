<?php
include 'connection.php';

if (isset($_POST['add'])) {
    $an_s = $_POST['an_s'];

    $query = "INSERT INTO status_chart (`an_s`) VALUES ('$an_s')";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        //echo "<script>";
        //echo "alert(\" เพิ่มข้อมูลสำเร็จ\");";
        //echo "window.history.back()";
        //echo "</script>";
        //header('Location: S_Chart_admin_DS.php');
        echo "<script>window.location='S_Chart_admin_DS.php?act=success';</script>";
    } else {

        echo "<script>";
        echo "alert(\" ข้อมูลซ้ำ\");";
        echo "window.history.back()";
        echo "</script>";
    }
}
