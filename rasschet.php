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
<form method="post" action="rasschet.php">
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
name="ras" value="Рассчитать"></br>
</form>
</body>
</html>
<?php
if( isset($_POST['bool_c']) ) {
      
        $d = ($_POST['sum']*$_POST['srok']/100;
                   
        echo "$d"
    } ?>
<?php
/*
  if( isset( $_POST['ras'] ) ){
    $a = (int) $_POST['srok'];
    $b = (int) $_POST['sum'];
echo "{$a * $b/100}";
}*/
?>
