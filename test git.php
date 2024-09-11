<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viết PHP script để hiển thị chuỗi và giá trị bên trong bảng.</title>
</head>
<body>
    <?php
    $a = 1000; 
$b = 1500;
$c = 2000;
echo "<table border=1 cellspacing=0 cellpading=0>  
		<tr> <td><font color=blue>Lương nhân viên tư vấn</td> <td>$a$</font></td></tr>   
		<tr> <td><font color=blue>Lương nhân viên kinh doanh</td> <td>$b$</font></td></tr> 
		<tr> <td><font color=blue>Lương nhân viên IT</td> <td>$c$</font></td></tr>  
		</table>";  

    ?>
</body>
</html>