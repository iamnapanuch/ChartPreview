<!-- Modal -->
<div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">ค้นหาชาร์จ</h4>
            </div>


            <form action="in_u.php" method="POST">

                <div class="modal-body">
                    <div class="form-group">
                        <label> </label>
                        <input type="text" name="an_u" class="form-control" placeholder="กรอกเพื่อค้นหาAN">
                    </div>




                    <div class="form-group">
                        <label>ชื่อผู้ขอ</label>
                        <input type="text" name="user_reques" class="form-control" placeholder="กรอกชื่อนามสกุลผู้ขอ" required>
                    </div>





                </div>
                <div class="modal-footer">
                    <button type="submit" name="add_u" class="btn btn-primary">Add Data</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>