<?php
session_start();

//１．関数群の読み込み
require_once('funcs.php');
loginCheck();

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
                <form id="date_form" method="post" action="planning_B.php">
                    <p>起算日を入力してください。<br>
                        各タスクの完了目安日が表示されます。</p>
                    <label>起算日：<input id="start_date" maxlength="20" type="date" name="start_date" class="input input-bordered w-full max-w-xs flex items-center gap-2 "></label>
                </form>

                <!-- button -->
                <div class="flex justify-center">
                    <div class="mx-px"><input type="submit" value="送信" form="date_form" class="btn"></div>
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