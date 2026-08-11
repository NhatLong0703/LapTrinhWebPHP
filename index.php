<?php
$title = $_GET['title'] ?? "Bài tập";
$title = htmlspecialchars($title, ENT_QUOTES, 'UTF-8');

$name = $_GET['name'] ?? "Nguyễn Nhật Long";
$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            color: #222;
        }
        .container {
            max-width: 1100px;
            margin: 40px auto;
            padding: 30px;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.12);
            text-align: center;
        }
        h1 {
            color: #0f4c81;
            margin-bottom: 10px;
        }
        .intro {
            font-size: 1.05rem;
            color: #555;
            margin-bottom: 25px;
            text-align: center;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 16px;
        }
        .card {
            display: block;
            text-decoration: none;
            color: inherit;
            background: #f8f9fb;
            padding: 20px;
            border-radius: 12px;
            border: 1px solid #e5e7eb;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.08);
        }
        .card h3 {
            margin: 0;
            color: #1e3a8a;
            text-align:center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lập trình Web PHP</h1>
        <p class="intro">
            Họ và tên <strong><?= $name ?></strong></br>
            Lớp: <strong>CNTT D2024A</strong>
        </p>

        <div class="grid">
            <a class="card" href="Buoi1/about.php">
                <h3>Buổi 1</h3>
            </a>

            <a class="card" href="#">
                <h3>Buổi 2</h3>
            </a>

            <a class="card" href="#">
                <h3>Buổi 3</h3>
            </a>

            <a class="card" href="#">
                <h3>Buổi 4</h3>
            </a>

            <a class="card" href="#">
                <h3>Buổi 5</h3>
            </a>

            <a class="card" href="#">
                <h3>Buổi 6</h3>
            </a>

            <a class="card" href="#">
                <h3>Buổi 7</h3>
            </a>

            <a class="card" href="#">
                <h3>Buổi 8</h3>
            </a>
        </div>
    </div>
</body>
</html>