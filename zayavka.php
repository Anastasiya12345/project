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
<h1>Оформление заявки на страховку жизни</h1> 
<form method="post" enctype="multipart/form-data" > 
Серия и номер паспорта <input type="text" 
name="pas" id="pas"/></br> 
Срок страховой службы <select name="srok">
<option value ="1">1 год</option>
<option value ="5">5 лет</option>
<option value ="10">10 лет</option>
</select></br>
Сумма страховки <select name="sum">
name="pasport" id="pasport"/></br>
<option value ="100000">100000</option>
<option value ="500000">500000</option>
</select></br>
<input type="submit" 
name="submit" value="Рассчитать"
Ежегодный платеж <input type="text" 
name="plata" id="plata"/></br>
Способ оплаты <select name="sposobopl">
<option value ="Wisa">Карта Wisa</option>
<option value ="MIR">Карта МИР</option>
</select></br>
Номер карты <input type="text" 
name="nomkar" id="nomkar"/></br>
<input type="submit" 
name="submit1" value="Оформить"
       <?php
       /*
try { $conn = new PDO("sqlsrv:server = tcp:karl.database.windows.net,1433; Database = basa", "Anastasiya", "L4x78tm2p1");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
print("Ошибка подключения к SQL Server.");
die(print_r($e));
}
session_start();
if (!isset($_SESSION['nomtel'])) {
$_SESSION['msg'] = "You must log in first";
header('location: vhod.php');
} 
//Проверка заполнения при ножатии кнопки. Если поля пустые ничего в БД не записывается.
if(!empty($_POST)) {
try {
$imya = $_POST['imya'];
$familiya = $_POST['familiya'];
$otchestvo = $_POST['otchestvo'];
$pas = $_POST['pas'];
$nomtel = $_POST['nomtel'];
$plata = $_POST['plata'];
$sposobopl = $_POST['sposobopl'];
//Регистрация
// Insert data
//Запись в БД
   $sql_insert =
"INSERT INTO registration_tbl (imya, familiya, otchestvo, pas, nomtel, plata, sposobopl)
VALUES (?,?,?,?,?,?,?)";
$stmt = $conn->prepare($sql_insert);
$stmt->bindValue(1, $imya);
$stmt->bindValue(2, $familiya); 
  $stmt->bindValue(3, $otchestvo); 
  $stmt->bindValue(4, $pas); 
  $stmt->bindValue(5, $nomtel); 
  $stmt->bindValue(6, $plata); 
  $stmt->bindValue(7, $sposobopl); 
    $stmt->execute(); 
}
//Вывод ошибку
catch(Exception $e) {
die(var_dump($e));
}
   echo "<h3>Ваша заявкаоформлена!</h3>"; 
}
//Вывод таблицы
$sql_select = "SELECT * FROM registration_tbl";
$stmt = $conn->query($sql_select);
$registrants = $stmt->fetchAll();
//Условие. Если количество записей больше 0, тогда выводится записи полей. В противном случае выводится ошибка о регестрации.
if(count($registrants) > 0) {
echo "<h2>В БД внесено</h2>";
echo "<table>";
echo "<tr><th>imya</th>";
echo "<th>familiya</th>";
  echo "<th>otchestvo</th>";
  echo "<th>pas</th>";
  echo "<th>nomtel</th>";
  echo "<th>plata</th>";
  echo "<th>sposobopl</th>";
  
foreach($registrants as $registrant) {
echo "<tr><td>".$registrant['imya']."</td>";
echo "<td>".$registrant['password']."</td>";
  echo "<td>".$registrant['otchestvo']."</td>";
  echo "<td>".$registrant['pas']."</td>";
  echo "<td>".$registrant['nomtel']."</td>";
  echo "<td>".$registrant['plata']."</td>";
  echo "<td>".$registrant['sposobopl']."</td>";
}
echo "</table>";
} else 
{
echo "<h3>Ваша заявка не оформлена</h3>";
}*/
?>
</form> 
</body> 
</html>
