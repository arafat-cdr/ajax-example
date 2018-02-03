<div>
<?php
ob_start();
require('classes/superClass.php');
$suClsObj = new superClass();
$checkRefresh;
if(isset($_POST['liveSearch']))
{
	$data = $_POST['liveSearch'];
	if($data == '')
	{
		header('location:index.php');
	}
	else
	{
	$res = $suClsObj->liveDataSearch($data);
	if($res->rowCount())
	{
		echo "<table style='margin-left:130px; color:red;'> <tr> <th>Id<th> <th>Name<th> <th>Email<th> </tr>";
		while ($reslt = $res->fetch(PDO::FETCH_OBJ)) 
		{
			echo "<tr> <th>$reslt->id<th> <th>$reslt->name<th> <th>$reslt->email<th> </tr>";
		}
		echo "</table>";
	}
	else
	{
		echo "<table style='margin-left:130px;'><tr><th><span style='color:red;'>Sorry No data Found</span></th></tr></table>";
	}
	}
}
?>
</div>