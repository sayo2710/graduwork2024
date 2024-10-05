<?php
session_start();

//１．関数群の読み込み
require_once('funcs.php');
loginCheck();

//2. DB接続します
$pdo = db_conn();

//3. POSTデータ取得
$user_id = $_SESSION["user_name"];
$start_date = $_POST['start_date'];
$fp_date =  $_POST['fp_date']; //1
$municipality_date = $_POST['municipality_date']; //2
$petition_date = $_POST['petition_date']; //3
$lawyer1_date = $_POST['lawyer1_date']; //4
$moving_date = $_POST['moving_date']; //5
$doc_date = $_POST['doc_date']; //6
$lawyer2_date = $_POST['lawyer2_date']; //7

//4．データ登録SQL作成
$stmt = $pdo->prepare('INSERT INTO
                gs_gwk_users_task_table( id, user_id, task_id, end_date, is_done )
                VALUES( NULL, :user_id, 1, :fp_date, NULL ),( NULL, :user_id, 2, :municipality_date, NULL ),
                      ( NULL, :user_id, 3, :petition_date, NULL ),( NULL, :user_id, 4, :lawyer1_date, NULL ),
                      ( NULL, :user_id, 5, :moving_date, NULL ),( NULL, :user_id, 6, :doc_date, NULL ),
                      ( NULL, :user_id, 7, :lawyer2_date, NULL )');

// 5. バインド変数を用意
// Integer 数値の場合 PDO::PARAM_INT
// String文字列の場合 PDO::PARAM_STR
$stmt->bindValue(':user_id', $user_id, PDO::PARAM_STR);
$stmt->bindValue(':start_date', $start_date, PDO::PARAM_STR);
$stmt->bindValue(':fp_date', $fp_date, PDO::PARAM_STR);
$stmt->bindValue(':municipality_date', $municipality_date, PDO::PARAM_STR);
$stmt->bindValue(':petition_date', $petition_date, PDO::PARAM_STR);
$stmt->bindValue(':lawyer1_date', $lawyer1_date, PDO::PARAM_STR);
$stmt->bindValue(':moving_date', $moving_date, PDO::PARAM_STR);
$stmt->bindValue(':doc_date', $doc_date, PDO::PARAM_STR);
$stmt->bindValue(':lawyer2_date', $lawyer2_date, PDO::PARAM_STR);

//  6. 実行
$status = $stmt->execute();

//7．データ登録処理後
if ($status === false) {
    sql_error($stmt);
} else {
    redirect('planning_D.php');
}
