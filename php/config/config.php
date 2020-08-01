<?

session_start();


if (!isset($old_error_reporting))
{
	error_reporting(E_ALL);
	@ini_set('display_errors', '1');
}
error_reporting(E_ERROR);
error_reporting(E_ALL);


ob_implicit_flush(0);
mb_internal_encoding("UTF-8");


define("FIX", "zzz_");
define("MAIL_ERROR", false);
define("MAIL_ERROR_EMAIL", "ppalasz@brtsoft.com");

$domain=$_SERVER["SERVER_NAME"];

if (!defined('DOMAIN')) {
	define("DOMAIN",$domain);
}	
	
if (!defined('WWW')) 
	define("WWW","http://".DOMAIN."/");

$db_config=Array();
switch(DOMAIN)
{
	case "react.brtsoft.pl":
		
		$path="/";
		$client="client/geoforum/";
		$modules["editions"]=1;

		define("TEST",1);

		$db_config["server"]	=	"localhost";
		$db_config["database"]	=	"brtsoft27";
		$db_config["login"]		=	"brtsoft27";
		$db_config["password"]	=	"wenzel0747";

	break;
}



$path="/";
if(!defined("PATH"))
	define("PATH",$path);


/*
//DDOS

$key="bannedIP";

$limitps = 100;
if (!isset($_SESSION['first_request'])){
    $_SESSION['requests'] = 0;
    $_SESSION['first_request'] = $_SERVER['REQUEST_TIME'];
}
$_SESSION['requests']++;
if ($_SESSION['requests']>=$limitps && strtotime($_SERVER['REQUEST_TIME'])-strtotime($_SESSION['first_request'])<=1){
    //write the IP to a banned_ips.log file and configure your server to retrieve the banned ips from there - now you will be handling this IP outside of PHP
    $_SESSION[$key]=1;
}elseif(strtotime($_SERVER['REQUEST_TIME'])-strtotime($_SESSION['first_request']) > 2){
    $_SESSION['requests'] = 0;
    $_SESSION['first_request'] = $_SERVER['REQUEST_TIME'];
}

if (@$_SESSION[$key]==1) {

	if(@$_SESSION['logged']!=1)	{	
		$myfile = fopen("logs.txt", "a") or die("Unable to open file!");
		$txt = " ".$_SERVER['REMOTE_ADDR']." \n";
		fwrite($myfile, "\n". $txt);
		fclose($myfile);
 		$_SESSION['logged']=1;
	}

   // header('HTTP/1.1 503 Service Unavailable');
    //die;
}

/////////////////

ob_implicit_flush(0);

mb_internal_encoding("UTF-8");

$db_config=Array();




$domain=$_SERVER["SERVER_NAME"];

$modules=Array();

//geoforum.brtsoft.pl
$tmp=explode(".",$_SERVER["SERVER_NAME"]);



define("SERVER_NAME",$tmp[sizeof($tmp)-2].".".$tmp[sizeof($tmp)-1]);

$lang_2="pl";
$lang="pl";


switch($_SERVER["SERVER_NAME"])
{
	case "english.geoforum.brtsoft.pl":
		$lang_2="pl";
		$lang="en";
		if(!defined("GOOGLE_API"))
			define("GOOGLE_API","ABQIAAAArg-neqCslOavKdizRuso0BTNNnx3i-xNKaezL5vHG55GHjx2ixQ3tjavoaZy0QKLXgR9S2PfhTScnQ");
	case "geoforum.brtsoft.pl":
		if(!defined("GOOGLE_API"))
			define("GOOGLE_API","ABQIAAAArg-neqCslOavKdizRuso0BTNNnx3i-xNKaezL5vHG55GHjx2ixQ3tjavoaZy0QKLXgR9S2PfhTScnQ");
		$path="/";
		$client="client/geoforum/";
		$modules["editions"]=1;

		define("TEST_GEO",1);

		$db_config["server"]	=	"localhost";
		$db_config["database"]	=	"brtsoft27";
		$db_config["login"]		=	"brtsoft27";
		$db_config["password"]	=	"wenzel0747";


		$id_departament=200;
	break;
	case "english.geoforum.pl":
		$lang_2="pl";
		$lang="en";

		if(!defined("GOOGLE_API"))
			define("GOOGLE_API","AIzaSyC_Yzp2zIUJ_JTEcmZKQaXfddSxgDltAXI");
	case "www.geoforum.pl":
		if(!defined("GOOGLE_API"))
			define("GOOGLE_API","AIzaSyC_Yzp2zIUJ_JTEcmZKQaXfddSxgDltAXI");
	case "geoforum.pl":
		if(!defined("GOOGLE_API"))
			define("GOOGLE_API","AIzaSyC_Yzp2zIUJ_JTEcmZKQaXfddSxgDltAXI");
	default:



		if(!defined("GOOGLE_API"))
			define("GOOGLE_API","AIzaSyC_Yzp2zIUJ_JTEcmZKQaXfddSxgDltAXI");
		$path="";
		$client="client/geoforum/";
		$modules["editions"]=1;

		define("TEST_GEO",0);

		$db_config["server"]	=	"localhost";
		$db_config["database"]	=	"01393027_geo";
		$db_config["login"]		=	"01393027_geo";
		$db_config["password"]	=	"jabadaaaaba988";

		$id_departament=200;
}

define("LANG_2",$lang_2);
define("LANG",$lang);


define("ID_DEPARTAMENT",$id_departament);

if(!defined("PATH"))
	define("PATH",$path);



if (!defined('DOMAIN')) {
    define("DOMAIN",$domain);
}


if (!defined('WWW_NS')) 
	define("WWW_NS","https://".DOMAIN."/");

if (!defined('WWW_SSL')) 
	define("WWW_SSL","https://".DOMAIN."/");

//if($_SERVER["HTTPS"]=="on")
	//define("WWW",WWW_SSL);
//else
	//define("WWW",WWW_NS);

define("WWW",WWW_SSL);

//define("CLIENT",$client); do const

define("WWW_CURRENT",WWW_SSL);

//if($_SERVER["HTTPS"]=="on")
	//define("WWW_CURRENT",WWW_SSL);
//else
	//define("WWW_CURRENT",WWW_NS);





define("BUFFER",0);

define("FLOOD_TIME",1);

if(!defined("AJAX"))
	define("AJAX",0);

if(AJAX==1)
	define("AJAX_UPLOAD",AJAX);

if(!defined("AJAX_UPLOAD"))
	define("AJAX_UPLOAD",0);

define("MOD_REWRITE",0);
define("MAX_REWRITE",4);

define("LANGS","pl");//,en");

/////////////////////////////////////////////////////////
define("ADMIN_MAIL","geoforum@brtsoft.pl");


define("MAP_ID","110817586841293343694.00043f0c5c48c7ebf549f");
define("ZOOM","6");
define("Y_START","51.9");
define("X_START","19.7");
/////////////////////////////////////////////////////////




//ini_set("session.cookie_domain", ".".DOMAIN);


if(@$_GET["show_warnings"]=="1")
{
	error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
}
else
{
	if (!isset($old_error_reporting))
	{
		error_reporting(E_ALL);
		@ini_set('display_errors', '1');
	}
	error_reporting(E_ERROR);
}


@ob_end_clean();

$canonical = str_replace("//","/",WWW.$_SERVER["REQUEST_URI"]);
$canonical = str_replace("https:/","https://",$canonical);

*/
?>