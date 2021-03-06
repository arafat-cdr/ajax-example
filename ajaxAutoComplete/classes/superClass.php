<?php
include('connection/pdo.php');

class superClass
{
	public $obj;
	
	public function __construct()
	{
		$this->obj = new pdo_connection();
	}

/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
		Insert Query start:

++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

	public function insert_data($setName,$setMail,$setPass)
	{
		$sql = "INSERT INTO tbl_admin(name,email,pass) VALUES(?,?,?)";
		$stmt = $this->obj->con->prepare($sql);

 		$stmt->bindParam(1,$name,PDO::PARAM_STR);
 		$stmt->bindParam(2,$email,PDO::PARAM_STR);
 		$stmt->bindParam(3,$pass,PDO::PARAM_INT);

		$name  = $setName;
		$email = $setMail;
		$pass  = $setPass;

		$this->obj->insert_query($stmt);	
	}


/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
		Insert Query end:

++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/


/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
		select Query start:

++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

	public function select_data()
	{
		$sql = "SELECT * FROM tbl_admin ORDER BY id DESC";
		$stmt =$this->obj->con->prepare($sql);
		$res = $this->obj->select_query($stmt);

		while ($res = $stmt->fetch(PDO::FETCH_OBJ)) 
		{
			echo "$res->name<br/>";
		}		
	}


/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
		Select Query end :

++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/


/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
		Update Query start:

++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

public function update_data($setName,$setMail,$setPass,$setId)
{

	$sql = "UPDATE  tbl_admin SET name=?,email=?,pass=? WHERE id= ?";
	$stmt = $this->obj->con->prepare($sql);

    $stmt->bindParam(1,$name,PDO::PARAM_STR);
 	$stmt->bindParam(2,$email,PDO::PARAM_STR);
 	$stmt->bindParam(3,$pass,PDO::PARAM_INT);
 	$stmt->bindParam(4,$id,PDO::PARAM_INT);

	$name  = $setName;
	$email = $setMail;
	$pass  = $setPass;
	$id    = $setId;

	$this->obj->update_query($stmt);
}


/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
		update Query end:

++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
		delete Query start :

++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

public function delete_data($set_id)
{
	$sql = "DELETE FROM tbl_admin WHERE id= ?";
	$stmt = $this->obj->con->prepare($sql);

	$stmt->bindParam(1,$id,PDO::PARAM_INT);
	$id = $set_id;

	$this->obj->delete_query($stmt);
}

/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
		delete Query end:

++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
		Search Name Query start :

++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

public function checkUser($userName)
{
	/*echo "<br/>You set Name as <mark>$userName</mark> we are searching ..... <br/>";*/
	$sql = "SELECT * FROM tbl_user WHERE name= ?";
	$stmt = $this->obj->con->prepare($sql);

	$stmt->bindParam(1,$name,PDO::PARAM_STR);
	$name = $userName;

	$res = $this->obj->select_query($stmt);
	if($res = $stmt->fetch(PDO::FETCH_OBJ))
	{
		return $res->name;
	}
}

/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
		Search name Query end:

++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
		autocomplete Name Query start :

++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

public function autocomplete($userName)
{
	/*echo "<br/>You set Name as <mark>$userName</mark> we are searching ..... <br/>";*/
	$sql = "SELECT * FROM tbl_user WHERE name LIKE '%$userName%'";
	$query = $this->obj->con->query($sql);
	
	return $query;
}

/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
		autocomplete name Query end:

++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
}

/*$obj_superClass = new superClass();*/
/*call any page the below obj and call the methos with the 
below procedure :P
 $obj_superClass = new superClass();

  $obj_superClass->update_data('Shaid','shaid@gmail.com',3456,18);*/

?>