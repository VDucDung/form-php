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
      $nhapMang = $_POST['nhapMang'];
      $mang = explode(',', $nhapMang);
      rsort($mang);
      foreach($mang as $key => $value){
        if((float)$value % 5 == 0){
          $kq1.=$value.", ";
        }
        if((float)$value % 2 != 0){
          $kq2.=$value.", ";
        }
      
      }
      $kq4 = explode(",", $kq2)[0];
      sort($mang);
      $chanNhoNhat = array();
      foreach($mang as $key => $value){
        if((float)$value % 2 == 0){
          $kq3.=$value.", ";
        }
      }
      $kq5 = explode(",", $kq3)[0];
    }
  ?>

  <form action="" method="post">
    <table border=1>
      <tr>
        <th colspan=2>NHẬP MẢNG VÀ HIỆN THỊ</th>
      </tr>
      <tr>
        <th>Nhập mảng</th>
        <td>
          <input type="text" name="nhapMang" value="<?php echo $nhapMang; ?>">
        </td>
      </tr>
      <tr>
        <td colspan=2 align="center">
          <input type="submit" name="submit" value="Thực hiện" onclick="thucHien()">
          <input type="reset" name="reset" value="Xóa">
        </td>
      </tr>
      <tr>
        <th>Phần tử chia hết cho 5</th>
        <td>
          <input type="text" name="kq1" value="<?php echo $kq1; ?>">
        </td>
      </tr>
      <tr>
        <th>Phần tử mảng lẻ xếp giảm dần</th>
        <td>
          <input type="text" name="kq2" value="<?php echo $kq2; ?>">
        </td>
      </tr>
      <tr>
        <th>Phần tử mảng chẵn xếp tăng dần</th>
        <td>
          <input type="text" name="kq3" value="<?php echo $kq3; ?>">
        </td>
      </tr>
      <tr>
        <th>Phần tử mảng lẻ lớn nhất</th>
        <td>
          <input type="text" name="kq4" value="<?php echo $kq4; ?>">
        </td>
      </tr>
      <tr>
        <th>Phần tử mảng chẵn nhỏ nhất</th>
        <td>
          <input type="text" name="kq5" value="<?php echo $kq5; ?>">
        </td>
      </tr>
    </table>
  </form>
  <script>
    function thucHien(){
      let nhapMang = document.getElementsByName('nhapMang')[0].value;

      if(nhapMang == '' ) {
        alert("Vui lòng nhập mảng");
      }
    }
  </script>
</body>
</html>
