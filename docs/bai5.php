<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 4.2: Hàm tích hợp sẵn trong PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }

        pre {
            background-color: #f4f4f4;
            padding: 10px;
            border-left: 4px solid #ccc;
            overflow-x: auto;
        }

        h1,
        h2,
        h3,
        h4 {
            color: #333;
        }
    </style>
</head>

<body>

    <h1>Bài 4.2: Hàm tích hợp sẵn trong PHP</h1>

    <h2>Mục tiêu:</h2>
    <ul>
        <li>Biết cách sử dụng các hàm tích hợp sẵn để làm việc với chuỗi, mảng, ngày và giờ.</li>
    </ul>

    <h2>Nội dung chi tiết:</h2>

    <h3>Hàm làm việc với chuỗi</h3>
    <p>Các hàm phổ biến để làm việc với chuỗi:</p>
    <ul>
        <li><strong>strlen()</strong>: Đếm số ký tự trong chuỗi.</li>
        <li><strong>strpos()</strong>: Tìm kiếm một chuỗi con trong chuỗi lớn.</li>
        <li><strong>str_replace()</strong>: Thay thế chuỗi con.</li>
    </ul>

    <h4>Ví dụ:</h4>
    <pre>
<code>&lt;?php
$chuoi = "Xin chào, PHP!";
echo strlen($chuoi);  // Kết quả: 14
echo strpos($chuoi, "PHP");  // Kết quả: 10
echo str_replace("PHP", "thế giới", $chuoi);  // Kết quả: Xin chào, thế giới!
?&gt;</code>
    </pre>

    <h3>Hàm làm việc với mảng</h3>
    <p>Các hàm phổ biến để làm việc với mảng:</p>
    <ul>
        <li><strong>array_push()</strong>: Thêm phần tử vào cuối mảng.</li>
        <li><strong>array_pop()</strong>: Lấy phần tử cuối cùng ra khỏi mảng.</li>
        <li><strong>array_merge()</strong>: Gộp hai mảng thành một.</li>
    </ul>

    <h4>Ví dụ:</h4>
    <pre>
<code>&lt;?php
$mang = array(1, 2, 3);
array_push($mang, 4);  // Thêm 4 vào cuối mảng
print_r($mang);  // Kết quả: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 )

array_pop($mang);  // Lấy phần tử cuối ra khỏi mảng
print_r($mang);  // Kết quả: Array ( [0] => 1 [1] => 2 [2] => 3 )
?&gt;</code>
    </pre>

    <h3>Hàm làm việc với ngày và giờ</h3>
    <p>Các hàm phổ biến để làm việc với ngày và giờ:</p>
    <ul>
        <li><strong>date()</strong>: Hiển thị ngày và giờ hiện tại.</li>
        <li><strong>time()</strong>: Lấy thời gian hiện tại dưới dạng số giây kể từ Epoch (01/01/1970).</li>
    </ul>

    <h4>Ví dụ:</h4>
    <pre>
<code>&lt;?php
echo "Hôm nay là: " . date("Y-m-d");  // Kết quả: Hôm nay là: 2024-09-05
echo "Giờ hiện tại là: " . date("H:i:s");  // Kết quả: Giờ hiện tại là: 14:30:45
?&gt;</code>
    </pre>

    <h2>Bài tập thực hành:</h2>
    <p>Tạo một hàm nhận vào tên và tuổi, sau đó hiển thị một câu chào.</p>
    <pre>
<code>&lt;?php
function chao($ten, $tuoi) {
    echo "Xin chào, $ten. Bạn $tuoi tuổi.";
}
chao("Nam", 20);  // Kết quả: Xin chào, Nam. Bạn 20 tuổi.
?&gt;</code>
    </pre>

    <p>Viết hàm tính chu vi và diện tích của hình chữ nhật khi biết chiều dài và chiều rộng.</p>
    <pre>
<code>&lt;?php
function chuvi($dai, $rong) {
    return 2 * ($dai + $rong);
}

function dientich($dai, $rong) {
    return $dai * $rong;
}

$dai = 5;
$rong = 3;
echo "Chu vi: " . chuvi($dai, $rong);  // Kết quả: Chu vi: 16
echo "Diện tích: " . dientich($dai, $rong);  // Kết quả: Diện tích: 15
?&gt;</code>
    </pre>

</body>

</html>