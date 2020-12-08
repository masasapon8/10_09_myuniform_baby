<?php
// var_dump($_POST);
// exit();
// DB接続情報

if (
    !isset($_POST['userid']) || $_POST['userid'] == '' ||
    !isset($_POST['gender']) || $_POST['gender'] == '' ||
    !isset($_POST['brand']) || $_POST['brand'] == '' ||
    !isset($_POST['color']) || $_POST['color'] == '' ||
    !isset($_POST['design']) || $_POST['design'] == ''
) {
    exit('ParamError');
}


$userid = $_POST['userid'];
$gender = $_POST['gender'];
$brand = $_POST['brand'];
$color = $_POST['color'];
$design = $_POST['design'];


// DB接続情報
$dbn = 'mysql:dbname=gsacf_04_09;charset=utf8;port=3306;host=localhost';
$user = 'root';
$pwd = '';


// DB接続
try {
    $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
    echo json_encode(["db error" => "{$e->getMessage()}"]);
    exit();
}


$sql = 'INSERT INTO user_table(userid, gender, brand, color, design) VALUES(:userid, :gender, :brand, :color, :design)';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':userid', $userid, PDO::PARAM_STR);
$stmt->bindValue(':gender', $gender, PDO::PARAM_STR);
$stmt->bindValue(':brand', $brand, PDO::PARAM_STR);
$stmt->bindValue(':color', $color, PDO::PARAM_STR);
$stmt->bindValue(':design', $design, PDO::PARAM_STR);
$status = $stmt->execute();


if ($status == false) {
    $error = $stmt->errorInfo();
    // データ登録失敗時にエラー表示
    exit('sqlError:' . $error[2]);
} else {
    header('Location:index_main.php');
}
