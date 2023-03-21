<?php
session_start();
?>

<?php
$student_ID = "student";          //設置任意變數來裝ID
$student_PWD = "101";
$teacher_ID = "teacher";
$teacher_PWD = "102";
$president_ID = "president";
$president_PWD = "103";

$id = $_POST["id"];
$pwd = $_POST["pwd"];

if(($student_ID == $id) && ($student_PWD == $pwd)){
    $_SESSION["login"]="you're student";
    header("Location:student.php");                             //跳轉至student.php這個網頁
}else if(($teacher_ID == $id) && ($teacher_PWD == $pwd)){
    $_SESSION["login"]="you're teacher";
    header("Location:teacher.php");  
}else if(($president_ID == $id) && ($president_PWD == $pwd)){
    $_SESSION["login"]="you're president";
    header("Location:president.php");  
}else{
    $_SESSION["login"]="No";
    header("Location:fail123.php");
}

?>