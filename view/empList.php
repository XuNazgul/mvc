<!DOCTYPE html>
<!-- html5的标签 -->
<html>
<head>
<title>empList</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
	<table>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>age</th>
			<th>grade</th>
			<th>enable</th>
		</tr>
		<?php
		require_once '../service/empService.php';
		$empService = new empService ();
		$pageSize = 10;
		$pageNum = $empService->getEmpPage ( $pageSize );
		$empService->getEmpList ( $pageNum, $pageSize );
		
		for($i = 0; $i < $pageSize; $i ++) {
			echo "<tr> </tr>";
		}
		?>
	</table>
</body>
</html>