<?

class Admin {

    private $id_admin;
    private $is_super;
    private $admin_name;

    public function __construct($id_admin, $is_super, $admin_name) {
        
        $this-> id_admin = $id_admin;
        $this-> is_super = $is_super;
        $this-> admin_name = $admin_name;
    }


    public function AdminId() {
        return $this->id_admin;
    }

    public function IsSuper() {
        return $this->is_super;
    }

    public function AdminName() {
        return $this->admin_name;
    }

    public function ToJson()
    {
        $result = array(
            "id_admin" => $this->AdminId(),
            "is_super" => $this->IsSuper(),
            "admin_name" => $this->AdminName()
        );
        return($result);
    }
}

?>