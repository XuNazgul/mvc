<?php
require_once (dirname ( __FILE__ ) . '/' . '../base/sqlBase.php');
require_once (dirname ( __FILE__ ) . '/' . '../../model/admin.php');

class adminSqlCode extends sqlBase {
	public function __construct(){
		parent::__construct();
	}
	public  function __destruct(){
		parent::__destruct();
	}
	
	public function getPassword($admin) {
		$sql = "select password from admin where id=" . $admin->getId () . ";";
		$data = $this->exec_dql2 ( $sql );
		return $data [0] ['password'];
	}
}

?>