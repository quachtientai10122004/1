<?php
$sql_lietkesp_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
$query_lietkesp_danhmucsp = mysqli_query($mysqli,$sql_lietkesp_danhmucsp);
?>

	<p>Liệt kê danh mục sản phẩm</p>
	<table style="width: 100%"; border="1" style="border-collapse:collapse;" >
		<tr>
			<th>Id</th>
			<th>Tên danh mục</th>
			<th>Quản lý</th>
		</tr>
	<?php
	$i = 0;
	while($row = mysqli_fetch_array($query_lietkesp_danhmucsp)){
		$i++;
	?>
		<tr>
			<td><?php echo $i?></td>
			<td><?php echo $row['tendanhmuc']?></td>
			
		</tr>
	<?php
	}
	?>
	</table> 