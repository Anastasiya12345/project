// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:karlovich.database.windows.net,1433; Database = БазаДанных", "Nastya", "{your_password_here}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "Nastya@karlovich", "pwd" => "{your_password_here}", "Database" => "БазаДанных", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:karlovich.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
