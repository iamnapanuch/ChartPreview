<?php
include('connection.php');

if (isset($_POST['update'])) {
    $an_s = $_POST['an_s'];
    $status_id = $_POST['status_id'];





    $sql = "UPDATE status_chart SET  status_id='$status_id'
         WHERE an_s='$an_s'";
    //  $result = mysqli_query($con,$sql);
    $result = mysqli_query($con, $sql) or die("Error: " . mysqli_error($con));

    if ($result) {
        /* echo "<script>";
        echo "alert(\"อัพเดทสถานะแล้ว\");";
        echo "window.history.back()";
        echo "</script>";*/
        //header("Location:S_Chart_admin_DS.php");
        // session_destroy();
        echo "<script>window.location='S_Chart_admin_DS.php?act=success';</script>";
    } else {
        //echo '<script> alert("Data Not Updated"); </script>';
        echo "<script>window.location='S_Chart_admin_DS.php?act=warning';</script>";
        /*echo "<script>";
        echo "alert(\"อัพเดทสถานะผิดพลาด\");";
        echo "window.history.back()";
        echo "</script>";*/
    }
}
