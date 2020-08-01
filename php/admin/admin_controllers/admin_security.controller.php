<?
class Admin_Security
{	
	public function __construct()
	{
		$this->result = array(
			"OK" => false,
			"message" => "",
			"admin" => null
		);
	}
	

	function Test()
	{
		if(@$_SESSION["admin"]==null)
		{
			$this->result["OK"] = true;
			$this->result["message"] = "admin not logged";
			echo(json_encode($this->result));
			return($this->result["OK"]);
		}

		$admin = unserialize($_SESSION["admin"]);

		if($admin->AdminId()>0)
		{
			$this->result["OK"] = true;
			$this->result["message"] = "admin logged as '{$admin->AdminName()}({$admin->AdminId()})'";
			$this->result["admin"] = $admin->ToJson();
		}

		echo(json_encode($this->result));
		return($this->result["OK"]);
	}

	function Login()
	{
		$login=$_REQUEST["login"];
		$password=$_REQUEST["password"];		

		$admin = AdminLib::LoginAdmin($login, $password);

		if($admin==null)
		{
			$this->result["message"]="cannot log in admin as '{$login}'";
			unset($_SESSION["admin"]);
			
			echo(json_encode($this->result));
			return($this->result["OK"]);
		}


		if($admin->AdminId()>0)
		{
			$this->result["message"]="admin logged as '{$admin->AdminName()}({$admin->AdminId()})'";

			$this->result["admin"] = $admin->ToJson();

			$this->result["OK"]=true;
		}

		//print_r($admin);

		$_SESSION["admin"] = serialize($admin);

		echo(json_encode($this->result));
		return($this->result["OK"]);
	}

	function Logout()
	{	
		unset($_SESSION["admin"]);
		
		$this->result["message"]="admin logged out";

		$this->result["admin"] = null;

		$this->result["OK"]=true;

		echo(json_encode($this->result));		
		return($this->result["OK"]);
	}

}
?>