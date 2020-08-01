<?




class AdminLib {

    static function LoginAdmin($login,$password)  {
        //check if exists
		$sql="select * from  ".FIX."administrator 
        where login='".DatabaseLib::pp_escape_string($login)."'  
        and password= '".DatabaseLib::pp_escape_string(SecurityLib::CodePassword($password))."' ";
        
        //echo($sql);
        $desc=$_SERVER["REMOTE_ADDR"]." [".$_SERVER["REMOTE_HOST"]."]"; 
        $row=DatabaseLib::GetRow($sql);

        if(@$row[0]>0) {

            $id_admin = (integer)$row["id_administrator"];
            $is_super = (integer)$row["is_super"];
            $admin_name = $row["firstname"]." ".$row["surname"];
            
            $sql="update ".FIX."administrator set 
                last_login_readonly=NOW()
                ,logins_readonly=coalesce(logins_readonly,0)+1
                ,login_log=CONCAT(NOW(), ' - ".DatabaseLib::pp_escape_string($desc)."\n', COALESCE(login_log,'')) 
                where id_administrator='".$id_admin."' ";
            
                DatabaseLib::GetRow($sql);	
               
            
            return(new Admin($id_admin,$is_super,$admin_name));
        }

    }

}

?>