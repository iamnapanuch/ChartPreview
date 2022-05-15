  <?php
  $query = " SELECT log_count, SUM(log_count) as totol, DATE_FORMAT(date_reques, '%M/%Y') as datesave 
            FROM request_chart
						WHERE date_reques >= '2022-01-01 00:00:00'
                        GROUP BY DATE_FORMAT(date_reques, '%M%')
            ORDER BY DATE_FORMAT(date_reques, '%D-%M-%Y') desc

            ";

  $result = mysqli_query($con, $query);
  $resultchart = mysqli_query($con, $query);
  $datesave = array();
  $totol = array();
  while ($rs = mysqli_fetch_array($resultchart)) {
    $datesave[] = "\"" . $rs['datesave'] . "\"";
    $totol[] = "\"" . $rs['totol'] . "\"";
  }
  $datesave = implode(",", $datesave);
  $totol = implode(",", $totol);

  ?>