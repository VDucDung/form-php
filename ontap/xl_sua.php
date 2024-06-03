<?php
    $kn = mysqli_connect('localhost', 'root', '', 'ontap');
    if(!$kn){
      echo "<script>alert('Không thể kết nối CSDL');</script>";
    }else{
      $id = $_POST['id'];
      $hoten = $_POST['hoten'];
      $gioitinh = $_POST['gioitinh'];
      $quequan = $_POST['quequan'];
      $target_dir = "img/";
      $base_name = basename($_FILES["hinhanh"]["name"]);
      $target_file = $target_dir . basename($_FILES["hinhanh"]["name"]);
     if($_FILES["hinhanh"]["tmp_name"]){
      if(move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)){
        $sql = "UPDATE sinhviens SET hoten = '$hoten', gioitinh = '$gioitinh', hinhanh = '$base_name', quequan = '$quequan' WHERE id = $id";
        $result = mysqli_query($kn, $sql);
        if(!$result){
          echo "<script>alert('Không thể sửa thông tin sinh viên');</script>";
        }else{
          echo "<script>window.location.href='index.php'; alert('Cập nhập thông tin sinh viên thành công');</script>";
        }
      }else{
        echo "<script>window.location.href='sua.php'; alert('Không thể upload hình ảnh');</script>";
      }
     }else{
      $sql = "UPDATE sinhviens SET hoten = '$hoten', gioitinh = '$gioitinh', quequan = '$quequan' WHERE id = $id";
      $result = mysqli_query($kn, $sql);
      if(!$result){
        echo "<script>alert('Không thể sửa thông tin sinh viên');</script>";
      }else{
        echo "<script>window.location.href='index.php'; alert('Cập nhập thông tin sinh viên thành công');</script>";
      }
     }
  
      mysqli_close($kn);
    }
  ?>
