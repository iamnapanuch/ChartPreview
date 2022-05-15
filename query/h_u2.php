<?php while ($row = mysqli_fetch_array($result)) { ?>
    <tr>
        <td><?php echo $row['datesave']; ?></td>
        <td align="center"><?php echo number_format($row['totol'], 0); ?>คน</td>
    </tr>
<?php
    @$amount_total += $row['totol'];
}
?>
<?php mysqli_close($con); ?>