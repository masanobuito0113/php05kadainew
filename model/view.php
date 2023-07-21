<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

function db_conect(){
try {
    $db_name = 'gs_kadai_05';    //データベース名
    $db_id   = 'root';      //アカウント名
    $db_pw   = '';      //パスワード：MAMPは'root'
    $db_host = 'localhost'; //DBホスト
    $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
    return $pdo;
} catch (PDOException $e) {
    exit('DB Connection Error:' . $e->getMessage());
}
}

function get_all_posts($pdo){

$stmt = $pdo->prepare('SELECT * FROM kadai05;');
$status = $stmt->execute();



//３．データ表示
$view = '';
if ($status === false) {
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {


$view .= '<p>';
$view .= '<strong>'.'NAME：'.'</strong>' . $result['name'] . '<br>' . '<strong>'.'ADRESS：'.'</strong>' . $result['adress']. '<br>' . '<strong>'.'TEL：'.'</strong>' . $result['tel'];
$view .= '</p>';

    }
    return $view;
}
}
