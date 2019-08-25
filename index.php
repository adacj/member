<!DOCTYPE html>
<html lang="en">
<?php require_once("connect.php");?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="jquery-3.4.0.min.js"></script>
    <link rel="stylesheet" href="css.css">
    <title>member</title>
</head>
<body>
    <div>
        <button onclick="window.open('index.php?do=add','_self')">新增會員資料</button>　
        <button onclick="window.open('index.php','_self')">會員列表</button>
    </div>
    <?php require_once( $go.".php");?>
    
</body>
</html>