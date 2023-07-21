<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


$name = $_POST['name'];
$adress = $_POST['adress'];
$tel = $_POST['tel'];


try{
    $pdo = new PDO('mysql:dbname=gs_kadai_05;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
}

$stmt = $pdo->prepare("INSERT INTO kadai05(id, name, adress, tel) VALUES (NULL, :name, :adress, :tel)");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':adress', $adress, PDO::PARAM_STR);
$stmt->bindValue(':tel', $tel, PDO::PARAM_STR);


$status = $stmt->execute();


if($status === false){
    $error = $stmt->errorInfo();
    exit('ErrorMessage:'.$error[2]);
}else{
    header('Location: ../view/index.php');

}

