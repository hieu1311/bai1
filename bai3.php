<?php
$QuanLiDanhSachSV  = array(
 array(
   'ten' => 'Hiểu óc chó',
   'gioiTinh' => 'Gay',
   'NgaySinh' => '18/03/1999',
 ),
 array(
   'ten' => 'Hiểu óc chó',
   'gioiTinh' => 'Gay',
   'NgaySinh' => '18/03/1999',
 ),
 array(
   'ten' => 'Hiểu óc chó',
   'gioiTinh' => 'Gay',
  'NgaySinh' => '18/03/1999',
 ),
);
echo '<ul>';
foreach($QuanLiDanhSachSV as $key1 => $a){
    echo '<li>';
        echo 'Tên :'.$a['ten'].'<br/>';
        echo 'Ngày sinh'.$a['NgaySinh'].'<br/>';
        echo 'Giới tính'.$a['gioiTinh'].'<br/>';
    echo '</li>';
}
echo '</ul>';
?>
