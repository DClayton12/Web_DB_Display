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
	<h2 align='center'>TITLE STRUCTURE</h2>
	
<div align="center">
<a href="../index.php">HOME</a>
<br><br>
<?php

	include_once "../CORE/ez_sql_core.php";

	include_once "../CORE/ez_sql_oracle8_9.php";

	$db = new ezSQL_oracle8_9('DEV_PDH','dev_pdh','//10.6.3.147:1530/MDMORS');        

	$current_date = $db->get_var("SELECT " . $db->sysdate() . " FROM DUAL");
	echo "$current_date";

		$db->get_results("SELECT SUBSTR(TABLE_NAME, 7) AS MESSAGE_NAME, COLUMN_NAME AS ELEMENT_NAME, DATA_TYPE, case
		when data_type in ('CHAR','VARCHAR2') then char_length
		when data_type = 'NUMBER' and data_scale > 0 then  data_precision
		when data_type = 'NUMBER' and data_scale is null then 50
		when data_type = 'DATE' then 19
		else null
		end as LENGTH,
		COLUMN_ID AS ELEMENT_ORDER FROM USER_TAB_COLUMNS WHERE TABLE_NAME = 'C_PUB_TITLE'");
		$db->debug();

	
?>
<a href="../index.php">HOME</a>
</div>
</body>
</html>