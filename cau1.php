<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    error_reporting(E_ERROR | E_PARSE);
    if(isset($_POST['submit'])) {
      $soXe = $_POST['soXe'];
      $hinhThucThue = $_POST['hinhThucThue'];
      $gioNhan = (int)$_POST['gioNhan'];
      $gioTra = (int)$_POST['gioTra'];
      $thoiGianThue = (int)$_POST['thoiGianThue'];
      $tienThue = (float)$_POST['tienThue'];
      $tienGiam = (float)$_POST['tienGiam'];
      $tienPhaiTra = (float)$_POST['tienPhaiTra'];
      $donGia = (float)$_POST['donGia'];
      $thoiGianThue = $gioTra - $gioNhan;
      if($hinhThucThue == 'X3'){
        $tienThue = 350000;
      }else {
        $tienThue = $thoiGianThue * $donGia;
      }

      if($thoiGianThue > 2){
        $tienGiam = 0.2 * $tienThue;
      }else{
        $tienGiam = 0;
      }

      $tienPhaiTra = $tienThue - $tienGiam;
    }
  ?>

  <form action="" method="post">
    <table border=1>
      <tr>
        <th colspan=2>THỐNG KÊ THUÊ XE ĐẠP 2023</th>
      </tr>
      <tr>
        <th>Số xe</th>
        <td>
          <input type="text" name="soXe" value="<?php echo $soXe; ?>">
        </td>
      </tr>
      <tr>
        <th>Hình thức thuê</th>
        <td>
          <input type="text" name="hinhThucThue" value="<?php echo $hinhThucThue; ?>">
        </td>
      </tr>
      <tr>
        <th>Giờ nhận</th>
        <td>
          <input type="text" name="gioNhan" value="<?php echo $gioNhan; ?>">
        </td>
      </tr>
      <tr>
        <th>Giờ trả</th>
        <td>
          <input type="text" name="gioTra" value="<?php echo $gioTra; ?>">
        </td>
      </tr>
      <tr>
        <th>Thời gian thuê</th>
        <td>
          <input type="text" name="thoiGianThue" value="<?php echo $thoiGianThue; ?>">
        </td>
      </tr>
      <tr>
        <th>Đơn giá</th>
        <td>
          <input type="text" name="donGia" value="<?php echo $donGia; ?>">
        </td>
      </tr>
      <tr>
        <th>Tiền thuê</th>
        <td>
          <input type="text" name="tienThue" value="<?php echo $tienThue; ?>">
        </td>
      </tr>
      <tr>
        <th>Tiền giảm</th>
        <td>
          <input type="text" name="tienGiam" value="<?php echo $tienGiam; ?>">
        </td>
      </tr>
      <tr>
        <th>Tiền phải trả</th>
        <td>
          <input type="text" name="tienPhaiTra" value="<?php echo $tienPhaiTra; ?>">
        </td>
      </tr>
      <tr>
        <td colspan=2 align="center">
          <input type="submit" name="submit" value="Tính tiền" onclick="tinhTien()">
          <input type="reset" name="reset" value="Xóa">
        </td>
      </tr>
    </table>
  </form>
  <script>
    function tinhTien(){
      let soXe = document.getElementsByName('soXe')[0].value;
      let hinhThucThue = document.getElementsByName('hinhThucThue')[0].value;
      let gioNhan = document.getElementsByName('gioNhan')[0].value;
      let gioTra = document.getElementsByName('gioTra')[0].value;
      let donGia = document.getElementsByName('donGia')[0].value;

      if(soXe == '' || hinhThucThue == '' || gioNhan == '' || gioTra == '' || donGia == '') {
        alert("Vui lòng nhập đầy đủ thông tin");
      }
    }
  </script>
</body>
</html>
