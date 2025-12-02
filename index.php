<?php

require_once __DIR__ . "/config.php";

$db=new PDO(DB_DSN, DB_USER, DB_PASS);

$table=RAMEN_LIST;
$sql="SELECT * FROM {$table}";
$stmt=$db -> prepare($sql);
$stmt -> execute();

$ramens=[];
while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
    $ramens[]=$row;
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>めんたび</title>
</head>
<body>
    <h1>ラーメンリスト</h1>
    <?php foreach($ramens as $ramen):?>
        <tr>
            <td><?= $ramen["id"] ?></td>
            <td><?= $ramen["name"] ?></td>
            <td><img src="./img/<?= $ramen["ramen_img"] ?>" alt="ラーメン画像"></td>
            <td><?= $ramen["tag_1"] ?></td>
            <td><?= $ramen["tag_2"] ?></td>
            <td><?= $ramen["tag_3"] ?></td>
        </tr>
    <?php endforeach ?>
</body>
</html>