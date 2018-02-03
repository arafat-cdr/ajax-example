<div>
<?php
ob_start();
require('classes/superClass.php');
$suClsObj = new superClass();
$checkRefresh;
if(isset($_POST['body']))
{
	$body = $_POST['body'];
	if($body == '')
	{
		header('location:index.php');
	}
	else
	{
	$checkRefresh = $suClsObj->autoPost($body);
	if($checkRefresh->lastInsertId())
	{
		echo "<span style='color:green;'><br/>Successfull<br/><span>";
	}
	else
	{
		echo "Sorry Insert Fails fblike post";
	}
	}
	
}
//show autorefresh data from database using ajax
$stmt = $suClsObj->select_data();
if($stmt->rowCount())
{
	
	while ($res = $stmt->fetch(PDO::FETCH_OBJ)) 
		{
		echo "<ul style='list-style: none;'>
		<li style='margin-left:120px; width:150px; cursor: pointer; background:#f44336;'>$res->post<br/></li>
	</ul>";
		}
}
else
{
	echo "<span style='color:red;'>Sorry no data  Found</span>";
}

?>
</div>