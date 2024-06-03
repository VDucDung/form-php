<?php
    $kn = mysqli_connect('localhost', 'root', '', 'ontap');
    if(!$kn){
      echo "<script>alert('Không thể kết nối CSDL');</script>";
    }else{
      $id = $_GET['id'];
      $sql = "DELETE FROM sinhviens WHERE id = $id";
      $result = mysqli_query($kn, $sql);
      if(!$result){
        echo "<script>alert('Không thể xóa sinh viên');</script>";
      }else{
        echo "<script>window.location.href='index.php'; alert('Xóa sinh viên thành công');</script>";
      }
  
      mysqli_close($kn);
    }
  ?>
