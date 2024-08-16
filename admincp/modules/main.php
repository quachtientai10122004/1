<div class="clear"></div>
<div class="main">
	<?php
					if (isset($_GET['action'])&&$_GET['query']) {
						$tam = $_GET['action'];
						$query = $_GET['query'];
					}else{
						$tam='';
						$query='';
					}
					if ($tam=='quanlydanhmucsanpham'&& $query=='them') {
						include("modules/quanlyloaisanpham/them.php");
						include("modules/quanlyloaisanpham/lietkesp.php");
					}elseif($tam='quanlysanpham'&&$query=='them'){
						include("modules/quanlysp/them.php");
						
					}
					else{
						include("modules/dashboard.php");
					} 
	?>
</div>