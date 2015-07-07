<!DOCTYPE html>
<!-- html5的标签 -->
<html>
<head>
<title>empList</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<?php
	//用户信息修改界面
	require_once (dirname ( __FILE__ ) . '/' . '../service/empService.php');
	require_once (dirname ( __FILE__ ) . '/' . '../model/emp.php');
	$empService = new empService ();
	$emp = new emp();
	$id = $_REQUEST['id'];
	$emp->setId($id);
	$empService->getEmpInfo($emp);
	
?>

</body>
</html>