<?php

include("dbcon.php");

$vd = $_POST['visitDate']; 
$vt = $_POST['visitTime']; 
$di = (int)$_POST['doctorid']; 
$st = (int)$_POST['patientid']; 
$et = $_POST['cost'];

$sql = "INSERT INTO visit (visit_date,visit_time,doctor_id,patient_id,cost) values ('$vd','$vt','$di','$st','$et')";

echo $sql;

if (mysqli_query($conn, $sql)) {
  echo "<br>New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn); 
?>

