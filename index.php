<!DOCTYPE html>
<html>
<head>
<title>CPUB VIEW DISPLAY</title>

<!--
Darnel Clayton
08/03/2015

UseCase: Allow business intelligence team to view sample records and table structure from the given Oracle database.

Description: Using PHP and ezSQL framework, I articulate to Oracle. A simple table is available on the index page.
Each row is a hyperlink to another PHP page. Each subsequent page articlates to the Oracle db and performs a query. 
To give the best representation of live data on the table/view each query is : SELECT * from table/viewname. 
Query results are displayed. User is given link to return home and navigate to view sample data of another table/view.
Lastly, the structure of all views is available for inspection.

Tools: PHP, ezSQL framework, Oracle Database
-->

<style>

	table#DarnelTable tr:nth-child(even) {
		background-color: #eee;
	}
	
	table#DarnelTable tr:nth-child(odd) {
		background-color: #fff;
	}
	
	table#DarnelTable th {
		color: black;
		background-color: #eee;
	} 
	
	#DarnelTable {


	}

</style>

</head>

<body>
	<br>
	<h2 align='center'>CPUB VIEW DISPLAY</h2>
	


<div align="center">
<a href="index.php">HOME</a>
<br><br>

<?php

	include_once "CORE/ez_sql_core.php";

	include_once "CORE/ez_sql_oracle8_9.php";

	$db = new ezSQL_oracle8_9('DEV_PDH','dev_pdh','//10.6.3.147:1530/MDMORS');        

	$current_date = $db->get_var("SELECT " . $db->sysdate() . " FROM DUAL");
	echo " $current_date";
