<?php

//getting the data from the data base
$conn = mysqli_connect("numero.database.windows.net", "numero", "Alpha@123$", "AN_TEMP");

//getting the data from the employee table
$result = mysqli_query($conn, "SELECT * FROM AN_TEMP");

//storing it the array 
$data = array();
while ($row = mysqli_fetch_object($result))
{
    array_push($data, $row);
}

echo json_encode($data);
exit();