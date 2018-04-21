<?php
$quanLiDanhSachSV = array(
    array(
        'ngayDang' => '04/19/2018',
        'gioDang' => '09h52m12s',
        'tieuDeBaiViet' => 'Thông Tin Về Khóa Học Trực Tuyến Mới Nhất',
        'noiDungBaiViet' => '......................'
    ),
    array(
        'ngayDang' => '04/19/2018',
        'gioDang' => '09h52m12s',
        'tieuDeBaiViet' => 'Thông Tin Về Khóa Học Trực Tuyến Mới Nhất',
        'noiDungBaiViet' => '......................'
    ),
);
    echo '<ul>';
    foreach($quanLiDanhSachSV as $key1 =>$a){
      echo '<li>';
      echo 'Ngày Đăng : '.$a['ngayDang'].'<br/>';
      echo 'Giờ Đăng : '.$a['gioDang'].'<br/>';
      echo 'Tiêu Đề Bài Viết : '.$a['tieuDeBaiViet'].'<br/>';
      echo 'Nội Dung Bài Viết : '.$a['noiDungBaiViet'].'<br/>';
      echo '</li>';
    }
    echo '</ul>';
?>
