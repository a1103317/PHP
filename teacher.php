<?php
session_start();

if($_SESSION["login"] == "you're teacher"){

}else if($_SESSION["login"]=="you're president"){

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


老師早安！</br>
<a href = "student.php">學生頁面請點選這裡</a></br>
<a href ="logout123.php">登出請點選這裡</a>
</font>

</body>
</html>