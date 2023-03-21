<?php
session_start();

if($_SESSION["login"] == "you're president"){

}else{
    header("Location:error123.php");
}
?>

<html>
<head>    
<meta charset="utf-8">

</head>
<body>

<font size="5" color="black" face="Calibri">


校長早安！</br>
<a href="teacher.php">看老師頁面請點這</a></br>
<a href ="logout123.php">登出請點選這裡</a>
</font>

</body>
</html>