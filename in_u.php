<?php
include 'connection.php';

if (isset($_POST['add_u'])) {
    $an_u = $_POST['an_u'];
    $user_reques = $_POST['user_reques'];

    $query = "INSERT INTO request_chart (`an_u`,`user_reques`) VALUES ('$an_u','$user_reques')";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        echo "<script>window.location='reques_chart_u.php?act=success';</script>";
        //echo '<script> alert("เพิ่มสำเร็จแล้ว"); </script>';
        //header('Location: S_Chart_DS.php');
    } else {
        echo '<script> alert("ข้อมูลซ้ำ"); </script>';
    }
}
