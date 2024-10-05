<?php
session_start();

//1.POST値を受け取る
$lid = $_POST['lid'];
$lpw = $_POST['lpw'];

//2.  DB接続します
require_once('funcs.php');
$pdo = db_conn();

//3. データ登録SQL作成
// gs_gwk_users_tableに、IDとWPがあるか確認する。
$stmt = $pdo->prepare('SELECT * FROM gs_gwk_users_table WHERE email = :email AND password = :password'); //SQLを記載
$stmt->bindValue(':email', $lid, PDO::PARAM_STR);
$stmt->bindValue(':password', $lpw, PDO::PARAM_STR);
$status = $stmt->execute();

//3. SQL実行時にエラーがある場合STOP
if ($status === false) {
    sql_error($stmt);
}

//4. 抽出データ数を取得
$val = $stmt->fetch();

//if(password_verify($lpw, $val['lpw'])){ //* PasswordがHash化の場合はこっちのIFを使う
if ($val['id'] != '') {
    //Login成功時 該当レコードがあればSESSIONに値を代入
    $_SESSION['chk_ssid'] = session_id();
    $_SESSION["user_id"] = $val["id"];
    $_SESSION["user_name"] = $val["email"];
    $_SESSION["start_date"] = $val["start_date"];
    
    //$_SESSION['kanri'] = $val['kanri_flg'] ;

    header('Location: main.php');
} else {
    //Login失敗時(Logout経由)
    header('Location: index.php');
}

exit();
