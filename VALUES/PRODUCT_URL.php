<!DOCTYPE html>
<html>
<head>
<title>CPUB VIEW DISPLAY</title>

<style>

	table#DarnelTable tr:nth-child(even) {
		background-color: #eee;
	}
	
	table#DarnelTable tr:nth-child(odd) {
		background-color: #fff;
	}
	
	table#DarnelTable th {
		color: white;
		background-color: Blue;
	} 

</style>

</head>

<body>
	<br>
	<br>
	<h2 align='center'>PRODUCT URL SAMPLE DATA</h2>
	
<div align="center">
<a href="../index.php">HOME</a>
<br><br>
<?php

	include_once "../CORE/ez_sql_core.php";

	include_once "../CORE/ez_sql_oracle8_9.php";

	$db = new ezSQL_oracle8_9('DEV_PDH','dev_pdh','//10.6.3.147:1530/MDMORS');        

	$current_date = $db->get_var("SELECT " . $db->sysdate() . " FROM DUAL");
	echo "$current_date";

	$db->get_results("SELECT * FROM C_PUB_PRODUCT_URL where rownum < 100",ARRAY_N);
	$db->debug();
	
?>
<a href="../index.php">HOME</a>
</div>
</body>
</html>