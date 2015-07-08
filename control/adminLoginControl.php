<?php
	require_once (dirname ( __FILE__ ) . '/' . '../service/adminService.php');
	require_once (dirname ( __FILE__ ) . '/' . '../model/admin.php');
	
	$id = $_REQUEST['id'];
	$name = $_REQUEST ["name"];
	$password = $_REQUEST ["password"];
	if (empty ( $name ) || empty ( $password )) {
		header ( "location:../view/adminLogin.php?error=1" );
		exit ();
	}
	$admin = new admin ();
	$admin->setId ( $id );
	$admin->setName ( $name );
	$admin->setPassword ( $password );
		
	$adminService = new adminService ();
	// 验证是否有该用户
	if (! $adminService->existAdmin ( $admin )) { // 用户名不存在
		header ( "location:../view/adminLogin.php?error=2" );
		exit ();
	}
	// 验证密码是否一致
	if (! $adminService->checkPassword ( $admin )) { // 密码错误
		header ( "location:../view/adminLogin.php?error=3" );
		exit ();
	}
	// 都正确则跳转网页
	header ( "location:../view/empManage.php" );
?>