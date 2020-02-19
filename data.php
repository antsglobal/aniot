<?php
    $serverName = "numero.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "numero", // update me
        "Uid" => "numero", // update me
        "PWD" => "Alpha@123$" // update me
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    echo("Connection successfull");
    $tsql= "SELECT * FROM ANIOT_TEMP";
    $getResults= sqlsrv_query($conn, $tsql);
    echo ("Reading data from table" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo ($row['CategoryName'] . " " . $row['ProductName'] . PHP_EOL);
    }
    sqlsrv_free_stmt($getResults);
?>
