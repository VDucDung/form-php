<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1 align="center">THÊM SINH VIÊN</h1>

  <form action="xl_them.php" method="post" enctype="multipart/form-data">
    <table border=1 width=500 height=200 align="center">
      <tr>
        <th>Họ tên: </th>
        <td>
          <input type="text" name="hoten">
        </td>
      </tr>
      <tr>
        <th>Giới tính: </th>
        <td>
          <input type="text" name="gioitinh">
        </td>
      </tr>
      <tr>
        <th>Hình ảnh: </th>
        <td>
          <input type="file" name="hinhanh" accept="image/*">
        </td>
      </tr>
      <tr>
        <th>Quê quán: </th>
        <td>
          <input type="text" name="quequan">
        </td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" value="Thêm"></td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <a href="index.php"><input type="button" value="Trang chủ"></a>
        </td>
      </tr>
    </table>
  </form>
</body>
</html>
