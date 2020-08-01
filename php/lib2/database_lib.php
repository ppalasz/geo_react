<?

class DatabaseLib
{

    static function pp_escape_string($string)
    {
        global $db_link;
        return mysqli_real_escape_string($db_link,$string);
    }

    static function pp_query ($sql){
        global $db_link;
        return mysqli_query ($db_link, $sql);
    }

    static function pp_error (){
        global $db_link;
        return(mysqli_error($db_link));
    }

    static function pp_fetch_array ($result){
        global $db_link;
        return mysqli_fetch_array($result, MYSQLI_BOTH);
    }

    static function pp_insert_id(){
        global $db_link;
        return mysqli_insert_id($db_link);
    }

    static function pp_affected_rows(){
        global $db_link;
        return mysqli_affected_rows($db_link);
    }

    ////////////////////////////


	static function Connect($db_config)
	{
		global $my_database;	
		global $db_link;
	
		$db_link = mysqli_connect("".$db_config["server"], $db_config["login"], $db_config["password"]);

		if (mysqli_connect_errno())
		{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		// Check connection
		if ($db_link->connect_error) {
			die("Connection failed: " . $db_link->connect_error);
		}
	    
		mysqli_select_db ($db_link, $db_config["database"]);
		
		//LogActivity();
		
		$sql="SET character_set_client = utf8;";
		DatabaseLib::GetRow($sql);
		$sql="SET character_set_results = utf8;";
		DatabaseLib::GetRow($sql);
		$sql="SET character_set_connection = utf8;";
		DatabaseLib::GetRow($sql);
		$sql="SET character_set_server= utf8;";
		DatabaseLib::GetRow($sql);
		
		
		
		return($db_link);	
    }
    
    static function GetRow($sql,$field=-1)
	{

		global $db_link;
		$result=DatabaseLib::pp_query( $sql) 
				or die (ErrorLib::SQLError(DatabaseLib::pp_error(),$sql));		
		 
		if (!($row = @DatabaseLib::pp_fetch_array(@$result)))		
			return(false);
			
		mysqli_free_result($result);
		
		
		if($field>-1)
			return($row[$field]);
		else
			return($row);
	
	}


}

?>