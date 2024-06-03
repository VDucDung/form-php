<?php
    $kn = mysqli_connect('localhost', 'root', '', 'ontap');
    if(!$kn){
      echo "<script>alert('Không thể kết nối CSDL');</script>";
    }else{
      $hoten = $_POST['hoten'];
      $gioitinh = $_POST['gioitinh'];
      $quequan = $_POST['quequan'];
      $target_dir = "img/";
      $base_name = basename($_FILES["hinhanh"]["name"]);
      $target_file = $target_dir . basename($_FILES["hinhanh"]["name"]);
      if(move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)){
        $sql = "INSERT INTO sinhviens(hoten, gioitinh, hinhanh, quequan) VALUES('$hoten', '$gioitinh', '$base_name', '$quequan')";
        $result = mysqli_query($kn, $sql);
        if(!$result){
          echo "<script>alert('Không thể thêm sinh viên');</script>";
        }else{
          echo "<script>window.location.href='index.php'; alert('Thêm sinh viên thành công');</script>";
        }
      }else{
        echo "<script>alert('Không thể upload hình ảnh');</script>";
      }
  
      mysqli_close($kn);
    }
  ?>
