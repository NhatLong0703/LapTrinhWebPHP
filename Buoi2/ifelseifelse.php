<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Vòng lặp</title>
        <style>
            .container {
                font-family: Helvetica, sans-serif;
                box-shadow: 0 2px 10px rgba(0,0,0,0.1);
                max-width: 300px;
                padding: 20px;
                margin: 100px;
            }
        </style>
    </head>
    <body>
        <?php
        if (isset($_GET['mark'])) {
            $mark = floatval($_GET['mark']);

            if ($mark >= 8) {
                $result = "Giỏi";
            } elseif ($mark >= 6.5) {
                $result = "Khá";
            } elseif ($mark >= 5) {
                $result = "Trung bình";
            } else {
                $result = "Chưa đạt";
            }

        echo "Điểm: $mark - $result";
        }
         ?>
         <div class="container">
            <form>
                <label for="mark">Nhập điểm:</label><br>
                <input type="text" id="mark" name="mark"><br>
                <button type="submit">Kiểm tra</button>
            </form>
         </div>
    </body>
</html>