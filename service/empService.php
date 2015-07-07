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
	public function getEmpList( $start, $limit ){
		//调用数据库层
		$data = $this->empSqlCode->getEmpList( $start, $limit );
		$empList = array();
		foreach ($data as $key => $value){
			$emp = new emp();
			$emp->setId($value['id']);
			$emp->setName($value['name']);
			$emp->setEmail($value['email']);
			$emp->setGrade($value['grade']);
			$emp->setSalary($value['salary']);
			$empList[]= $emp;
		}
		//print_r($empList);
		return $empList;
	}
	
	//获取记录的可以分多少页  $pageSize:一页显示几个
	public function getEmpPage($pageSize){
		return ceil($this->empSqlCode->getEmpCount()/$pageSize);
	}
	
	public function getEmpInfo($emp){
		$value = $this->empSqlCode->getEmpInfo($emp->getId());
		$emp->setName($value['name']);
		$emp->setEmail($value['email']);
		$emp->setGrade($value['grade']);
		$emp->setSalary($value['salary']);
	}
}
?>