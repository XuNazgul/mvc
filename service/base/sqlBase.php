<?php
class sqlBase {
	private $link;
	public function __construct() {
		$this->link = mysql_connect ( "localhost", "root", "123" ) or die ( 'could not connect' . mysql_error () );
		mysql_set_charset ( "utf8" );
		mysql_select_db ( "mvc", $this->link ) or die ( 'select db' . mysql_error () );
	}
	public function __destruct() {
		mysql_close ( $this->link );
	}
	
	// 执行dql语句 Data QueryLanguage 数据库查询语言
	public function exec_dql($sql) {
		$result = mysql_query ( $sql, $this->link ) or die ( mysql_error () );
		return $result;
	}
	public function exec_dql2($sql) {
		$data = array ();
		$result = mysql_query ( $sql, $this->link ) or die ( mysql_error () );
		while ( $row = mysql_fetch_assoc ( $result ) ) {//每次从结果集里面以数组形式取出一行记录 ['name'=>'nagul']
			$data [] = $row;//把所有的结果集放到一个数组 $data里面，$data则变成一个二维数组了
		}
		mysql_free_result ( $result );
		return $data;
	}
}

?>