 <?php
    while ($row = mysqli_fetch_array($result)) {
        if ($row['status_name'] == 'ขอดูเวชระเบียน') {
    ?>
         <tr class="cusrow">
             <td><?= $row['reques_id']; ?></td>
             <td><?= $row['an']; ?></td>
             <td><?= $row['hn']; ?></td>
             <td><?= $row['hn_name']; ?></td>
             <td>
                 <div class='n'><?= $row['regdate']; ?>
             </td>
             <td>
                 <div class='sf'><?= $row['dchdate']; ?>
             </td>
             <td><?= $row['user_reques']; ?></td>
             <td><?= $row['date_reques']; ?></td>
             <td>
                 <div class='r'><?= $row['status_name']; ?>
             </td>


             <td> </td>
             <td>
                 <button type="button" class="btn btn-success btn-ms editbtn2" data-toggle="modal" data-target="#myModal4">
                     <i class="fa fa-edit" aria-hidden="true"></i>
                     Edit Status</button>
             </td>
             <td><button type="button" class="btn btn-danger  btn-ms deletebtn" data-toggle="modal" data-target="#myModal5">
                     <i class="fa fa-trash" aria-hidden="true"></i>
                     Delete Row</button></td>
         </tr>
     <?php
        }


        if ($row['status_name'] == 'อนุญาติ') {
        ?>
         <tr class="cusrow">
             <td><?= $row['reques_id']; ?></td>
             <td><?= $row['an']; ?></td>
             <td><?= $row['hn']; ?></td>
             <td><?= $row['hn_name']; ?></td>
             <td>
                 <div class='n'><?= $row['regdate']; ?>
             </td>
             <td>
                 <div class='sf'><?= $row['dchdate']; ?>
             </td>
             <td><?= $row['user_reques']; ?></td>
             <td><?= $row['date_reques']; ?></td>
             <td>
                 <div class='a'><?= $row['status_name']; ?>
             </td>
             <td> <a class="btn btn-primary " href="/c/documents/CHARTSCAN/<?php echo $row['an']; ?>.pdf" target="_blank">
                     <i class="fa fa-search" aria-hidden="true"></i>
                     Preview
                 </a></td>

                 <!-- <td> <a class="btn btn-primary " href="http://192.168.99.20:8880/documents/CHARTSCAN/<?php echo $row['an']; ?>.pdf" target="_blank"> เปิดผ่านเซิฟเวอร์หรือข้ามเลขipได้เลย
                     <i class="fa fa-search" aria-hidden="true"></i>
                     Preview
                 </a></td> -->
             <td>
                 <button type="button" class="btn btn-success btn-ms editbtn2" data-toggle="modal" data-target="#myModal4">
                     <i class="fa fa-edit" aria-hidden="true"></i>
                     Edit Status
                 </button>
             </td>

             <td><button type="button" class="btn btn-danger  btn-ms deletebtn" data-toggle="modal" data-target="#myModal5">
                     <i class="fa fa-trash" aria-hidden="true"></i>
                     Delete Row</button></td>
         </tr>
     <?php
        }

        if ($row['status_name'] == 'ไม่อนุญาติ') {
        ?>
         <tr class="cusrow">
             <td><?= $row['reques_id']; ?></td>
             <td><?= $row['an']; ?></td>
             <td><?= $row['hn']; ?></td>
             <td><?= $row['hn_name']; ?></td>
             <td>
                 <div class='n'><?= $row['regdate']; ?>
             </td>
             <td>
                 <div class='sf'><?= $row['dchdate']; ?>
             </td>
             <td><?= $row['user_reques']; ?></td>
             <td><?= $row['date_reques']; ?></td>
             <td>
                 <div class='n'><?= $row['status_name']; ?>
             </td>

             <td> </td>
             <td>
                 <button type="button" class="btn btn-success btn-ms editbtn2" data-toggle="modal" data-target="#myModal4">
                     <i class="fa fa-edit" aria-hidden="true"></i>
                     Edit Status</button>
             </td>

             <td><button type="button" class="btn btn-danger  btn-ms deletebtn" data-toggle="modal" data-target="#myModal5">
                     <i class="fa fa-trash" aria-hidden="true"></i>
                     Delete Row</button></td>

         </tr>
     <?php
        }

        ?>
 <?php
    }
    ?>