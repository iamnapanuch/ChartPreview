<form action="update_rq.php" method="POST">


    <!-- Modal -->
    <div class="modal fade" id="myModal4" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" ID="exampleModalLabel">Update Status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text">
                        <div class="form-group">
                            <label></label>
                            <input type="text" name="reques_id" id="reques_id" class="form-control sr-only" placeholder="">
                        </div>
                        <select name="status_id" id="status_id" class="form-select" required>
                            <option value="">กรุณาเลือก</option>
                            <?php foreach ($option3 as $results) { ?>
                                <option value="<?php echo $results["status_id"]; ?>">
                                    <?php echo $results["status_s"]; ?>
                                </option>
                            <?php } ?>
                        </select>
                        <!-- <input type="submit" name="update" value="submit"> -->

</form>
</div>
</div>
<div class="modal-footer">
    <button type="submit" name="update_rq" class="btn btn-primary">Update Data</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <?php
    $act = (isset($_GET['act']) ? $_GET['act'] : '');
    if ($act == 'success') {
        echo '<script type="text/javascript">
  					swal("", "อัพเดทสถานะเรียบร้อยแล้ว", "success");
  					</script>';
    } elseif ($act == 'info') {
        echo '<script type="text/javascript">
  					swal("", "เกิดข้อผิดพลาด !!", "info");
  					</script>';
    } elseif ($act == 'warning') {
        echo '<script type="text/javascript">
  					swal("", "เกิดข้อผิดพลาด !!", "warning");
  					</script>';
    } elseif ($act == 'danger') {
        echo '<script type="text/javascript">
  					swal("", "เกิดข้อผิดพลาดร้ายแรง !!!", "error");
  					</script>';
    }
    ?>
</div>
</div>

</div>
</div>

</div>
</form>