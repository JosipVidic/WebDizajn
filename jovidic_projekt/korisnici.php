<?php
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
 error_reporting(E_ALL);
        ini_set('display_errors', 'On');
        require_once 'DBconfig.php';
class Baza {
function dajKorisnike() {
    $dbc=new DBConfig();
    $conn=$dbc->spoji();
        $korisnici = array();
        
        if ($conn->connect_error) {
            echo $conn->connect_error;
        } else {
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
