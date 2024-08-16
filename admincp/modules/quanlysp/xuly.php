<?php
include('../../config/config.php');

$tensanpham = $_POST['tensanpham'];
$masp = $_POST['masp'];
$giasp = $_POST['giasp'];
$soluong = $_POST['soluong'];
$tomtat = $_POST['tomtat'];
$noidung = $_POST['noidung'];
$tinhtrang = $_POST['tinhtrang'];

$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = $_FILES['hinhanh']['name']; // Gán giá trị cho $hinhanh

if (isset($_POST['themsanpham'])) {
    $sql_them = "INSERT INTO tbl_sanpham (tensanpham, masp, giasp, soluong, hinhanh, noidung, tomtat, tinhtrang) 
                VALUES ('$tensanpham', '$masp', '$giasp', '$soluong', '$hinhanh', '$noidung', '$tomtat', '$tinhtrang')";

    if (mysqli_query($mysqli, $sql_them)) {
        move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh);
        header('Location:../../index.php?action=quanlysanpham&query=them');
    } else {
        // Xử lý lỗi
        echo "Error: " . $sql_them . "<br>" . mysqli_error($mysqli);
    }
} elseif (isset($_POST['suasanpham'])) {
    // Cần sửa lại câu lệnh UPDATE và các biến tương ứng
    $sql_update = "UPDATE tbl_sanpham SET tendanhmuc='$tenloaisp', thutu='$thutu' WHERE id_danhmuc='$_GET['iddanhmuc']'";
    // ...
} else {
    // ...
}
?>