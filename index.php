<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
<Title>Страховка</Title>
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
    <h1>Оформление</h1>
    <p>Введите свои данные и перейдите по кнопке<strong> "Далее" </strong> .</p>
<form method="post" action="oform.php">
  Фамилия  <input type="text" name="familiya" id="familiya"/></br>
  Имя  <input type="text" name="imya" id="name"/></br>
  Отчество  <input type="text" name="otchestvo" id="otchestvo"/></br>
  Номер телефона  <input type="text" name="tel" id="tel"/></br>

  <input type="submit" name="submit" value="Далее"/>
</form>
</body>
</html>

<?php
try { $conn = new PDO("sqlsrv:server = tcp:karl.database.windows.net,1433; Database = basa", "Anastasiya", "L4x78tm2p1"); 
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
  if(isset($_POST["submit"])){
if($_POST["familiya"] =="" || $_POST["imya"]=="" || $_POST["otchestvo"] ==""){echo "Введите фамилию, имя и отчество";}
else{
try {
  $sql_select = "SELECT * FROM registration_tbl";
$stmt = $conn->query($sql_select);
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
}
?>
