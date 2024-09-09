<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 4.1: Hàm trong PHP</title>
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

    <h1>Bài 4.1: Hàm trong PHP</h1>

    <h2>Mục tiêu:</h2>
    <ul>
        <li>Hiểu khái niệm hàm và biết cách khai báo, gọi hàm trong PHP.</li>
        <li>Biết cách truyền tham số vào hàm và trả về giá trị từ hàm.</li>
    </ul>

    <h2>Nội dung chi tiết:</h2>

    <h3>Khái niệm hàm</h3>
    <p>Hàm là một đoạn mã được đóng gói với tên và có thể được gọi nhiều lần để thực hiện một tác vụ cụ thể.</p>

    <h4>Cú pháp khai báo hàm:</h4>
    <pre>
<code>function ten_ham() {
    // Khối lệnh của hàm
}</code>
    </pre>

    <p><strong>Ví dụ:</strong></p>
    <pre>
<code>&lt;?php
function chao_mung() {
    echo "Chào mừng bạn đến với PHP!";
}
chao_mung();  // Gọi hàm
?&gt;</code>
    </pre>

    <h3>Truyền tham số vào hàm</h3>
    <p>Hàm có thể nhận tham số đầu vào để hoạt động linh hoạt hơn.</p>

    <h4>Cú pháp:</h4>
    <pre>
<code>function ten_ham($tham_so1, $tham_so2) {
    // Khối lệnh
}</code>
    </pre>

    <p><strong>Ví dụ:</strong></p>
    <pre>
<code>&lt;?php
function tong($a, $b) {
    $ket_qua = $a + $b;
    echo "Tổng của $a và $b là: $ket_qua";
}
tong(3, 5);  // Kết quả: Tổng của 3 và 5 là: 8
?&gt;</code>
    </pre>

    <h3>Trả về giá trị từ hàm</h3>
    <p>Hàm có thể trả về một giá trị thông qua từ khóa <strong>return</strong>.</p>

    <h4>Cú pháp:</h4>
    <pre>
<code>function ten_ham($tham_so) {
    return gia_tri;
}</code>
    </pre>

    <p><strong>Ví dụ:</strong></p>
    <pre>
<code>&lt;?php
function nhan($a, $b) {
    return $a * $b;
}
$ket_qua = nhan(4, 6);
echo "Kết quả phép nhân là: $ket_qua";  // Kết quả: 24
?&gt;</code>
    </pre>

    <h3>Biến cục bộ và biến toàn cục</h3>
    <p>
        <strong>Biến cục bộ:</strong> Được khai báo bên trong hàm và chỉ có hiệu lực trong hàm đó.<br>
        <strong>Biến toàn cục:</strong> Được khai báo bên ngoài hàm và có thể được sử dụng ở bất cứ đâu trong chương trình.
    </p>

    <p>Dùng từ khóa <strong>global</strong> để truy cập biến toàn cục trong hàm.</p>

    <p><strong>Ví dụ:</strong></p>
    <pre>
<code>&lt;?php
$bien_toan_cuc = 10;

function cong($a) {
    global $bien_toan_cuc;  // Truy cập biến toàn cục
    return $a + $bien_toan_cuc;
}

echo cong(5);  // Kết quả: 15
?&gt;</code>
    </pre>

</body>

</html>