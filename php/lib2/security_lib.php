<?

class SecurityLib
{
	static public function CodePassword($value)
	{
		//$value=sha1(md5(FIX.$value));
		$value=md5($value);
		
		return($value);	
    }
    
}

?>