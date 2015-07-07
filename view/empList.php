<!DOCTYPE html>
<!-- html5的标签 -->
<html>
<head>
<title>empList</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
	<table border="1">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>email</th>
			<th>grade</th>
			<th>enable</th>
			<th>修改用户</th>
			<th>删除用户</th>
		</tr>
		<?php
		require_once (dirname ( __FILE__ ) . '/' . '../service/empService.php');
		require_once (dirname ( __FILE__ ) . '/' . '../model/emp.php');
		$empService = new empService ();
		$pageSize = 10;
		$pageNum = $empService->getEmpPage ( $pageSize );
		$start=($pageNum-1)*$pageSize;
		$limit=$pageSize;
		$empList = $empService->getEmpList ( $start, $limit );
		
		foreach ($empList as $key=>$value){
			echo "<tr>";
			echo "<td>".$value->getId()."</td>";
			echo "<td>".$value->getName()."</td>";
			echo "<td>".$value->getEmail()."</td>";
			echo "<td>".$value->getGrade()."</td>";
			echo "<td>".$value->getSalary()."</td>";
			echo "<td><a href='../control/empControl.php?flag=chang&id=".$value->getId()."'>修改用户</a></td>";
			echo "<td>删除用户</td>";
			echo "</tr>";
		}
		?>
	</table>
</body>
</html>