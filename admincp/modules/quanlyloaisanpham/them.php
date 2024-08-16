<?php
	$sql_lietkesp_danhmucsp="SELECT *FROM tbl_danhmuc ORDER BY thutu DESC";
	$row_lietkesp_danhmucsp=mysqli_query($mysqli,$sql_lietkesp_danhmucsp);
?>
<p>Thêm danh mục sản phẩm</p>
<table border="1" width="50%" style="border-collapse:collapse;">
<form method="POST" action="modules/quanlyloaisanpham/xuly.php">
	<tr>
		<td>Tên danh mục</td>
		<td><input type="text" name="tendanhmuc"></td>
	</tr>
	<tr>
		<td>Thứ tự</td>
		<td><input type="text" name="thutu"></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="themdanhmuc" value="Thêm danh mục sản phẩm"></td>
	</tr>
</form>
</table>