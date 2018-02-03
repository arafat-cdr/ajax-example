<?php
ob_start();
require('classes/superClass.php');
$suClsObj = new superClass();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$autoSave   = $_POST['autoSave'];
	$autoSaveId = $_POST['autoSaveId'];
	$Save = $suClsObj->autoSaveData($autoSave,$autoSaveId);
}
?>