	<div class="main">
				<?php 
				include("left(sidebar)/sidebar.php");
				 ?>
				<div class="maincontent">
					<?php 
					if (isset($_GET['quanly'])) {
						$tam = $_GET['quanly'];
					}else{
						$tam='';
					}
					if ($tam=='danhmucsanpham') {
						include("right(main)/danhmuc.php");
					}elseif ($tam=='giohang') {
						include("right(main)/giohang.php");
					}elseif ($tam=='lienhe') {
						include("right(main)/lienhe.php");
					}elseif($tam=='dangky'){
						inclued("main/dangky.php");
					}
					else{
						include("right(main)/danhmuc.php");
					} 
					?>
				</div>
			</div>