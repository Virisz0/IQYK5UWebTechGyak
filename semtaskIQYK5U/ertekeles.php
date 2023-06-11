<!DOCTYPE html>
<html lang="hu">
<head>
<meta charset="UTF-8">
<title>értékelés</title>
</head>
<body>
<font style="font-size:18pt">
<?php
echo ("<strong>Név: </strong>". $_POST['nev'] . "<br><br>");
echo ("<strong>Életkor: </strong>". $_POST['eletkor'] . "<br><br>");
echo ("<strong>Jogsi: </strong>". $_POST['jogsi'] . "<br><br>");
echo ("<strong>Kedvenc autók: </strong>". $_POST['cars'] . "<br><br>");
echo ("<strong>Jogsítvány kora: </strong>". $_POST['jogsi'] . "<br><br>");
echo ("<strong>Mennyire szereted az autókat?: </strong>". $_POST['autok'] . "<br><br>"); ?>
<a href="targy2.html"> Vissza</a>
</font>
</body>
</html>