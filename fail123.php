<?php session_start(); ?>
<?php ob_start();  ?>      <!-- //啟用輸出緩衝區 -->

<?php
if($_SESSION["login"] == "No"){

}else{
    header("Location:error.php");
}
?>

<html>
<head>    
<meta charset="utf-8">
</head>
<body>

登入失敗！<br>
網頁將在三秒後跳轉至登入頁面或<br>
<a href ="login.php">點選這裡</a>

<?php
echo $_SESSION["login"];
header("refresh:3 ; url = login.php")       //refresh:3 三秒後回到登入頁面
?>
</body>

</html>
<?php ob_flush(); ?>        