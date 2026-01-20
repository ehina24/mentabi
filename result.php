<?php

require_once __DIR__ . "/config.php";

$db=new PDO(DB_DSN, DB_USER, DB_PASS);


$table=RAMEN_LIST;
$sql= "SELECT * FROM {$table} ORDER BY RAND() LIMIT 1";
$stmt= $db -> prepare($sql);
$stmt -> execute();
$ramen=$stmt->fetch(PDO::FETCH_ASSOC)
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/result.css">
    <title>めんたび</title>
</head>
<body>
    <header>
        <nav class="headerNav">
            <a href="index.php"><img src="./img/logo.svg" alt="サイトロゴ"></a>
            <h1>ラーメン診断</h1>
        </nav>
    </header>

    <main>
        <div class="paperWrap">
            <img src="./img/<?= $ramen["ramen_img"] ?>" alt="ラーメン画像" width="212px" height="212px">

            <h2>あなたには<span><?= $ramen["name"] ?></span>の<br>中華そばがオススメ！</h2>

            <button class="triangleBtn"></button>

            <div class="hiddenText">
                <h3>おすすめポイント</h3>
                <p><?= $ramen["point_1"] ?></p>
                <p><?= $ramen["point_2"] ?></p>

                <h3>店舗情報</h3>
                <p>店舗名：<?= $ramen["name"] ?></p>
                <p>営業時間：<?= $ramen["time"] ?></p>
                <p>住所：<?= $ramen["address"] ?></p>
                <p>電話番号：<?= $ramen["tel"] ?></p>
            </div>
        </div>
    </main>

    <script>
        const btn=document.querySelector(".triangleBtn");
        const text=document.querySelector(".hiddenText");

        btn.addEventListener("click",()=>{
            text.classList.toggle("open");
        })
    </script>
</body>
</html>