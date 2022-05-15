
<?php

include 'connection.php';


$sql = "select status_id FROM request_chart
where status_id = '3'
";
$result = $con->query($sql);

echo $result->num_rows;

$con->close();
?>