<html> 
<head> 
<Title>Восстановление пароля</Title> 
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
th { font-size: 1.2em; 
text-align: left; border: none; padding-left: 0; } 
td { padding: 0.25em 2em 0.25em 0em; 
border: 0 none; } 
</style> 
</head> 
<body> 
<h1> Восстановление пароля </h1> 
<p>Введите Email и нажмите кнопку <strong> Готово </strong>.</p> 
<form method="post" action="2.php" 
enctype="multipart/form-data" >
Email <input type="text" 
name="email" id="email"/></br> 
<input type = "submit" value = "Проверить" name = "sub" id = "sub">
<?php 
try { $conn = new PDO("sqlsrv:server = tcp:karl.database.windows.net,1433; Database = db", "Anastasiya", "L4x78tm2p1");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
  
 $email = $_POST['email'];
  
  if(!empty($_POST)) { 
try { 
    //$sql_select = "SELECT email FROM registration_tbl where email = '$email' ";
  //$sql_select = "Select vopros FROM registration_tbl where email = '$email' ";
$stmt = $conn->query($sql_select);
$registrants = $stmt->fetchAll();
       if(count($registrants) > 0) {
  echo "1";
	      foreach($registrants as $registrant){
  echo "<p> 123123 </p>";
}
}
}  
  
catch (PDOException $e) { 
print("Error connecting to SQL Server."); 
die(print_r($e)); 
}
  
?>
