<?php
session_start();

if($_SESSION["login"] == "you're student"){

}else if($_SESSION["login"]=="you're teacher"){

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


學生早安！</br>

<a href ="logout123.php">登出請點選這裡</a>
</font>

</body>
</html>
