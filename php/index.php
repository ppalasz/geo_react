<?

require("config/config.php");

require("lib2/error_lib.php");
require("lib2/security_lib.php");
require("lib2/database_lib.php");
require("lib2/admin_lib.php");

require("models/admin.php");

$request_url = $_SERVER['REQUEST_URI'];
$parts = explode('/', trim($request_url, '/'));

$controllersFolder="client/client_controllers";

if($parts[0]=="admin")
{
	$controllersFolder="admin/admin_controllers";
	$controller = "admin_".$parts[1];
	$method = explode('?',$parts[2])[0];
}
else
{
    $controllersFolder="client/client_controllers";
	$controller = "client_".$parts[0];
	$method = explode('?',$parts[1])[0];
}

$params = array_slice($parts,2); //remove first two elements aka controller & method
 
/*
echo('<pre>');
print_r($_GET);
echo('</pre>');
*/
 
$controllerFile= "{$controllersFolder}/".$controller.'.controller.php';

if( file_exists($controllerFile) ) 
{
    DatabaseLib::Connect($db_config);

    require_once($controllerFile);
    
    $controller_instance = new $controller;
    
    if( method_exists($controller,$method) ) {
        call_user_func( array( $controller_instance, $method ) );
    }
    else {
        die("controller method '{$method}' does not exist");
    }
}
else 
{
    die("controller file '{$controllerFile}' does not exist");
}

?>