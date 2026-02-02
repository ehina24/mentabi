<?php
session_start();

if(!isset($_SESSION['user'])){
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mypage.css">
    <title>めんたび</title>
</head>
<body>
    <header>
        <nav class="headerNav">
            <a href="index.php"><img src="./img/logo.svg" alt="サイトロゴ"></a>
        </nav>
    </header>

    <main>
        <h1>私のラーメン記録</h1>
        <div class="paper"></div>
        <p>#車庫前系</p>
        <div class="stampPlace">
            <p></p>
        </div>
    </main>
</body>
</html>