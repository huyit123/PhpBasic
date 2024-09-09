<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Cơ bản</title>
</head>
<body>
    <h1>Bài 1:</h1>
    <p>
        <?php
            // In ra một chuỗi văn bản
            echo "Chào mừng bạn đến với PHP!";
        ?>
    </p>
    <h1>Sử dụng Biến trong PHP</h1>
    <p>
        <?php
            $ten = "Nguyễn Văn A";
            $tuoi = 25;
            // In ra thông tin
            echo "Tên: " . $ten . "<br>";
            echo "Tuổi: " . $tuoi;
        ?>
    </p>
    <h1>Vòng lặp trong PHP</h1>
    <ul>
        <?php
            for ($i = 1; $i <= 5; $i++) {
                echo "<li>Mục $i</li>";
            }
        ?>
    </ul>
    <h1>Điều kiện If-Else trong PHP</h1>
    <p>
        <?php
            $diem = 8;
            if ($diem >= 9) {
                echo "Xuất sắc";
            } elseif ($diem >= 7) {
                echo "Giỏi";
            } else {
                echo "Trung bình";
            }
        ?>
    </p>
</body>
</html>
