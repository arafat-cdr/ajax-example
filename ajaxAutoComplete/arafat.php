<?php
require('classes/superClass.php');
$suClsObj = new superClass();

if(isset($_POST['userName']))
{
	$userName = $_POST['userName'];
	echo "<mark>$userName</mark>";
	$user = $suClsObj->autocomplete($userName);
}
?>
<div>
	<?php
	echo "Form arafat.php page";
	if($user->rowCount())
	{
	while ($row =$user->fetch(PDO::FETCH_OBJ))
	{
	 echo "<ul style='list-style: none;'>
		<li style='width:150px; cursor: pointer; background:#f44336;'>$row->name<br/></li>
	</ul>";
	}	
	}
	else
	{
		echo "Sorry No result Found";
	}
	?>
</div>