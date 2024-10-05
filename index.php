<!-- ログインフォーム -->
<!DOCTYPE html>
<html lang="ja" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン画面</title>
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
                ログイン
            </header>
            <div class="login-container">
                <div class="card">
                    <h2>ログイン</h2>
                    <form name="form1" action="login_act.php" method="post">
                        <label for="username">メールアドレス:</label>
                        <input type="text" id="username" name="lid" required>
                        <label for="password">パスワード:</label>
                        <input type="password" id="password" name="lpw" required>
                        <button type="submit" href="main.php">ログイン</button>
                    </form>
                    <p>アカウントをお持ちでないですか？ <a href="register.php">登録</a></p>
                </div>
            </div>
            <footer>
                <div class="text-center"> G's graduation work 2024</div>
            </footer>
        </div>
    </div>
</body>

</html>