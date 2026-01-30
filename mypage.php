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
    <title>めんたび</title>
</head>
<body>
    
</body>
</html>