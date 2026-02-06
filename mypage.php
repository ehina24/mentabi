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
        <div class="stampCardWrap">
            <div class="paper">
                <p class="syakomae">#車庫前系</p>
                <div class="stampPlace">
                    <div>まるイ</div>
                    <div>中華そば<br>まるみ</div>
                    <div>丸高<br>中華そば</div>
                    <div>グリーン<br>コーナー</div>
                    <div>京橋<br>幸太郎</div>
                    <div>丸美商店</div>
                </div>
            </div>
    
            <div class="paper">
                <p class="ide">#井出系</p>
                <div class="stampPlace">
                    <div>井出商店</div>
                    <div>中華そば<br>丸田屋</div>
                    <div>丸三</div>
                    <div>正善</div>
                    <div>中華そば<br>まるだい</div>
                    <div>まる豊</div>
                </div>
            </div>
    
            <div class="paper">
                <p class="unique">#独自系</p>
                <div class="stampPlace">
                    <div>龍王亭</div>
                    <div>まる京<br>中華そば</div>
                    <div>福井食堂</div>
                    <div>麺屋<br>ひしお</div>
                    <div>山為食堂</div>
                    <div>ばり嗎</div>
                </div>
            </div>
        </div>

    </main>
</body>
</html>