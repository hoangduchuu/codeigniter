<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>liene he</title>
</head>
<body>
	<h1>chao ban day la trang lien he</h1>
	<ul>
		<?php 
			foreach ($sodienthoai as $key) {
				echo '<li>';
				echo $key;
				echo '</li>';
			}

		 ?>

	</ul>
</body>
</html>