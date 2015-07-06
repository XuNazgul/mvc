<?php 
	require_once (dirname ( __FILE__ ) . '/' . '../service/sql/empSqlCode.php');

	$empSqlCode = new empSqlCode();
	
	$data = $empSqlCode->getEmpCount();
	
?>