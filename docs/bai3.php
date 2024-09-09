<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 3.2: Vòng lặp</title>
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


    <h1>Bài 3.2: Vòng lặp</h1>

    <h2>1. Vòng lặp for</h2>

    <h3>Mục tiêu:</h3>
    <p>Sử dụng vòng lặp for để lặp qua một đoạn mã một số lần nhất định.</p>

    <h3>Nội dung chi tiết:</h3>

    <h4>Cấu trúc vòng lặp for:</h4>
    <p><strong>Cú pháp:</strong></p>
    <pre>
<code>
    for (khởi_tạo; điều_kiện; bước_nhảy) {
    // Khối lệnh được thực hiện
}
</code>
    </pre>

    <p><strong>Ví dụ:</strong></p>
    <pre>
<code>&lt;?php
for ($i = 1; $i &lt;= 5; $i++) {
    echo "Lần lặp: " . $i . "&lt;br&gt;";
}
?&gt;</code>
    </pre>

    <h2>2. Vòng lặp while</h2>

    <h3>Mục tiêu:</h3>
    <p>Hiểu và sử dụng vòng lặp while để lặp mã dựa trên điều kiện.</p>

    <h3>Nội dung chi tiết:</h3>

    <h4>Cấu trúc vòng lặp while:</h4>
    <p><strong>Cú pháp:</strong></p>
    <pre>
<code>while (điều_kiện) {
    // Khối lệnh được thực hiện
}</code>
    </pre>

    <p><strong>Ví dụ:</strong></p>
    <pre>
<code>&lt;?php
$i = 1;
while ($i &lt;= 5) {
    echo "Lần lặp: " . $i . "&lt;br&gt;";
    $i++;
}
?&gt;</code>
    </pre>

    <h2>3. Vòng lặp do-while</h2>

    <h3>Mục tiêu:</h3>
    <p>Sử dụng do-while để thực hiện khối lệnh ít nhất một lần trước khi kiểm tra điều kiện.</p>

    <h3>Nội dung chi tiết:</h3>

    <h4>Cấu trúc vòng lặp do-while:</h4>
    <p><strong>Cú pháp:</strong></p>
    <pre>
<code>do {
    // Khối lệnh được thực hiện ít nhất một lần
} while (điều_kiện);</code>
    </pre>

    <p><strong>Ví dụ:</strong></p>
    <pre>
<code>&lt;?php
$i = 1;
do {
    echo "Lần lặp: " . $i . "&lt;br&gt;";
    $i++;
} while ($i &lt;= 5);
?&gt;</code>
    </pre>

    <h2>4. Vòng lặp foreach</h2>

    <h3>Mục tiêu:</h3>
    <p>Dùng foreach để duyệt qua các phần tử của mảng.</p>

    <h3>Nội dung chi tiết:</h3>

    <h4>Cấu trúc vòng lặp foreach:</h4>
    <p><strong>Cú pháp:</strong></p>
    <pre>
<code>foreach ($mang as $phan_tu) {
    // Khối lệnh thực hiện với mỗi phần tử
}</code>
    </pre>

    <p><strong>Ví dụ:</strong></p>
    <pre>
<code>&lt;?php
$colors = array("Đỏ", "Xanh", "Vàng");
foreach ($colors as $color) {
    echo "Màu: " . $color . "&lt;br&gt;";
}
?&gt;</code>
    </pre>

    <h2>5. Câu lệnh break và continue</h2>

    <h3>Mục tiêu:</h3>
    <p>Hiểu và sử dụng break để dừng vòng lặp, continue để bỏ qua lần lặp hiện tại.</p>

    <h4>Câu lệnh break:</h4>
    <p><strong>Ví dụ:</strong></p>
    <pre>
<code>&lt;?php
for ($i = 1; $i &lt;= 10; $i++) {
    if ($i == 5) {
        break;  // Dừng vòng lặp khi $i = 5
    }
    echo "Lần lặp: " . $i . "&lt;br&gt;";
}
?&gt;</code>
    </pre>

    <h4>Câu lệnh continue:</h4>
    <p><strong>Ví dụ:</strong></p>
    <pre>
<code>&lt;?php
for ($i = 1; $i &lt;= 5; $i++) {
    if ($i == 3) {
        continue;  // Bỏ qua $i = 3
    }
    echo "Lần lặp: " . $i . "&lt;br&gt;";
}
?&gt;</code>
    </pre>


</body>

</html>