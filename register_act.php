<?php
$email = $_POST['email'];
    $password = $_POST['password'];

    // メールアドレスの存在確認
    $stmt1 = $pdo->prepare("ここSELECT文");
    $stmt1->execute();

　　　// 該当ユーザーいない場合のカウントの仕方
    if ($stmt->rowCount() == 0) {
        // 新規ユーザー登録
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $pdo->prepare("ここINSERT文");
        $stmt->execute();

        header('Location: dashboard.php');
        exit;
    } else {
        // ユーザーが既に存在する場合は何もせずに登録フォームに戻る
        header('Location: register_form.php');
        exit;
    }