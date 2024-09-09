$(document).ready(function() {
    // Hàm để thêm giá trị vào màn hình tính toán
    function appendToDisplay(value) {
        // Lấy giá trị hiện tại của ô hiển thị
        var currentValue = $('#result').val();
        // Cập nhật giá trị hiển thị bằng cách thêm giá trị mới vào cuối giá trị hiện tại
        $('#result').val(currentValue + value);
    }

    // Hàm để xóa màn hình tính toán
    function clearDisplay() {
        // Đặt giá trị của ô hiển thị thành rỗng
        $('#result').val('');
    }

    // Hàm để tính toán kết quả và gửi tới máy chủ
    function calculate() {
        // Lấy biểu thức toán học từ ô hiển thị
        var expression = $('#result').val();

        // Gửi dữ liệu tới máy chủ để tính toán
        $.ajax({
            url: 'calculate.php',  // Địa chỉ tệp PHP xử lý phép toán
            type: 'POST',          // Phương thức gửi dữ liệu là POST
            data: { expression: expression },  // Dữ liệu gửi đi (biểu thức toán học)
            success: function(response) {
                // Hiển thị kết quả trả về từ máy chủ
                $('#result').val(response);
            },
            error: function() {
                // Nếu có lỗi, hiển thị thông báo lỗi
                $('#result').val('Error');
            }
        });
    }

    // Gán các hàm trên cho các sự kiện của các nút bấm
    window.appendToDisplay = appendToDisplay;
    window.clearDisplay = clearDisplay;
    window.calculate = calculate;
});
