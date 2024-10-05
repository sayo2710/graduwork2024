<?php
session_start();

//１．関数群の読み込み
require_once('funcs.php');

//2. DB接続します
$pdo = db_conn();

//3. POSTデータ取得
$email = $_POST["email"];
$password = $_POST['password'];

//4. メールアドレスの存在確認
$stmt1 = $pdo->prepare("SELECT * FROM gs_gwk_users_table WHERE email = :email");
$stmt1->bindValue(':email', $email, PDO::PARAM_STR); // 変数をバインド
$stmt1->execute();

//6. 該当ユーザーいない場合のカウントの仕方
$count = $stmt1->rowCount();

if ($count == 0) {

    // 新規ユーザー登録
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    //4．データ登録SQL作成
    $stmt = $pdo->prepare('INSERT INTO
                gs_gwk_users_table( id, username, email, password, start_date )
                VALUES( NULL, NULL, :email , :password, NULL )');

    // 5. バインド変数を用意
    $stmt->bindValue(':email', $email, PDO::PARAM_STR); // 変数をバインド
    $stmt->bindValue(':password', $password, PDO::PARAM_STR); // 変数をバインド

    //  6. 実行
    $status = $stmt->execute();

    // ユーザー登録成功
    header('Location: index.php');
    exit;
} else {
    // ユーザーが既に存在する場合は何もせずに登録フォームに戻る
    header('Location: register.php');
    exit;
}
