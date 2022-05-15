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
            <td>
                <a class="btn btn-primary " href="/c/documents/CHARTUSER/<?php echo $row['an']; ?>.pdf" target="_blank">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    Preview
                </a>
            </td>
            <!-- <td>
                <a class="btn btn-primary " href="http://192.168.99.20:8880/documents/CHARTUSER/<?php echo $row['an']; ?>.pdf" target="_blank">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    Preview
                </a>
            </td> -->
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
        </tr>
    <?php
    }

    ?>
<?php
}
?>