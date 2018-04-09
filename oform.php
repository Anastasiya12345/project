<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8"><Title>Страхование</Title>
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
 <h1>Оформление страхования жизни</h1>
 <p><i>Заполните анкету.</i></p>
<form method="post" action="oform.php">
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
<input type="submit" name="ras" value="Рассчитать"/>
<?php
if( isset($_POST['ras']) ) {
      $a = (int) $_POST['srok'];
    $b = (int) $_POST['sum'];
        $d = ($a*$b/100);
           
        echo "Сумма ежегодного платежа = $d";
      }
?></br>
</br>
Способ оплаты <select name="sposobopl">
<option value ="Wisa">Карта Wisa</option>
<option value ="MIR">Карта МИР</option>
</select></br>
Номер карты <input type="text" name="nomkar" id="nomkar"/></br>
<input type="submit" name="oform" value="Оформить"/>
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

if (isset($_POST['oform'])) {

 $familiya = $_POST['familiya'];
 $imya = $_POST['imya'];
 $otchestvo = $_POST['otchestvo'];
 $tel = $_POST['tel'];
 
 $pas = $_POST['pas'];
 $srok = $_POST['srok'];
 $sum = $_POST['sum'];
 $sposobopl = $_POST['sposobopl'];
 $nomkar = $_POST['nomkar'];
 
   // Insert data
  $sql_insert = "INSERT INTO registration_tbl (familiya,imya,otchestvo,tel,pas,srok,sum,sposobopl,nomkar)
  VALUES (?,?,?,?,?,?,?,?,?)";
 $stmt = $conn->prepare($sql_insert);
 $stmt->bindValue(1, $familiya);
 $stmt->bindValue(2, $imya);
 $stmt->bindValue(3, $otchestvo);
 $stmt->bindValue(4, $tel);
 $stmt->bindValue(5, $pas);
 $stmt->bindValue(6, $srok);
 $stmt->bindValue(7, $sum);
 $stmt->bindValue(8, $sposobopl);
 $stmt->bindValue(9, $nomkar);
 $stmt->execute();
 }
$sql_select = "SELECT * FROM registration_tbl"; 
$stmt = $conn->query($sql_select); 
$registrants = $stmt->fetchAll();  
if(count($registrants) > 0) { 
echo "<h2>Заявки</h2>"; 
echo "<table>"; 
echo "<th>familiya</th>"; 
echo "<th>imya</th>"; 
echo "<th>otchestvo</th>";
echo "<th>tel</th>"; 
echo "<th>pas</th>";
echo "<th>sum</th>";
echo "<th>srok</th>";
echo "<th>sposobopl</th>";
echo "<th>nomkar</th>";
foreach($registrants as $registrant) { 
echo "<tr><td>".$registrant['familiya']."</td>"; 
echo "<td>".$registrant['imya']."</td>"; 
  echo "<td>".$registrant['tel']."</td>"; 
  echo "<td>".$registrant['pas']."</td>"; 
  echo "<td>".$registrant['srok']."</td>"; 
  echo "<td>".$registrant['sum']."</td>"; 
  echo "<td>".$registrant['sposobopl']."</td>"; 
  echo "<td>".$registrant['nomkar']."</td>"; 
} 
echo "</table>"; 
} 
else 
{ 
echo "<h3>Ваша заявка не оформлена</h3>"; 
} 

?>
