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
                <p>営業時間<br><?= $ramen["time"] ?></p>
            </div>
        </div>
    
        <h1><?= $ramen["catchphrase"] ?></h1>
        <p><?= $ramen["explanation"] ?></p>
    
        <h2>おすすめポイント</h2>
        <p><?= $ramen["point_1"] ?></p>
        <p><?= $ramen["point_2"] ?></p>
    
        <div class="map">
            <iframe src="<?= $ramen["map"] ?>" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</body>
        </div>
    </div>
</html>