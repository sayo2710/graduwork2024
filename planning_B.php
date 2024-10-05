<?php
session_start();

//１．関数群の読み込み
require_once('funcs.php');
loginCheck();

//2. DB接続します
$pdo = db_conn();

//3. POSTデータ取得
$user_id = $_SESSION["user_id"];
$start_date = $_POST['start_date'];

//4．データ登録SQL作成
$stmt = $pdo->prepare('UPDATE gs_gwk_users_table SET start_date = :start_date WHERE user_id = :user_id');

// 5. バインド変数を用意
// Integer 数値の場合 PDO::PARAM_INT
// String文字列の場合 PDO::PARAM_STR
$stmt->bindValue(':user_id', $user_id, PDO::PARAM_STR); // 変数をバインド
$stmt->bindValue(':start_date', $start_date, PDO::PARAM_STR);

//  6. 実行
//$status = $stmt->execute();

//7．データ登録処理後
if ($status === false) {
    sql_error($stmt);
}

//8.完了目安日を計算
//$date = new DateTime('now'); // 又は $date = new DateTime('YYYY-mm-dd');
$date = new DateTime($start_date);
$fp_date = date_modify($date, "+14 day")->format("Y-m-d"); //14日後

$date = new DateTime($fp_date);
$municipality_date = date_modify($date, "+7 day")->format("Y-m-d"); //7日後

$date = new DateTime($municipality_date);
$petition_date = date_modify($date, "+20 day")->format("Y-m-d"); //20日後

$date = new DateTime($petition_date);
$lawyer1_date = date_modify($date, "+14 day")->format("Y-m-d"); //14日後

$date = new DateTime($lawyer1_date);
$moving_date = date_modify($date, "+7 day")->format("Y-m-d"); //7日後

$date = new DateTime($moving_date);
$doc_date = date_modify($date, "+20 day")->format("Y-m-d"); //20日後

$date = new DateTime($doc_date);
$lawyer2_date = date_modify($date, "+14 day")->format("Y-m-d"); //14日後

?>

<!DOCTYPE html>
<html lang="ja" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>プラン作成</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./img/heart.png">
    <!-- daisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex justify-center">
        <div class="artboard phone-5 base-200"> <!-- 全体レイアウト -->
            <header>
                プラン作成
            </header>

            <main>
                <form id="date_form" method="post" action="planning_C.php">
                    <p>各タスクの完了目安日です。<br>
                        必要に応じて変更してください。</p>
                    <label>起算日：<input id="start_date" maxlength="20" type="date" readonly name="start_date" class="input input-bordered w-full max-w-xs flex items-center gap-2 " value="<? echo $start_date ?>"></label><br>
                    <label>FP相談：<input id="fp_date" maxlength="20" type="date" name="fp_date" class="input input-bordered w-full max-w-xs flex items-center gap-2 " value="<? echo $fp_date ?>"></label><br>
                    <label>自治体相談：<input id="municipality_date" maxlength="20" type="date" name="municipality_date" class="input input-bordered w-full max-w-xs flex items-center gap-2" value="<? echo $municipality_date ?>"></label><br>
                    <label>申立書作成：<input id="petition_date" maxlength="20" type="date" name="petition_date" class="input input-bordered w-full max-w-xs flex items-center gap-2" value="<? echo $petition_date ?>"></label><br>
                    <label>弁護士相談1：<input id="lawyer1_date" maxlength="15" type="date" name="lawyer1_date" class="input input-bordered w-full max-w-xs flex items-center gap-2" value="<? echo $lawyer1_date ?>"></label><br>
                    <label>引越し：<input id="moving_date" maxlength="20" type="date" name="moving_date" class="input input-bordered w-full max-w-xs flex items-center gap-2" value="<? echo $moving_date ?>"></label><br>
                    <label>陳述書作成：<input id="doc_date" maxlength="20" type="date" name="doc_date" class="input input-bordered w-full max-w-xs flex items-center gap-2" value="<? echo $doc_date ?>"></label><br>
                    <label>弁護士相談2：<input id="lawyer2_date" maxlength="20" type="date" name="lawyer2_date" class="input input-bordered w-full max-w-xs flex items-center gap-2" value="<? echo $lawyer2_date ?>"></label><br>
                </form>

                <!-- button -->
                <div class="flex justify-center">
                    <div class="mx-px"><input type="submit" value="送信" form="date_form" class="btn"></div>
                    <!-- select.phpへのハイパーリンクを追加 -->
                    <div class="mx-px"><button onclick="location.href='planning_A.php'" class="btn">戻る</button></div>
                </div>
            </main>

            <footer>
                <div class="text-center"> G's graduation work 2024</div>
            </footer>

            <!-- script -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <script src="js/main.js"></script>
        </div>
    </div>
</body>

</html>