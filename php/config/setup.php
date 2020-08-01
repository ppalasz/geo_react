<?



$link="?";

foreach ($_GET as $var => $value)
{

	switch($var)
	{
		case "lang":
			break;
		default:
			if($link!="")
				$link.="&amp;";
			if(is_array($value))
				$value=implode(",",$value);

			$link.=htmlspecialchars($var)."=".htmlspecialchars($value);

	}

}


$is_bot=0;
if(@$_SESSION["bot"]=="")
{
	if (!class_exists('BotFunctions')) {
		@include_once("../lib/bot_functions.php");
	}
	$is_bot=BotFunctions::is_bot();
}
define("BOT",$is_bot);




$_SESSION["bot"]=$is_bot;

$hour=(int)date('H');

if(BOT && ($hour>5) && ($hour<22))
{
	//exit();

}

$user_id=@$_COOKIE[FIX."user_id"];

if($user_id=="")
{
	$user_id=MD5($_SERVER["REMOTE_ADDR"]+RAND(10000,999999));
	setcookie(FIX."user_id",$user_id,time()+3600*24*365*100,"/",DOMAIN);

}

define("USER_ID",$user_id);






define("ID",(int)@$_GET["id"]);

define("ID_AREA",(int)@$_GET["area"]);


////////////////////////////////////////////////////////
$id_menu_texts=@$_GET["menu"];
$tmp=explode(",",@$id_menu_texts);








//no suprises in menu parameter, only integers
function set_menu_ids(&$item,$key)
{
	$item=(int)$item;
}
array_walk($tmp, 'set_menu_ids');
$id_menu_texts=implode(",",$tmp);



$id_menu_text=@$tmp[sizeof($tmp)-1];
$base_id_menu_text=@$tmp[0];

define("ID_MENU_TEXTS",$id_menu_texts);
define("ID_MENU_TEXT",$id_menu_text);

if(!defined("BASE_ID_MENU_TEXT"))
	define("BASE_ID_MENU_TEXT",$base_id_menu_text);


$page=@$_GET["page"];

if(($page=="")&&(ID_MENU_TEXT==""))
	$page="start";

define("PAGE",$page);







$mode=0;

if(PAGE!="")
{
	$page_parts=explode("_",PAGE);
	if((@$page_parts[0]=="admin") )
	{

		$mode=ADMIN_MODE;
	}
	else
		if(@$page_parts[0]=="user")
		{

			$mode=USER_MODE;
		}
		else
		{

			$mode=COMMON_MODE;
		}

	unset($page_parts);
}


define("MODE",$mode);
unset($mode);

?>