<?php
require_once (dirname ( __FILE__ ) . '/' . '../model/admin.php');
require_once (dirname ( __FILE__ ) . '/' . '../service/sql/adminSqlCode.php');
class adminService {
	private $adminSqlCode;
	public function __construct(){
		$this->adminSqlCode = new adminSqlCode ();
	}
	
	public function __destruct(){
		
	}
	// 检查用户名是否存在
	public function existAdmin($admin) {
		if (($admin->getName () == "root")) {
			return true;
		} else {
			return false;
		}
	}
	
	// 校验密码
	public function checkPassword($admin) {
		if ($admin->getPassword () == $this->adminSqlCode->getPassword ( $admin )) {
			return true;
		} else {
			return false;
		}
	}
}
?>