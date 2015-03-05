<?php
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
 error_reporting(E_ALL);
        ini_set('display_errors', 'On');
class Baza {
    public $_host = "localhost";
    public $_user = "WebDiP2012_087";
    public $_database = "WebDiP2012_087";
    public $_pass = "admin_v9Bl";

function dajKorisnike() {
        $korisnici = array();
        $conn = new mysqli($this->_host, $this->_user, $this->_pass, $this->_database);
        if ($conn->connect_error) {
            echo $conn->connect_error;
        } else {
            $conn->set_charset("utf8");
            $sql = "SELECT * FROM user";
            $rs = $conn->query($sql);
            if ($rs) {
                while ($red = $rs->fetch_assoc()) {
                    $korisnici[] = $red;
                }
            } else {
                echo $conn->error . " upit:" . $sql;
            }
        }
        return $korisnici;
        $conn->close();
    }
}
?>
