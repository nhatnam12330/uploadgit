<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo from php</title>
</head>
<body>
    <form action="POST">
        <h2>Nhập tên đăng nhập </h2>
        <input type="text" name="ten_dang_nhap">
        <input type="submit" value="Đăng nhập">
    </form>
<?php
// lấy name từ chuỗi truy vấn và lưu trữu vào trong biến cục bộ
$name = $_POST['ten_dang_nhap'];
echo "<h3> chúc mừng $ name đã đăng nhập thành công!<h3>";


?>
</body>
</html>