<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/diagnosis.css">
    <title>めんたび</title>
</head>
<body>
    <header>
        <nav class="headerNav">
            <img src="./img/logo.svg" alt="サイトロゴ">
            <h1>ラーメン診断</h1>
        </nav>
    </header>

    <main>
        <div class="paperWrap">
            <h2>注文するように答えるだけ。<br>あなたにぴったりの一杯がわかる！</h2>

            <div class="questionWrap">
                <h3>あなたはどっち派？</h3>
                <div class="choiceWrap">
                    <label class="choice">
                        <input type="radio" name="taste">
                        <span class="box"></span>
                        <p>こってり濃厚</p>
                    </label>
                    <label class="choice">
                        <input type="radio" name="taste">
                        <span class="box"></span>
                        <p>あっさりスッキリ</p>
                    </label>
                </div>

                <h3>スープの香りは？</h3>
                <div class="choiceWrap">
                    <label class="choice">
                        <input type="radio" name="scent">
                        <span class="box"></span>
                        <p>醤油の香ばしさ</p>
                    </label>
                    <label class="choice">
                        <input type="radio" name="scent">
                        <span class="box"></span>
                        <p>豚骨のコク</p>
                    </label>
                </div>

                <h3>麺の好みは？</h3>
                <div class="choiceWrap">
                    <label class="choice">
                        <input type="radio" name="noodles">
                        <span class="box"></span>
                        <p>やや柔らかめ</p>
                    </label>
                    <label class="choice">
                        <input type="radio" name="noodles">
                        <span class="box"></span>
                        <p>しっかり食感</p>
                    </label>
                </div>

                <h3>スープ飲み干すなら？</h3>
                <div class="choiceWrap">
                    <label class="choice">
                        <input type="radio" name="soup">
                        <span class="box"></span>
                        <p>サッパリ</p>
                    </label>
                    <label class="choice">
                        <input type="radio" name="soup">
                        <span class="box"></span>
                        <p>ご飯と相性抜群</p>
                    </label>
                </div>

                <h3>トッピング一つ追加するなら？</h3>
                <div class="choiceWrap">
                    <label class="choice">
                        <input type="radio" name="topping"> 
                        <span class="box"></span>
                        <p>ネギたっぷり</p>
                    </label>
                    <label class="choice">
                        <input type="radio" name="topping">
                        <span class="box"></span>
                        <p>濃厚トッピング</p>
                    </label>
                </div>
                
                <div class="btn">
                    <button id="diagnosisBtn">診断する</button>
                </div>
            </div>
        </div>
    </main>
    <script src="js/diagnosis.js"></script>
</body>
</html>