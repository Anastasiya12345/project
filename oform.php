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
<form method="post" action="index.php" 
enctype="multipart/form-data" > 
Фамилия <input type="text" 
name="familiya" id="familiya"/></br> 
Имя <input type="text" 
name="imya" id="imya"/></br> 
Отчество <input type="text" 
name="otchestvo" id="otchestvo"/></br> 
Пол <select name="pol">
<option value ="d1">Жен</option>
<option value ="d2">Муж</option>
</select></br>
Номер паспорта <input type="text" 
name="nompas" id="nompas"/></br> 
Серия паспорта <input type="text" 
name="serpas" id="serpas"/></br> 
Номер телефона <input type="text" 
name="nomtel" id="nomtel"/></br> 
<p><input type="file" name="pasport"
accept="image/jpeg"></br>
Срок страховой службы <select name="srok">
<option value ="a1">1 год</option>
<option value ="a2">5 лет</option>
<option value ="a3">10 лет</option>
</select></br>
Сумма страховки <select name="sum">
name="pasport" id="pasport"/></br>
<option value ="b1">100000</option>
<option value ="b2">500000</option>
</select></br>
<input type="submit" 
name="submit" value="Рассчитать"
Ежегодный платеж <input type="text" 
name="plata" id="plata"/></br>
Способ оплаты <select name="sposobopl">
<option value ="g1">Карта Wisa</option>
<option value ="g2">Карта МИР</option>
</select></br>
Номер карты <input type="text" 
name="nomkar" id="nomkar"/></br>
<input type="submit" 
name="submit1" value="Оформить"
</form> 
</body> 
</html>
