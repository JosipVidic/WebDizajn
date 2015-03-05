<?php
require_once 'DBconfig.php';
class Korisnik{

	
	private $kime;
	private $tip;
	private $uid;

	function prijavi($kime, $lozinka){
		$this->kime = $kime;
       
       $dbc = new DBConfig();
       $conn = $dbc->spoji();
        
        if ($conn->connect_error) {
            echo $conn->connect_error;
        } else {
            $conn->set_charset("utf8");
            $sql = "SELECT id_tip_korisnikaFK, iduser FROM user WHERE username = '$kime' and lozinka = '$lozinka'";
            $rs = $conn->query($sql);
            if ($rs) {
                while ($red = $rs->fetch_row()) {
					$this->tip = $red[0];
					$this->uid = $red[1];
						
                    return $red;
                }
            } else {
                // provjera da li postoji u bazi
                //ako da povecaj br neuspjelih +1
                // ako ne nista
                echo $conn->error . " upit:" . $sql;
            }
        }
        $conn->close();
		return false;
	}
	
	function dajPodatke($uid){
         $dbc = new DBConfig();
        $conn = $dbc->spoji();
        if ($conn->connect_error) {
            echo $conn->connect_error;
        } else {
            $conn->set_charset("utf8");
            $sql = "SELECT * FROM user WHERE iduser = $uid";
            $rs = $conn->query($sql);
            if ($rs) {
                while ($red = $rs->fetch_assoc()) {
					$conn->close();	
                    return $red;
                }
            } else {
                echo $conn->error . " upit:" . $sql;
            }
        }
        $conn->close();
	}
	
	function izmijeniPodatke($novi_podaci){
         $dbc = new DBConfig();
        $conn = $dbc->spoji();
        if ($conn->connect_error) {
            echo $conn->connect_error;
        } else {
            $conn->set_charset("utf8");
            $sql = "
				UPDATE user SET
					ime = '$novi_podaci[ime]',
					prezime = '$novi_podaci[prezime]',
					email = '$novi_podaci[email]',
					username = '$novi_podaci[username]',
					lozinka = '$novi_podaci[lozinka]',
					tel = '$novi_podaci[tel]',
					bio = '$novi_podaci[bio]',
                                        id_tip_korisnikaFK = $novi_podaci[id_tip_korisnikaFK]
				WHERE iduser = $novi_podaci[uid]";
            $conn->query($sql);
        }
        $conn->close();	
	}
	
	function kreiraj_session(){
		session_start();
		$_SESSION["prijavljen"] = "da";
		$_SESSION["kime"] = $this->kime;
		$_SESSION["tip"] = $this->tip;
		$_SESSION["uid"] = $this->uid;
	}
	
	function unisti_session(){
		session_start();
		unset($_SESSION["kime"]);
		unset($_SESSION["tip"]);
		unset($_SESSION["prijavljen"]);
	}
        function register($novi_podaci){
        $dbc = new DBConfig();
        
        $conn = $dbc->spoji();
        if ($conn->connect_error) {
            echo $conn->connect_error;
        } else {
            $conn->set_charset("utf8");  
            $datum = (string)$novi_podaci['date'];
            $datum_korekcija = date('Y-m-d',strtotime($datum));
             $sql = "
				INSERT INTO user(ime,prezime,email,username,lozinka,tel,bio,idlokacijaFK,rodendan,spol,newsletter,id_tip_korisnikaFK) VALUES
					('$novi_podaci[ime]',
					'$novi_podaci[prezime]',
					'$novi_podaci[email]',
					'$novi_podaci[korisnicko]',
					'$novi_podaci[lozinka1]',
					'$novi_podaci[tel]',
					'$novi_podaci[zivotopis]',
                                        $novi_podaci[grad],
                                        STR_TO_DATE('$datum', '%Y-%m-%d'),
                                         '$novi_podaci[spol]',
                                          $novi_podaci[obavijest],
                                          3);";
            $conn->query($sql) or die("zajeb:" . mysqli_error($conn));
            
             $conn->close();
         
        }
        
        }
        
}
?>