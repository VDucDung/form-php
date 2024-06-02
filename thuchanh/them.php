<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="xl_them.php" method="post">
        <table>
            <tr>
                <th>Mã sinh viên</th>
                <th>Họ và tên</th>
                <th>Toán</th>
                <th>Lý</th>
                <th>Hóa</th>
            </tr>
            <tr></tr>
                <td><input type="text" name="masv" id="masv"></td>
                <td><input type="text" name="hoten" id="hoten"></td>
                <td><input type="text" name="toan" id="toan"></td>
                <td><input type="text" name="ly" id="ly"></td>
                <td><input type="text" name="hoa" id="hoa"></td>
            </tr>
            <tr><td colspan="5"><button type="submit">Thêm</button></td></tr>
        </table>
    </form>
</body>
</html>
