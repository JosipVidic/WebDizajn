<?php
class DBConfig {
    public $_host = "localhost";
    public $_user = "root";
    public $_pass = "";
    public $_database = "admin_v9Bl";    
    
    public function spoji(){
        
        $conn = new mysqli($this->_host, $this->_user, $this->_pass, $this->_database);
        $conn->set_charset("utf8");
        return $conn;
    }
    
    public function dajGradove(){
        $conn = new mysqli($this->_host, $this->_user, $this->_pass, $this->_database);
        $conn->set_charset("utf8");
        $lokacije = array();
          $sql = "SELECT idlokacija,grad FROM lokacija";
            $rs = $conn->query($sql);
            if ($rs) {
                while ($red = $rs->fetch_assoc()) {
		$lokacije[] = $red;
                }
            } else {
                echo $conn->error . " upit:" . $sql;
            }
            $conn->close();	
            return $lokacije;
    }
}
?>
