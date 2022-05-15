 <?php
    while ($row = mysqli_fetch_array($result)) {
        if ($row['accept'] == 'สแกนแล้ว') {
    ?>
         <tr class="cusrow">
             <td><?= $row['an']; ?></td>
             <td><?= $row['hn']; ?></td>
             <td><?= $row['hn_name']; ?></td>
             <td>
                 <div class='a'><?= $row['regdate']; ?>
             </td>
             <td>
                 <div class='n'><?= $row['dchdate']; ?>
             </td>
             <td>
                 <div class='a'><?= $row['accept']; ?>
             </td>

             <td>
                 <button type="button" class="btn btn-success btn-ms editbtn" data-toggle="modal" data-target="#myModal2">Edit Status
                     <i class="fa fa-edit" aria-hidden="true"></i></button>
             </td>

             <td> <a class="btn btn-primary " href="/c/documents/CHARTSCAN/<?php echo $row['an']; ?>.pdf" target="_blank">
                     <i class="fa fa-search" aria-hidden="true"></i>
                     Preview
                 </a></td>
             <!-- <td> <a class="btn btn-primary " href="http://192.168.99.20:8880/documents/CHARTSCAN/<?php echo $row['an']; ?>.pdf" target="_blank"> เปิดผ่านเซิฟเวอร์หรือข้ามเลขipได้เลย
                     <i class="fa fa-search" aria-hidden="true"></i>
                     Preview
                 </a></td> -->

         </tr>
     <?php
        }



        if ($row['accept'] == 'ยังไม่สแกน') {
        ?>
         <tr class="cusrow">
             <td><?= $row['an']; ?></td>
             <td><?= $row['hn']; ?></td>
             <td><?= $row['hn_name']; ?></td>
             <td>
                 <div class='a'><?= $row['regdate']; ?>
             </td>
             <td>
                 <div class='n'><?= $row['dchdate']; ?>
             </td>
             <td>
                 <div class='n'><?= $row['accept']; ?>
             </td>

             <td>
                 <button type="button" class="btn btn-success btn-ms editbtn" data-toggle="modal" data-target="#myModal2">Edit Status
                     <i class="fa fa-edit" aria-hidden="true"></i></button>
             </td>

             <td> </td>

         </tr>
     <?php
        }


        ?>
 <?php
    }
    ?>