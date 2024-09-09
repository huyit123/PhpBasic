
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variables and Operators</title>
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
    <h1>1. Biến trong PHP</h1>
    <p>Biến trong PHP được dùng để lưu trữ giá trị (chuỗi, số, mảng, đối tượng,...). Biến được khai báo bằng dấu <code>$</code>, theo sau là tên biến.</p>

    <h2>Khai báo biến:</h2>
    <pre>
        <code>
            $bien;    // Khai báo biến nhưng chưa gán giá trị
            $bien = "Hello!";  // Gán giá trị chuỗi cho biến
        </code>
    </pre>

    <h2>Quy tắc đặt tên biến:</h2>
    <ul>
        <li>Phải bắt đầu bằng dấu <code>$</code> và theo sau là chữ cái hoặc dấu gạch dưới (_).</li>
        <li>Không được bắt đầu bằng số, nhưng có thể chứa số sau ký tự đầu tiên.</li>
        <li>PHP phân biệt chữ hoa và chữ thường (<code>$Bien</code> và <code>$bien</code> là hai biến khác nhau).</li>
    </ul>

    <h2>Ví dụ về sử dụng biến:</h2>
    <pre>
        <code>
            &lt;?php
                $ten = "Nguyễn Văn A";  // Biến chứa chuỗi
                $tuoi = 25;             // Biến chứa số nguyên
                $diem = 8.5;            // Biến chứa số thập phân

                echo "Tên: " . $ten . "&lt;br&gt;";
                echo "Tuổi: " . $tuoi . "&lt;br&gt;";
                echo "Điểm: " . $diem;
            ?&gt;
        </code>
    </pre>

    <h2>Kiểu dữ liệu của biến:</h2>
    <ul>
        <li>Chuỗi (String): Dữ liệu văn bản, ví dụ: <code>"Xin chào!"</code>.</li>
        <li>Số nguyên (Integer): Dữ liệu số nguyên, ví dụ: <code>10</code>, <code>-5</code>.</li>
        <li>Số thực (Float): Dữ liệu số thập phân, ví dụ: <code>3.14</code>, <code>-0.99</code>.</li>
        <li>Boolean: Dữ liệu đúng hoặc sai (<code>true</code> hoặc <code>false</code>).</li>
        <li>Mảng (Array): Tập hợp các giá trị, ví dụ: <code>array(1, 2, 3)</code>.</li>
    </ul>

    <h1>2. Toán tử trong PHP</h1>
    <p>Toán tử là các ký hiệu được sử dụng để thực hiện các phép toán trên biến và giá trị. Các toán tử phổ biến bao gồm:</p>

    <h2>Toán tử số học (Arithmetic Operators):</h2>
    <ul>
        <li><code>+</code>: Cộng hai giá trị.</li>
        <li><code>-</code>: Trừ giá trị.</li>
        <li><code>*</code>: Nhân hai giá trị.</li>
        <li><code>/</code>: Chia giá trị.</li>
        <li><code>%</code>: Lấy phần dư của phép chia (modulo).</li>
    </ul>
    <pre>
        <code>
            &lt;?php
                $a = 10;
                $b = 3;

                echo $a + $b;  // Kết quả: 13
                echo $a - $b;  // Kết quả: 7
                echo $a * $b;  // Kết quả: 30
                echo $a / $b;  // Kết quả: 3.3333
                echo $a % $b;  // Kết quả: 1
            ?&gt;
        </code>
    </pre>

    <h2>Toán tử gán (Assignment Operators):</h2>
    <ul>
        <li><code>=</code>: Gán giá trị cho biến.</li>
        <li><code>+=</code>: Cộng và gán.</li>
        <li><code>-=</code>: Trừ và gán.</li>
        <li><code>*=</code>: Nhân và gán.</li>
        <li><code>/=</code>: Chia và gán.</li>
        <li><code>%=</code>: Lấy phần dư và gán.</li>
    </ul>
    <pre>
        <code>
            &lt;?php
                $a = 10;
                $a += 5;  // Tương đương $a = $a + 5;
                echo $a;  // Kết quả: 15
            ?&gt;
        </code>
    </pre>

    <h2>Toán tử so sánh (Comparison Operators):</h2>
    <ul>
        <li><code>==</code>: So sánh bằng (bằng giá trị).</li>
        <li><code>===</code>: So sánh bằng (bằng cả giá trị và kiểu dữ liệu).</li>
        <li><code>!=</code>: So sánh không bằng.</li>
        <li><code>!==</code>: So sánh không bằng (cả về giá trị và kiểu dữ liệu).</li>
        <li><code>&gt;</code>: Lớn hơn.</li>
        <li><code>&lt;</code>: Nhỏ hơn.</li>
        <li><code>&gt;=</code>: Lớn hơn hoặc bằng.</li>
        <li><code>&lt;=</code>: Nhỏ hơn hoặc bằng.</li>
    </ul>
    <pre>
        <code>
            &lt;?php
                $x = 10;
                $y = 20;

                var_dump($x == $y);  // Kết quả: false
                var_dump($x != $y);  // Kết quả: true
                var_dump($x > $y);   // Kết quả: false
                var_dump($x < $y);   // Kết quả: true
            ?&gt;
        </code>
    </pre>

    <h2>Toán tử logic (Logical Operators):</h2>
    <ul>
        <li><code>&&</code> hoặc <code>AND</code>: Và.</li>
        <li><code>||</code> hoặc <code>OR</code>: Hoặc.</li>
        <li><code>!</code>: Phủ định.</li>
    </ul>
    <pre>
        <code>
            &lt;?php
                $a = true;
                $b = false;

                var_dump($a && $b);  // Kết quả: false
                var_dump($a || $b);  // Kết quả: true
                var_dump(!$a);       // Kết quả: false
            ?&gt;
        </code>
    </pre>

    <h2>Toán tử tăng/giảm (Increment/Decrement Operators):</h2>
    <ul>
        <li><code>++</code>: Tăng giá trị biến lên 1.</li>
        <li><code>--</code>: Giảm giá trị biến đi 1.</li>
    </ul>
    <pre>
        <code>
            &lt;?php
                $a = 5;
                echo ++$a;  // Tăng trước, Kết quả: 6
                echo $a++;  // Tăng sau, Kết quả: 6, sau đó $a = 7
                echo $a;    // Kết quả: 7
            ?&gt;
        </code>
    </pre>

    <h2>Toán tử nối chuỗi (String Operators):</h2>
    <ul>
        <li><code>.</code>: Nối chuỗi.</li>
    </ul>
    <pre>
        <code>
            &lt;?php
                $ho = "Nguyễn";
                $ten = "Văn A";
                echo $ho . " " . $ten;  // Kết quả: Nguyễn Văn A
            ?&gt;
        </code>
    </pre>

    <h2>Toán tử điều kiện (Ternary Operator):</h2>
    <p>Cú pháp: <code>(condition) ? (true value) : (false value)</code></p>
    <pre>
        <code>
            &lt;?php
                $tuoi = 20;
                echo ($tuoi >= 18) ? "Đủ tuổi" : "Chưa đủ tuổi";  // Kết quả: Đủ tuổi
            ?&gt;
        </code>
    </pre>

    <h2>Ví dụ thực tế kết hợp biến và toán tử:</h2>
    <pre>
        <code>
            &lt;?php
            $x = 15;
            $y = 10;

            $tong = $x + $y;
            $hieu = $x - $y;
            $tich = $x * $y;
            $thuong = $x / $y;

            echo "Tổng: " . $tong ;       // Kết quả: Tổng: 25
            echo "Hiệu: " . $hieu ;       // Kết quả: Hiệu: 5
            echo "Tích: " . $tich ;       // Kết quả: Tích: 150
            echo "Thương: " . $thuong ;   // Kết quả: Thương: 1.5
            ?&gt;
        </code>
    </pre>
       
    </body>
</html>
