<?php
session_start();

//0．関数群の読み込み
require_once('funcs.php');
loginCheck();

//1.  DB接続します
$pdo = db_conn();

//２．データ取得SQL作成
$start_date = $_SESSION["start_date"];
$user_id = $_SESSION["user_name"];
$stmt = $pdo->prepare("SELECT * FROM gs_gwk_users_task_table WHERE user_id = :user_id");
$stmt->bindValue(':user_id', $user_id, PDO::PARAM_STR); // 変数をバインド

//  6. 実行
$status = $stmt->execute();

//３．データ表示
$view = "";
if ($status == false) {
    sql_error($stmt); //execute（SQL実行時にエラーがある場合）

} else {
    //$view .= '<p>';
    //$view .= '<label>起算日：<input maxlength="20" type="date" readonly  class="input input-bordered w-full max-w-xs flex items-center gap-2 " value="' . $start_date . '"></label><br>';

    //Selectデータの数だけ自動でループしてくれる
    //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {

        $view .= '<p>';

        if ($result['task_id'] === 1) {
            $view .= '<label>FP相談：<input  maxlength="20" type="date" readonly class="input input-bordered w-full max-w-xs flex items-center gap-2 " value="' . $result['end_date'] . '"></label>';
        }

        if ($result['task_id'] === 2) {
            $view .= '<label>自治体相談：<input maxlength="20" type="date" readonly class="input input-bordered w-full max-w-xs flex items-center gap-2 " value="' . $result['end_date'] . '"></label>';
        }

        if ($result['task_id'] === 3) {
            $view .= '<label>申立書作成：<input maxlength="20" type="date" readonly class="input input-bordered w-full max-w-xs flex items-center gap-2 " value="' . $result['end_date'] . '"></label>';
        }

        if ($result['task_id'] === 4) {
            $view .= '<label>弁護士相談1：<input maxlength="20" type="date" readonly class="input input-bordered w-full max-w-xs flex items-center gap-2 " value="' . $result['end_date'] . '"></label>';
        }

        if ($result['task_id'] === 5) {
            $view .= '<label>引越し：<input maxlength="20" type="date" readonly class="input input-bordered w-full max-w-xs flex items-center gap-2 " value="' . $result['end_date'] . '"></label>';
        }

        if ($result['task_id'] === 6) {
            $view .= '<label>陳述書作成：<input maxlength="20" type="date" readonly class="input input-bordered w-full max-w-xs flex items-center gap-2 " value="' . $result['end_date'] . '"></label>';
        }

        if ($result['task_id'] === 7) {
            $view .= '<label>弁護士相談2：<input maxlength="20" type="date" readonly class="input input-bordered w-full max-w-xs flex items-center gap-2 " value="' . $result['end_date'] . '"></label>';
        }

        $view .= '</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="ja" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>プラン確認</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./img/heart.png">
    <!-- daisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body id="main">
    <div class="flex justify-center">
        <div class="artboard phone-5 base-200"> <!-- 全体レイアウト -->
            <header>
                プラン確認
            </header>

            <main>
                <div>
                    <div class="container jumbotron"><?= $view ?></div>
                </div>
                <!-- button -->
                <div class="flex justify-center">
                    <!-- select.phpへのハイパーリンクを追加 -->
                    <div class="mx-px"><button onclick="location.href='main.php'" class="btn">戻る</button></div>
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