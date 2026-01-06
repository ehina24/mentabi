<?php

require_once __DIR__ . "/config.php";

$db= new PDO(DB_DSN, DB_USER, DB_PASS);

$id=$_GET["id"];

$table= RAMEN_LIST;
$sql= "SELECT * FROM {$table} WHERE id=?";
$stmt= $db -> prepare($sql);
$stmt -> execute([$id]);
$ramen=$stmt->fetch(PDO::FETCH_ASSOC)
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/information.css">
    <title>めんたび</title>
</head>
<body>
    <button class="triangle" onclick="location.href='index.php'"></button>

    <div class="contentWrap">
        <div class="ramenItem">
            <div class="imgWrap">
                <img src="./img/<?= $ramen["ramen_img"] ?>" alt="ラーメン画像" width="160px" height="160px">
            </div>
    
            <div class="textWrap">
                <h4><?= $ramen["name"] ?></h4>
                <div>
                    <span><?= $ramen["tag_1"] ?></span>
                    <span><?= $ramen["tag_2"] ?></span>
                    <span><?= $ramen["tag_3"] ?></span>
                </div>
                <p>営業時間<br>(火〜日)11:00~14:30,17:00~1:30<br>(月)定休日</p>
            </div>
        </div>
    
        <h1>豚骨のコクと醤油の香ばしさが広がる<br>どこか懐かしい味</h1>
        <p>丁寧に炊き出したスープは濃厚なのにくどくなく、<br>
            最後の一口まで飲み干したくなるほど。<br>
            和歌山の味をまっすぐに届ける、王道の一杯です。
        </p>
    
        <h2>おすすめポイント</h2>
        <p>・豚骨のまろやかさと醤油の香ばしさが<br>
            　調和した、コク深いスープ
        </p>
        <p>・昔ながらの味を丁寧に受け継ぐ、<br>
            　心まであたたまる一杯
        </p>
    
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d486530.00685236766!2d134.56764458906252!3d34.23556559999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000b2e89fa7a3ad%3A0x69d92a96d4802bb!2sMaruta-ya%20Ramen%20Burakuri-cho%20branch!5e0!3m2!1sen!2sjp!4v1767681038583!5m2!1sen!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></body>
        </div>
    </div>
</html>