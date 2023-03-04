<meta charset = "UTF8">
<font size="5" color="black" face="Calibri">

<?php

if(isset($_POST["id"])){
$id = $_POST["id"];
$name = $_POST["name"];
$mail = $_POST["mail"];


// $id = $_GET["id];
echo "您的學號是：".$id."</br>";
echo "您的姓名是：".$name."</br>";
echo "您的信箱是：".$mail."</br>";


$gender = $_POST["gender"];
if($gender == "male"){
    echo "您的性別是：男性</br>";
}else{
    echo "您的性別是：女性</br>";
}


$meat = $_POST["meat"];
$vege = $_POST["vege"];
echo "飲食習慣調查：";
if(isset($_POST["meat"])){
    $meat = $_POST["meat"];
    echo "我吃肉</br>";
}else{
    echo "我吃草</br>";
}


$yes = $_POST["yes"];
$no = $_Post["no"];
echo "參加意願調查：";
if(isset($_POST["yes"])){
    $yes = $_POST["yes"];
    echo "一定到</br>";
}else{
    echo "下次再說</br>";
}

$comment=$_POST["comment"];
echo "我想說：</br>";
echo nl2br(strip_tags($comment));

}

?>

</font>