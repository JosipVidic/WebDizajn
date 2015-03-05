<?php
require_once("korisnik.php");
$korisnik = new Korisnik();
if(isset($_GET["odjavi"])){
	$korisnik->unisti_session();

	header("Location: index.php");
} else {
	if($korisnik->prijavi($_POST["kime"], $_POST["lozinka"])){
		$korisnik->kreiraj_session();
		if($_POST["checkbox"]=="da"){
			setcookie("kime", $_POST["kime"], time() + 24 * 60 * 60);
		} else {
			setcookie("kime", $_POST["kime"], time() - 24 * 60 * 60);
		}
		header("Location: index.php");
	} else {
		echo "Prijava nije uspjela!";
	}
}

?>