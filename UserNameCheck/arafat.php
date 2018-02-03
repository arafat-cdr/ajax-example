<?php
require('classes/superClass.php');
$suClsObj = new superClass();

if(isset($_POST['userName']))
{
	$userName = $_POST['userName'];
	echo "<mark>$userName</mark>";
	$user = $suClsObj->checkUser($userName);
}

?>
<div>
<?php
	if($userName=="")
	{
		echo "<span class = 'text-danger'> Please Insert a User Name </span>";
	}
	else if($user)
	{
		echo "<span class = 'text-danger'> Sorry $user Already Exit in dataBase </span>";
	}
	else
	{
		echo "<span class = 'text-success'> Welcome !! $userName Is Available </span> .. !!";
	}
	?>
</div>