<?php
    session_start();
    require_once __DIR__ . "/config.php";

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $email = $_POST["email"];
        $password = $_POST["password"];

        $db = new PDO(DB_DSN,DB_USER,DB_PASS);
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $db->prepare($sql);
        $stmt -> bindValue(':email',$email);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user && password_verify($password,$user['password'])){
            $_SESSION['user'] = [
                'id' => $user['id'],
                'email' => $user['email']
            ];
            header('Location: index.php');
            exit;
        }else{
            $error = 'メールアドレスまたはパスワードが違います';
        }
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>めんたび</title>
</head>
<body>
    <img src="./img/logo_big.svg" alt="サイトロゴ" class="logo">
    <form method="POST">
        <div class="inputWrap">
                <input type="email" placeholder="メールアドレス" class="mail" name="email">
                <input type="password" placeholder="パスワード" class="pass" name="password">

                <a href="">パスワードを忘れた方はこちら</a>

                <button class="loginBtn" type="submit">ログイン</button>
        </div>
    </form>
</body>
</html>