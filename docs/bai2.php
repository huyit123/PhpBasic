<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 2: Cấu trúc điều kiện</title>
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
        h1, h2 {
            color: #333;
        }
    </style>
</head>
<body>

    <h1>Bài 2: Cấu trúc điều kiện</h1>

    <h2>1. Câu lệnh if, else, elseif</h2>

    <h3>Mục tiêu:</h3>
    <p>Hiểu cách sử dụng các câu lệnh điều kiện để kiểm soát luồng chương trình.</p>

    <h3>Nội dung chi tiết:</h3>

    <h4>Cấu trúc if:</h4>
    <p><strong>Cú pháp:</strong></p>
    <pre>
<code>if (điều_kiện) {
    // Thực hiện nếu điều kiện đúng
}</code>
    </pre>

    <p><strong>Ví dụ:</strong></p>
    <pre>
<code>&lt;?php
$age = 20;
if ($age >= 18) {
    echo "Bạn đã đủ tuổi để đăng ký.";
}
?&gt;</code>
    </pre>

    <h4>Cấu trúc if-else:</h4>
    <p><strong>Cú pháp:</strong></p>
    <pre>
<code>if (điều_kiện) {
    // Thực hiện nếu điều kiện đúng
} else {
    // Thực hiện nếu điều kiện sai
}</code>
    </pre>

    <p><strong>Ví dụ:</strong></p>
    <pre>
<code>&lt;?php
$age = 16;
if ($age >= 18) {
    echo "Bạn đã đủ tuổi để đăng ký.";
} else {
    echo "Bạn chưa đủ tuổi.";
}
?&gt;</code>
    </pre>

    <h4>Cấu trúc if-elseif-else:</h4>
    <p><strong>Cú pháp:</strong></p>
    <pre>
<code>if (điều_kiện1) {
    // Thực hiện nếu điều kiện 1 đúng
} elseif (điều_kiện2) {
    // Thực hiện nếu điều kiện 2 đúng
} else {
    // Thực hiện nếu tất cả điều kiện đều sai
}</code>
    </pre>

    <p><strong>Ví dụ:</strong></p>
    <pre>
<code>&lt;?php
$age = 25;
if ($age &lt; 18) {
    echo "Bạn là vị thành niên.";
} elseif ($age &lt;= 30) {
    echo "Bạn đang ở độ tuổi trưởng thành.";
} else {
    echo "Bạn đã trưởng thành.";
}
?&gt;</code>
    </pre>

    <h2>2. Câu lệnh switch-case</h2>

    <h3>Mục tiêu:</h3>
    <p>Sử dụng switch-case để xử lý nhiều điều kiện khác nhau.</p>

    <h3>Nội dung chi tiết:</h3>

    <h4>Cấu trúc switch:</h4>
    <p><strong>Cú pháp:</strong></p>
    <pre>
<code>switch (biến) {
    case giá_trị_1:
        // Thực hiện nếu giá trị 1
        break;
    case giá_trị_2:
        // Thực hiện nếu giá trị 2
        break;
    default:
        // Thực hiện nếu không trùng bất kỳ giá trị nào
}</code>
    </pre>

    <p><strong>Ví dụ:</strong></p>
    <pre>
<code>&lt;?php
$day = "Monday";
switch ($day) {
    case "Monday":
        echo "Hôm nay là thứ Hai.";
        break;
    case "Tuesday":
        echo "Hôm nay là thứ Ba.";
        break;
    default:
        echo "Không rõ hôm nay là ngày gì.";
}
?&gt;</code>
    </pre>

    <h3>Bài tập thực hành:</h3>
    <p>Viết một chương trình PHP kiểm tra số nhập vào từ người dùng có phải là số dương, số âm hoặc bằng 0.</p>

</body>
</html>
