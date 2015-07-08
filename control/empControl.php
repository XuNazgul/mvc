<?php
	//emp操作相关
	require_once (dirname ( __FILE__ ) . '/' . '../service/empService.php');
	require_once (dirname ( __FILE__ ) . '/' . '../model/emp.php');
	$flag = $_REQUEST['flag'];
	$id = $_REQUEST['id'];
	$emp = new emp();
	$emp->setId($id);
	
	if($flag=='save'){
		$name = $_REQUEST['name'];
		$emp->setName($name);
		$email = $_REQUEST['email'];
		$emp->setEmail($email);
		$grade = $_REQUEST['grade'];
		$emp->setGrade($grade);
		$salary = $_REQUEST['salary'];
		$emp->setSalary($salary);
	}
	//函数对应关系
	$interfaces = array('change'=>'changeEmp','delete'=>'deleteEmp','add'=>'addEmp','save'=>'saveEmp');
	if(empty($interfaces[$flag])){
		exit();
	}
	//执行函数
	$interfaces[$flag]($emp);
	//修改用户和新建保存用户是一个意思，只不过新建没有初始数据而已
	function changeEmp($emp){
		header ( "location:../view/empInfo.php?flag=change&id=".$emp->getId() );
		exit ();
	}
	function deleteEmp($emp){
		$empService = new empService();
		$ret = $empService->delEmp($emp);
		if($ret){
			header ( "location:../view/empManage.php");
			exit ();
		}else{
			echo "empControl deleteEmp error";
		}
	}
	function addEmp($emp){
	}
	function saveEmp($emp){
		$ret = false;
		$empService = new empService();
		if($emp->getId()==-1){//add
			$ret = $empService->addEmp($emp);
		}else{//update
			$ret = $empService->updateEmp($emp);
		}
		if($ret){
			header ( "location:../view/empInfo.php?flag=show&id=".$emp->getId() );
			exit ();
		}else{
			echo "empControl saveEmp error";
		}
		
	}
	
?>