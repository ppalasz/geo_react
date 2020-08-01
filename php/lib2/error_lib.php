<?


class ErrorLib
{

	static public function SQLError($error,$sql)
	{
        $url = $_SERVER["REQUEST_URI"];


        $return=$url."<hr>\n<br>\n".$error."<br>\n<br>\n".$sql."<br>\n<hr>\n";
        
        if(MAIL_ERROR)
	    {
		   mail(MAIL_ERROR_EMAIL,WWW." sql error'",$return);
		   $return="SQL error";

	    }
		return($return);
	}



}


?>