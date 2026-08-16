<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tài liệu</title>
        <style>
            .container {
                font-family: Helvetica, sans-serif;
                box-shadow: 0 2px 10px rgba(0,0,0,0.1);
                max-width: 300px;
                padding: 20px;
                margin: 100px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <?php
        function money(float $value): string {
            return number_format($value,0,",",".") . 'đ';
        }
        $name = $_POST['name'] ?? '';
        $qty = (int)($_POST['qty'] ?? 0 );
        $price = (float)($_POST['price'] ?? 0);
        $total = $qty * $price;
        ?>
         <div class="container">
            <form method="post">
                <input type="text" id="name" name="name" placeholder="Tên tài liệu"><br>
                <input type="text" id="price" name="price"><br>
                <input type="text" id="qty" name="qty"><br>
                <button type="submit">Tính</button>
            </form>
            <?php if ($total > 0): ?>
                <p><?=  htmlspecialchars($name) ?>: <?= money($total) ?></p>
            <?php endif; ?>
         </div>
    </body>
</html>