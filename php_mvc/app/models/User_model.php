<?php 

class User_model{

public $db;	
	
public function __construct()
	{
		$this->db = new Database;
	}

public function authen($username, $password){

		$res =$this->$db->query("SELECT * FROM data_user WHERE username='".$username."' and password='".$password."'");
			return $this->db->execute();
			$count=count($res);
			if ($count > 0) {
				if (count($count) > 0) {
		          $_SESSION['id_user'] = $result[0]['id_user'];
		          $_SESSION['username'] = $result[0]['username'];
		       	  $this->view('v_petani/index');
			}
		}

}
}

 ?>