<!-- アカウントを登録します -->
<!DOCTYPE html>
<html lang="ja" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録</title>
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
                ユーザー登録
            </header>
            <div class="register-container">
                <div class="card">
                    <h2>ユーザー登録</h2>
                    <form name="form1" action="register_act.php" method="post">
                        <label for="email">メールアドレス:</label>
                        <input type="email" id="email" name="email" required>
                        <label for="password">パスワード:</label>
                        <input type="password" id="password" name="password" required>
                        <button type="submit">登録</button>
                    </form>
                    <p>すでにアカウントをお持ちですか？ <a href="index.php">ログイン</a></p>
                </div>
            </div>
            <footer>
                <div class="text-center"> G's graduation work 2024</div>
            </footer>
        </div>
    </div>
</body>

</html>