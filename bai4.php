<?php
  $quanLiDanhSachSV = array(
    array(
      'tensanpham' => 'kem',
      'ngayban' => '20/4/2018',
      'giaban' => '5,000',
    ),
    array(
      'tensanpham' => 'kem',
      'ngayban' => '20/4/2018',
      'giaban' => '5,000',
    ),
    array(
      'tensanpham' => 'kem',
      'ngayban' => '20/4/2018',
      'giaban' => '5,000',
    ),
  );
  echo '<ul>';
  foreach($quanLiDanhSachSV as $key1 =>$a){
    echo '<li>';
    echo 'Tên sản phẩm : '.$a['tensanpham'].'<br/>';
    echo 'Ngày bán : '.$a['ngayban'].'<br/>';
    echo 'Giá bán : '.$a['giaban'].'<br/>';
    echo '</li>';
  }
  echo '</ul>';
 ?>
