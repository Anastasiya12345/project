<html> 
<head> 
<Title>Страхование</Title> 
<style type="text/css"> 
body { background-color: 
#fff; border-top: solid 10px #000; 
color: #333; font-size: .85em; 
margin: 20; padding: 20; 
font-family: "Segoe UI", 
Verdana, Helvetica, Sans-Serif; 
} 
h1, h2, h3,{ color: #000; 
margin-bottom: 0; padding-bottom: 0; } 
h1 { font-size: 2em; } 
h2 { font-size: 1.75em; } 
h3 { font-size: 1.2em; } 
table { margin-top: 0.75em; } 
th { font-size: 1.2em; 
text-align: left; border: none; padding-left: 0; } 
td { padding: 0.25em 2em 0.25em 0em; 
border: 0 none; } 
</style> 
</head> 
<body> 
<h1>Вход</h1> 
<form method="post" action="vhod.php" 
enctype="multipart/form-data" > 
Номер телефона <input type="text" 
name="nomtel" id="nomtel"/></br> 
Пароль <input type="text" 
name="password" id="password"/></br>
<input type="submit" 
name="submit" value="Войти"/></br>
<a href="https://anastasiya.azurewebsites.net/index.php">Регестрация</a>
<?php 
try { $conn = new PDO("sqlsrv:server = tcp:karl.database.windows.net,1433; Database = db", "Anastasiya", "L4x78tm2p1");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (PDOException $e) { 
print("Error connecting to SQL Server."); 
die(print_r($e)); 
} 
if (isset($_POST['submit'])) {
$nomtel = $_POST['nomtel'];
$password = $_POST['password'];
$sql_select = "SELECT * FROM Enter where (tel = '$nomtel' And password = '$password')";
$stmt = $conn->query($sql_select);
if ($stmt->fetchColumn() > 0){
foreach ($n as $row) {
session_start();
$_SESSION['name'] = $row["Name"];
$_SESSION['secondName'] = $row["secondName"];
$_SESSION['nomtel'] = $nomtel;
echo "<h3>Вы вошли</h3>"
}
}
}
  ?>
</form> 
</body> 
</html>
