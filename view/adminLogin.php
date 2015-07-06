<!DOCTYPE html>
<!-- html5的标签 -->
<html>
<head>
<title>adminLogin</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
	<span>管理员登录</span>
	<br />
	<form action="../control/adminLoginControl.php" id="adminLoginForm" method="post">
		<input type="text" id="id" name="id" value="100" /><br /> <br /> 
		<input type="text" id="name" name="name" value="root" /><br /> <br />
		<input type="password" id="password" name="password" value="123" /><br /> <br />
		<input type="submit" name="submit" value="登录" />
	</form>
	<?php
		$error = $_REQUEST ["error"];
		$arr = array (
				"1" => "用户名或密码为空",
				"2" => "用户名不存在",
				"3" => "密码不正确" 
		);
		if (! empty ( $error )) {
			echo "<br/><span>{$arr[$error]}<span/>";
		}
	?>
</body>
</html>