<?php
require_once (dirname ( __FILE__ ) . '/' . '../model/emp.php');
require_once (dirname ( __FILE__ ) . '/' . '../service/sql/empSqlCode.php');
class empService{
	private $empSqlCode;
	public function __construct(){
		$this->empSqlCode = new empSqlCode ();
	}
	
	public function __destruct(){
		
	}
	
	//获取用户列表 $pageNum获取第几页 $pageSize一页显示几个
	public function getEmpList($pageNum,$pageSize){
		$start=($pageNum-1)*$pageSize;
		$limit=$pageSize;
		//调用数据库层
		
	}
	
	//获取记录的可以分多少页  $pageSize:一页显示几个
	public function getEmpPage($pageSize){
		return ceil($this->empSqlCode->getEmpCount()/$pageSize);
	}
}
?>