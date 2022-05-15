
<?php

include 'connection.php';


$sql = "SELECT  an_u
FROM request_chart
WHERE date_reques >= '2022-03-23 00:00:00'";
$result = $con->query($sql);

echo $result->num_rows;

$con->close();
?>