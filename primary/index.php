<?php
	header("Content-type:text/html;charset=utf-8");
	
	// 连接数据库
	$conn = mysql_connect("localhost","root","root") or die(mysql_error());
	// 选择数据库
	mysql_db_select("primary",$conn) or die(mysql_error());

