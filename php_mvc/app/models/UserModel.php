<?php 

/**
 * 
 */
class UserModel 
{
	
	public $username;
	public $password;
	private $db;
public function __construct()
	{
		$this->db = new Database;
	}
public static function find($username, $password){
	 		$db= new Database;
			$req = $db->query("SELECT * FROM data_user WHERE username = '".$username."' and password= '".$password."'");
			return $db->resultSet(); 
			
			$auth = $req->fetchAll();
			$_SESSION["id_user"]=$auth["id_user"];
			if(count($auth)>1){
				return $auth['role'];
			}else{
				return 0;
			}
			foreach ($req->fetchAll() as $post) {
				$list[] = new UserModel($post['username'],$post['password']);
			}
			return $list;
		}
}

 ?>