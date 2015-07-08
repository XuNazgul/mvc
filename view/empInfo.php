<!DOCTYPE html>
<!-- html5的标签 -->
<html>
<head>
<title>empInfo</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<?php
	//用户信息修改界面
	require_once (dirname ( __FILE__ ) . '/' . '../service/empService.php');
	require_once (dirname ( __FILE__ ) . '/' . '../model/emp.php');
	
	$id = $_REQUEST['id'];
	$flag = $_REQUEST['flag'];
	$empService = new empService ();
	$emp = new emp();
	$emp->setId($id);
	if($flag!="add"){
		if($id==-1){//如果不是添加的时候出现-1，肯定是出问题了
			echo $flag." error";
			exit();
		}
		
		$empService->getEmpInfo($emp);
	}else{
		
	}
	
	$readOnly = " ";
	$action = "'../control/empControl.php'";
	$flagNext = "'save'";
	if($flag=="show"){
		$readOnly = " readonly='readonly'";
		$action = "'../view/empInfo.php'";
		$flagNext = "change";
	}
	$submit = array('change'=>'保存修改','show'=>'修改用户','add'=>'确认添加');
	
?>

<form action=<?php echo $action;?>>
	<table>
		<tr>
			<td>id</td>
			<td><label><?php if($id!=-1){echo $emp->getId();}?></label> <!-- ID 为-1时，不需要显示了 -->
				<input name='flag' type="hidden" value=<?php echo $flagNext;?> /> <input
				name='id' type="hidden" value=<?php echo $emp->getId();?> /></td>
		</tr>
		<tr>
			<td>name</td>
			<td><input name='name' type='text'
				value=<?php echo $emp->getName();echo $readOnly;?> /></td>
		</tr>
		<tr>
			<td>email</td>
			<td><input name='email' type='text'
				value=<?php echo $emp->getEmail();echo $readOnly;?> /></td>
		</tr>
		<tr>
			<td>grade</td>
			<td><input name='grade' type='text'
				value=<?php echo $emp->getGrade();echo $readOnly;?> /></td>
		</tr>
		<tr>
			<td>salary</td>
			<td><input name='salary' type='text'
				value=<?php echo $emp->getSalary();echo $readOnly;?> /></td>
		</tr>
	</table>
	<input name='submit' type="submit" value=<?php echo $submit[$flag];?> />
</form>
	<br><a href="empManage.php"><input type="button" value="返回主页"/></a>

</body>
</html>