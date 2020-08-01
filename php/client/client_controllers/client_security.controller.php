<?
class Security
{

	function Test()
	{
		echo("{$_SESSION["loggedID"]}|{$_SESSION["loggedAs"]}");

	}

	function Login()
	{
		$login=$_REQUEST["login"];
		$password=$_REQUEST["password"];

		echo("login for {$login} password {$password})");
		$_SESSION["loggedID"]=11;
		$_SESSION["loggedAs"]="User Paweł Pałasz";

	}

	function Logout()
	{	

		echo("loggedout");
		$_SESSION["loggedID"]=null;
		$_SESSION["loggedAs"]=null;

	}

}
?>