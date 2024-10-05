<?php
//マイページ
session_start();

//１．関数群の読み込み
require_once('funcs.php');
loginCheck();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>マイページ</title>
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
                マイページ
            </header>
            <div class="mypage-container">
                <div class="card">
                    <ul>
                        <li><a href="planning_A.php">プラン作成</a></li>
                        <li><a href="planning_D.php">プラン確認</a></li>
                        <li><a href="document_A.php">ドキュメント作成</a></li>

                        <!-- button -->
                        <div class="flex justify-center">
                            <!-- select.phpへのハイパーリンクを追加 -->
                            <div class="mx-px"><button onclick="location.href='logout.php'" class="btn">ログアウト</button></div>
                        </div>
                    </ul>
                </div>
            </div>
            <footer>
                <div class="text-center"> G's graduation work 2024</div>
            </footer>
        </div>
    </div>
</body>

</html>