?>
	<br><br>
	<table id="DarnelTable">
		<tr>
			<th>Message Number</th>
			<th>Message Values</th>
			<th>Message Stucture</th>	
		</tr>
		<tr>
			<td>1</td>
			<td><a href="VALUES/CONTRIBUTOR.php">CONTRIBUTOR</a></td>
			<td><a href="STRUCTURES/CONTRIBUTOR_STRUCTURE.php">CONTRIBUTOR STRUCTURE</a></td>
		</tr>
		<tr>
			<td>2</td>
			<td><a href="VALUES/DH_REFERENCE_DATA">DH_REFERENCE DATA</a></td>
			<td><a href="STRUCTURES/DH_REFERENCE_DATA_STRUCTURE.php">DH REFERENCE DATA STRUCTURE</a></td>
		</tr>
		<tr>
			<td>3</td>
			<td><a href="VALUES/IDENTIFIER.php">IDENTIFIER</a></td>
			<td><a href="STRUCTURES/IDENTIFIER_STRUCTURE.php">IDENTIFIER STRUCTURE</a></td>
		</tr>
		<tr>
			<td>4</td>
			<td><a href="VALUES/PRICE.php">PRICE</a></td>
			<td><a href="STRUCTURES/PRICE_STRUCTURE.php">PRICE STRUCTURE</a></td>
		</tr>
		<tr>
			<td>5</td>
			<td><a href="VALUES/PRODUCT.php">PRODUCT</a></td>
			<td><a href="STRUCTURES/PRODUCT_STRUCTURE.php">PRODUCT STRUCTURE</a></td>
		</tr>
		<tr>
			<td>6</td>
			<td><a href="VALUES/PRODUCT_CODES.php">PRODUCT CODES</a></td>
			<td><a href="STRUCTURES/PRODUCT_CODES_STRUCTURE.php">PRODUCT CODES STRUCTURE</a></td>
		</tr>
		<tr>
			<td>7</td>
			<td><a href="VALUES/PRODUCT_CONTRIBUTOR.php">PRODUCT CONTRIBUTOR</a></td>
			<td><a href="STRUCTURES/PRODUCT_CONTRIBUTOR_STRUCTURE.php">PRODUCT CONTRIBUTOR STRUCTURE</a></td>
		</tr>
		<tr>
			<td>8</td>
			<td><a href="VALUES/PRODUCT_DATES.php">PRODUCT DATES</a></td>
			<td><a href="STRUCTURES/PRODUCT_DATES_STRUCTURE.php">PRODUCT DATES STRUCTURE</a></td>
		</tr>
		<tr>
			<td>9</td>
			<td><a href="VALUES/PRODUCT_DIMENSION.php">PRODUCT DIMENSION</a></td>
			<td><a href="STRUCTURES/PRODUCT_DIMENSION_STRUCTURE.php">PRODUCT DIMENSION STRUCTURE</a></td>
		</tr>
		<tr>
			<td>10</td>
			<td><a href="VALUES/PRODUCT_EXTENSION.php">PRODUCT EXTENSION</a></td>		
			<td><a href="STRUCTURES/PRODUCT_EXTENSION_STRUCTURE.php">PRODUCT EXTENSION STRUCTURE</a></td>
		</tr>
		<tr>
			<td>11</td>
			<td><a href="VALUES/PRODUCT_GROUP.php">PRODUCT GROUP</a></td>	
			<td><a href="STRUCTURES/PRODUCT_GROUP_STRUCTURE.php">PRODUCT GROUP STRUCTURE</a></td>
		</tr>
		<tr>
			<td>12</td>
			<td><a href="VALUES/PRODUCT_IMAGES.php">PRODUCT IMAGES</a></td>	
			<td><a href="STRUCTURES/PRODUCT_IMAGES_STRUCTURE.php">PRODUCT IMAGES STRUCTURE</a></td>
		</tr>
		<tr>
			<td>13</td>
			<td><a href="VALUES/PRODUCT_INVENTORY.php">PRODUCT INVENTORY</a></td>
			<td><a href="STRUCTURES/PRODUCT_INVENTORY_STRUCTURE.php">PRODUCT INVENTORY STRUCTURE</a></td>
		</tr>
		<tr>
			<td>14</td>
			<td><a href="VALUES/PRODUCT_REGION.php">PRODUCT REGION</a></td>	
			<td><a href="STRUCTURES/PRODUCT_REGION_STRUCTURE.php">PRODUCT REGION STRUCTURE</a></td>
		</tr>
		<tr>
			<td>15</td>
			<td><a href="VALUES/PRODUCT_RELATION.php">PRODUCT RELATION</a></td>	
			<td><a href="STRUCTURES/PRODUCT_RELATION_STRUCTURE.php">PRODUCT RELATION STRUCTURE</a></td>
		</tr>
		<tr>
			<td>16</td>
			<td><a href="VALUES/PRODUCT_STATUS.php">PRODUCT STATUS</a></td>		
			<td><a href="STRUCTURES/PRODUCT_STATUS_STRUCTURE.php">PRODUCT STATUS STRUCTURE</a></td>
		</tr>
		<tr>
			<td>17</td>
			<td><a href="VALUES/PRODUCT_STATUS_MTS.php">PRODUCT STATUS MTS</a></td>		
			<td><a href="STRUCTURES/PRODUCT_STATUS_MTS_STRUCTURE.php">PRODUCT STATUS MTS STRUCTURE</a></td>
		</tr>
		<tr>
			<td>18</td>
			<td><a href="VALUES/PRODUCT_TAXONOMY.php">PRODUCT TAXONOMY</a></td>	
			<td><a href="STRUCTURES/PRODUCT_TAXONOMY_STRUCTURE.php">PRODUCT TAXONOMY STRUCTURE</a></td>
		</tr>
		<tr>
			<td>19</td>
			<td><a href="VALUES/PRODUCT_URL.php">PRODUCT URL</a></td>
			<td><a href="STRUCTURES/PRODUCT_URL_STRUCTURE.php">PRODUCT URL STRUCTURE</a></td>
		</tr>
		<tr>
			<td>20</td>
			<td><a href="VALUES/REGION.php">REGION</a></td>		
			<td><a href="STRUCTURES/REGION_STRUCTURE.php">REGION STRUCTURE</a></td>
		</tr>
		<tr>
			<td>21</td>
			<td><a href="VALUES/SRC_REFERENCE_DATA.php">SRC REFERENCE DATA</a></td>		
			<td><a href="STRUCTURES/SRC_REFERENCE_DATA_STRUCTURE.php">SRC REFERENCE DATA STRUCTURE</a></td>
		</tr>
		<tr>
			<td>22</td>
			<td><a href="VALUES/TAXONOMY_NODES.php">TAXONOMY NODES</a></td>		
			<td><a href="STRUCTURES/TAXONOMY_NODES_STRUCTURE.php">TAXONOMY NODES STRUCTURE</a></td>
		</tr>
		<tr>
			<td>23</td>
			<td><a href="VALUES/TAXONOMY_RELATION.php">TAXONOMY RELATION</a></td>	
			<td><a href="STRUCTURES/TAXONOMY_RELATION_STRUCTURE.php">TAXONOMY RELATION STRUCTURE</a></td>
		</tr>
		<tr>
			<td>24</td>
			<td><a href="VALUES/TITLE.php">TITLE</a></td>		
			<td><a href="STRUCTURES/TITLE_STRUCTURE.php">TITLE STRUCTURE</a></td>
		</tr>
	</table>

	<a href="STRUCTURES/TblStructure.php">STRUCTURE OF ALL VIEWS</a>
	
</div>
<?php	
	// Get list of views from current database.
	//$my_tables = $db->get_results("SELECT VIEW_NAME FROM USER_VIEWS",ARRAY_N);
	//$db->debug();
	
	//$db->get_results("SELECT * FROM C_TITLE where rownum < 10000",ARRAY_N);
	//$db->debug();
	
	// Loop through each row of results..
	/*foreach ( $my_tables as $table )
	{
		// Get results of DESC table..
		$db->get_results("SELECT * FROM USER_TAB_COLUMNS WHERE TABLE_NAME = '$table[0]'");
		// Print out last query and results..
		$db->debug();
	}*/
	
	//select view_name from user_views where view_name like 'C_PUB%' order by 1;

	//select column_name, data_type, data_length from user_tab_columns where table_name='C_PUB_PRICE' order by column_id;

?>

</body>
</html>
