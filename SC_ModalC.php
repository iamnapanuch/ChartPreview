    <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Record</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="delete.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">

                        <h4>คุณต้องการลบเร็ดคอร์ดนี้ใช่หรือไม่?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิกการลบ</button>
                        <button type="submit" name="deletedata" class="btn btn-primary">กดเพื่อต้องการลบเร็ดคอร์ดนี้</button>
                        <?php
                        $act = (isset($_GET['act']) ? $_GET['act'] : '');
                        if ($act == 'success') {
                            echo '<script type="text/javascript">
  					swal("", "ลบเร็ดคอร์ดเรียบร้อยแล้ว", "success");
  					</script>';
                        } elseif ($act == 'info') {
                            echo '<script type="text/javascript">
  					swal("", "เกิดข้อผิดพลาดลบเร็ดคอร์ด !!", "info");
  					</script>';
                        } elseif ($act == 'warning') {
                            echo '<script type="text/javascript">
  					swal("", "เกิดข้อผิดพลาดลบเร็ดคอร์ด !!", "warning");
  					</script>';
                        } elseif ($act == 'danger') {
                            echo '<script type="text/javascript">
  					swal("", "เกิดข้อผิดพลาดร้ายแรงลบเร็ดคอร์ด !!!", "error");
  					</script>';
                        }
                        ?>
                    </div>
                </form>

            </div>
        </div>
    </div>