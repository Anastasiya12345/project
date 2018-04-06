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
<h1>Регистрация пользователей</h1> 
<form method="post" action="index.php" 
enctype="multipart/form-data" ></br> 
Номер телефона <input type="text" 
name="tel" id="tel"/></br> 
Пароль <input type="text" 
name="password" id="password"/></br>
<input type="submit" 
name="submit" value="Регестрация"/></br>
<a href="https://anastasiya.azurewebsites.net/vhod.php">Вход</a></br>
<?php
$data = $_POST;
$errors[] = array();
if (trim($data['tel'] == '')
    {
       $errors[] = 'Введите номер телефона!'
    }
    if (trim($data['password'] == '')
    {
       $errors[] = 'Введите пароль!'
    }
        if( emply($errors))
        {
           //Регестрируем
        }
        else
        {
           echo '<div style="color:red;">'.array_shift($errors).'</div><hr>';
        }
        
try { $conn = new PDO("sqlsrv:server = tcp:karl.database.windows.net,1433; Database = basa", "Anastasiya", "L4x78tm2p1");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
print("Ошибка подключения к SQL Server.");
die(print_r($e));
}
//Проверка заполнения при ножатии кнопки. Если поля пустые ничего в БД не записывается.
        
if(!empty($_POST)) {
try {
$tel = $_POST['tel'];
$password = $_POST['password'];
//Регистрация
// Insert data
//Запись в БД
   $sql_insert =
"INSERT INTO registration_tbl (tel, password)
VALUES (?,?)";
$stmt = $conn->prepare($sql_insert);
$stmt->bindValue(1, $tel);
$stmt->bindValue(2, $password); 
    $stmt->execute(); 
}
//Вывод ошибку
catch(Exception $e) {
die(var_dump($e));
}
   echo "<h3>Your're registered!</h3>"; 
}
//Вывод таблицы
$sql_select = "SELECT * FROM registration_tbl";
$stmt = $conn->query($sql_select);
$registrants = $stmt->fetchAll();
//Условие. Если количество записей больше 0, тогда выводится записи полей. В противном случае выводится ошибка о регестрации.
if(count($registrants) > 0) {
echo "<h2>Зарегестрированные</h2>";
echo "<table>";
echo "<tr><th>tel</th>";
echo "<th>password</th>";
foreach($registrants as $registrant) {
echo "<tr><td>".$registrant['tel']."</td>";
echo "<td>".$registrant['password']."</td>";
}
echo "</table>";
} else 
{
echo "<h3>Вы не зарегестрированны</h3>";
}
?>
</form> 
</body> 
</html>
