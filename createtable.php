<?php 
try { 
$conn = new PDO("sqlsrv:server = tcp:karl.database.windows.net,1433; Database = basa", "Anastasiya", "L4x78tm2p1");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "CREATE TABLE registration_tbl( 
id INT NOT NULL IDENTITY(1,1)
PRIMARY KEY(id),
familiya VARCHAR(30), 
imya VARCHAR(30), 
otchestvo VARCHAR(30),
password VARCHAR(30),
tel VARCHAR(11),
srok INT(1), 
sum DECIMAL(15,2)
nompas VARCHAR(6), 
serpas VARCHAR(4), 
plata VARCHAR(6), 
sposobopl VARCHAR(4),
nomkar VARCHAR(16),
date DATE)"; 
$conn->query($sql); 
  
echo "<h3>Таблица создана!</h3>";
} 
catch (PDOException $e) {
    print("Ошибка подключения к SQL Server.");
    die(print_r($e));
}
?>
