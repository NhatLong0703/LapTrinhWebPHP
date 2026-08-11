<?php
$title = $_GET['title'] ?? "Giới thiệu";
$title = htmlspecialchars($title, ENT_QUOTES,'UTF-8');
$name = $_GET["name"] ?? "Long";
$name = htmlspecialchars($name, ENT_QUOTES,'UTF-8');
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($title) ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f0f0;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1, h2 {
            color: #1a73e8;
        }
        a {
            color: #1a73e8;
        }
        .project {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?= $title ?></h1>
        <p>Xin chào, tôi là <?= $name ?></p>

        <h2>Các dự án đã làm</h2>

        <div class="project">
            <h3>Dự án trang web du lịch</h3>
            <p>Link repository: <a href="https://github.com/NhatLong0703/BTL_Nhom5" target="_blank">https://github.com/NhatLong0703/BTL_Nhom5</a></p>
        </div>

        <div class="project">

        </div>
    </div>
</body>
</html>