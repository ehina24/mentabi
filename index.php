<?php

require_once __DIR__ . "/config.php";

$db= new PDO(DB_DSN, DB_USER, DB_PASS);

$table= RAMEN_LIST;
$sql= "SELECT * FROM {$table}";
$stmt= $db -> prepare($sql);
$stmt -> execute();

$ramens= [];
while($row =$stmt -> fetch(PDO::FETCH_ASSOC)){
    $ramens[]= $row;
}

//タグ色切り替え
function tagClass($tag){
    return match($tag){
        "車庫前系"=>"syakomae",
        "井出系"=>"ide",
        "独自系"=>"unique",
        "その他"=>"other"
    };
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>めんたび</title>
</head>
<body>
    <header>
        <nav class="headerNav">
            <img src="./img/logo.svg" alt="サイトロゴ">
            <a href="">ログイン</a>
        </nav>
    </header>

    <main>
        <img src="./img/noren.svg" alt="暖簾" class="noren">
        <h1>三つの系統、それぞれの個性と魅力<br>和歌山ラーメンの味の違いを、見て、知って、味わおう。</h1>

        <nav class="tab">
            <button class="tabItem isActive" data-type="syakomae">車庫前系</button>
            <button class="tabItem" data-type="ide">井出系</button>
            <button class="tabItem" data-type="unique">独自系</button>
        </nav>

        <div class="explanationWrap isActive" data-type="syakomae">
            <div class="textWrap">
                <h2>香り立つ醤油、すっきり豚骨。<br>車庫前系の魅力</h2>
                <p>和歌山ラーメンの原点ともいわれる「車庫前系」。
                    その名は、かつて和歌山駅近くの国鉄(現JR)車庫前に
                    並んだ屋台に由来します。醤油豚骨をベースにした透き通る
                    あっさりしたスープは、醤油の香ばしさと豚骨の旨みが調和。
                    シンプルな具材と優しい味わいで、地元に長く愛され続けています。
                </p>
            </div>
            <div class="imgWrap">
                <img src="./img/gradation_bar_1.svg" alt="グラデーションバー">
                <img src="./img/img_1.svg" alt="車庫前系ラーメン画像" width="113px" height="120px">
            </div>
        </div>

        <div class="explanationWrap" data-type="ide">
            <div class="textWrap">
                <h2>コク深く濃厚、まろやか豚骨。<br>井出系の魅力</h2>
                <p>和歌山ラーメンを全国に知らしめた「井出系」。
                    その源流は戦後間もなく創業した井出商店にあります。
                    豚骨を強火でじっくり炊き出した濃厚スープに、醤油
                    の旨みが溶け込んだまろやかな味わいが特徴。今も多
                    くの店がその味を受け継ぎ、進化を続けています。
                </p>
            </div>
            <div class="imgWrap">
                <img src="./img/gradation_bar_2.svg" alt="グラデーションバー">
                <img src="./img/img_2.svg" alt="井出系ラーメン画像" width="113px" height="120px">
            </div>
        </div>

        <div class="explanationWrap" data-type="unique">
            <div class="textWrap">
                <h2>新しい風、個性が香る一杯。<br>独自系の魅力</h2>
                <p>伝統を受け継ぎつつ独自を追求する「独自系」。
                    豚骨や鶏ガラを自由に組み合わせ、スープやトッピング
                    に個性を加えた一杯が楽しめます。伝統の枠にとらわれ
                    ず、和歌山の新しい味を発信する革新的なラーメンとして
                    注目を集めています。和歌山ラーメンの魅力を広げるラーメンです。
                </p>
            </div>
            <div class="imgWrap">
                <img src="./img/gradation_bar_3.svg" alt="グラデーションバー">
                <img src="./img/img_3.svg" alt="独自系ラーメン画像" width="113px" height="120px">
            </div>
        </div>


        <div class="inductionWrap">
            <h3>あなたにピッタリのラーメンを診断しよう！</h3>
            <button>診断する</button>
        </div>

        <button class="narrowDown">絞り込み</button>
        <?php foreach (array_chunk($ramens,2) as $pair):?>
            <div class="row">
                <?php foreach($pair as $ramen):?>
                    <div class="ramenItem">
                        <img src="./img/<?= $ramen["ramen_img"] ?>" alt="ラーメン画像">
                        <h4><?= $ramen["name"] ?></h4>
                        <div>
                            <span><?= $ramen["tag_1"] ?></span>
                            <span><?= $ramen["tag_2"] ?></span>
                            <span><?= $ramen["tag_3"] ?></span>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        <?php endforeach ?>
    </main>

    <footer>
        <p><small>&copy;mentabi</small></p>
    </footer>
</body>

<script src="js/index.js"></script>
</html>