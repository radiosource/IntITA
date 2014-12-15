<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "int_ita_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysql_query("set names utf8");
@$sql = "INSERT INTO user_info (id, f_name, l_name,s_name,add_Email,phone)
VALUES ('','$_POST[f_name]','$_POST[l_name]','$_POST[s_name]','$_POST[add_Email]','+38$_POST[phone]')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
?>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset="utf8">
    <title>Заполните анкету</title>
 <link rel="stylesheet" href="anketa.css">
 </head>
<body> 
 <div class="title_anketa">Анкета</div>
 <div class="title_invitation">Здраствуйте, потратьте, пожалуйста, несколько минут на заполнение следущей анкеты</div>
 <br>
 <form method="POST" action="Anketa.php">
 <div class="form-text_title">
    <div class="form_text">Имя:</div>
    <div class="form_text"><input type="text" id="fname" name=f_name value="" required></div>
 </div>
 <br>
 <div class="form-text_title">
    <div class="form_text">Фамилия:</div>
    <div class="form_text"><input type="text" id="lname" name=l_name value="" required></div> 
 </div>
 <br>
 <div class="form-text_title">
    <div class="form_text">Отчество:</div>
    <div class="form_text"><input type="text" id="sname" name=s_name value="" required></div> 
 </div>
 <br>
  <div class="form-text_title">
    <div class="form_text">Дополнительный E-mail(не обязательное поле):</div>
    <div class="form_text"><input type="text" class="addEmail" name=add_Email value="" pattern="[a-z0-9.]+@[a-z]+\.[a-z]+"><span id="form_hint">Введите адрес в формате: name@something.com</span></div> 
 </div>
 <br>
 <div class="form-text_title">
    <div class="form_text">Мобильный телефон</div>
    <div class="form_text">+38<input type="text" id="phone" name=phone value="()" required pattern="\([0-9]{3}\)[0-9]{7}"><span id="form_hint">Введите номер телефона в формате: (XXX)XXXXXXX,<br>где Х-это цифры вашего номера</span></div> 
 </div>
 <div class="submit_div"><img src="images/invalid.png"> - поля, которые нужно заполнить обязательно</div>
 <br>
 <div class="submit_div">
    <input type="submit" class="submit" name="Ok" value="Отправить">
 </div>

 </form>
</body>
</html>
