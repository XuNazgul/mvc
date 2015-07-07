<?php
	//emp操作相关
	
	$flag = $_REQUEST['flag'];
	$id = $_REQUEST['id'];
	//函数对应关系
	$interfaces = array('change'=>'changeEmp','delete'=>'deleteEmp','add'=>'addEmp');
	if(empty($interfaces[$flag])){
		exit();
	}
	//执行函数
	$interfaces[$flag]($id);
	
	function changeEmp($id){
		echo $id;
	}
	function deleteEmp($id){
		echo $id;
	}
	function addEmp($id){
		echo $id;
	}
	
?>