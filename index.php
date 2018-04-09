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
<h1>Оформление заявки</h1> 
<p>Введите свои данные и нажмите <strong> "Далее" </strong> .</p>
<form method="post" action="oform.php"> 
enctype="multipart/form-data" ></br> 
Фамилия <input type="text" 
name="familiya" id="familiya"/></br> 
Имя <input type="text" 
name="imya" id="imya"/></br> 
Отчество <input type="text" 
name="otchestvo" id="otchestvo"/></br> 
Номер телефона <input type="text" 
name="tel" id="tel"/></br> 
<input type="submit" 
name="submit" value="Далее"/></br> 
<?php 
try { $conn = new PDO("sqlsrv:server = tcp:karl.database.windows.net,1433; Database = basa", "Anastasiya", "L4x78tm2p1"); 
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
} 
catch (PDOException $e) { 
print("Ошибка подключения к SQL Server."); 
die(print_r($e)); 
} 
$sql_select = "SELECT * FROM klient_tbl";
$stmt = $conn->query($sql_select);

  if(isset($_POST["submit"])) {
    if ($stmt->fetchColumn() > 0) {
      foreach ($n as $row) {
        session_start();
        $_SESSION['familiya'] = $row["familiya"];
        $_SESSION['imya'] = $row["imya"];
        $_SESSION['otchestvo'] = $row["otchestvo"];
        $_SESSION['tel'] = $row["tel"];
        }
    }
  }
?> 
</form> 
</body> 
</html>
