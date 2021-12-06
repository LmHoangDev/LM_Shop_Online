<?php
   $filepath = realpath(dirname(__FILE__));
	include ($filepath.'/../lib/session.php');
	Session::checkLogin();
	include_once($filepath.'/../lib/database.php');
	include_once($filepath.'/../helpers/format.php');
?>
<?php
    class adminlogin 
    {   
        private $db;
        private $fm;
        public function __construct()
        {
            $this->db = new Database();
            $this->fm = new Format();
        }
        public function login_admin($adminUser,$adminPass){
            $adminUser =$this->fm->validation($adminUser);
            $adminPass = $this->fm->validation($adminPass);

            $adminUser = mysqli_real_escape_string($this->db->link,$adminUser);
            $adminPass = mysqli_real_escape_string($this->db->link,$adminPass);
            
            if(empty($adminUser) || empty($adminPass)){
                $alert = "Username and password not empty !";
                return $alert;
            }else{
                $query = "SELECT * FROM `tbl_admin` WHERE adminUser = '{$adminUser}' AND adminPass='{$adminPass}'";
                $result = $this->db->select($query);
                if($result==true){
                    $value = $result->fetch_assoc();
                    Session::set('adminlogin',true);
                    Session::set('adminId',$value['adminId']);
                    Session::set('adminUser',$value['adminUser']);
                    Session::set('adminName',$value['adminName']);
                    header('Location:index.php');
                }else{
                    $alert= "Username and password not match";
                    return $alert;
                }
            }
        }
    }
?>