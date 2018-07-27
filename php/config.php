<?php
		$serverName = "studentserv.database.windows.net";
$connectionOptions = array(
    "Database" => "studentsdb",
    "Uid" => "ravdeep",
    "PWD" => "Like@1234"
);
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);
				
				
?>
				
