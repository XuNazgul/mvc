<?php
require_once (dirname ( __FILE__ ) . '/' . '../base/sqlBase.php');
require_once (dirname ( __FILE__ ) . '/' . '../../model/emp.php');

class empSqlCode extends sqlBase {
	public function __construct(){
		parent::__construct();
	}
	
	public  function __destruct(){
		parent::__destruct();
	}
	
	public function getEmpCount() {
		$sql = "select count(*) from emp;";
		$data = $this->exec_dql2 ( $sql );
		return $data [0] ['count(*)'];
	}
	
	public function getEmpList( $start, $limit ){
		$sql = "select * from emp order by id limit $start, $limit;";
		$data = $this->exec_dql2 ( $sql );
		return $data;
	}
}

?>