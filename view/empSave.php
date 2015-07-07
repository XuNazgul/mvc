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
<form action="../control/empControl.php">
		<table>
			<tr>
				<td>id</td>
				<td><label><?php echo $emp->getId()?></label>
				<input name='flag' type="hidden" value='save' />
				<input name='id' type="hidden" value=<?php echo $emp->getId()?> /></td>
			</tr>
			<tr>
				<td>name</td>
				<td><input name='name' type='text'
					value=<?php echo $emp->getName()?> /></td>
			</tr>
			<tr>
				<td>email</td>
				<td><input name='email' type='text'
					value=<?php echo $emp->getEmail()?> /></td>
			</tr>
			<tr>
				<td>grade</td>
				<td><input name='grade' type='text'
					value=<?php echo $emp->getGrade()?> /></td>
			</tr>
			<tr>
				<td>salary</td>
				<td><input name='salary' type='text'
					value=<?php echo $emp->getSalary()?> /></td>
			</tr>
		</table>
		<input name='submit' type="submit" value='保存' />
	</form>


</body>
</html>