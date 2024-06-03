<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
    $kn = mysqli_connect('localhost', 'root', '', 'ontap');
    if(!$kn){
      echo "<script>alert('Không thể kết nối CSDL');</script>";
    }else{
      $id = $_POST['id'];
      $sql = "SeLECT * FROM sinhviens WHERE id = $id";
      $result = mysqli_query($kn, $sql);

      $row = mysqli_fetch_array($result);
      if(!$row){
        echo "<script>window.location.href='timkiem.php'; alert('Không tìm thấy sinh viên');</script>";
      }
      $id = $row['id'];
      $hoten = $row['hoten'];
      $gioitinh = $row['gioitinh'];
      $hinhanh = $row['hinhanh'];
      $quequan = $row['quequan'];
      }
      mysqli_close($kn);
  ?>
  <table border=1 width=650 align='center'>>
    <tr>
      <th>Mã sinh viên</th>
      <th>Họ tên</th>
      <th>Giới tinh</th>
      <th>Hình ảnh</th>
      <th>Quê quán</th>
    </tr>
    <tr>
      <td>
        <?php echo $id; ?>
      </td>
      <td>
      <?php echo $hoten; ?>
      </td>
      <td>
      <?php echo $gioitinh; ?>
      </td>
      <td>
      <img src="img/<?php echo $hinhanh; ?>" width=100 height=100 alt="hinh anh">
      </td>
      <td> <?php echo $quequan; ?></td>
    </tr>
    <tr>
      <td colspan=5>
        <a href="index.php">Trang chủ</a>
      </td>
    </tr>
  </table>
</body>
</html>
