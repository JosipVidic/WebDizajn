<?php
session_start();
if(!(isset($_SESSION["prijavljen"]) && $_SESSION["prijavljen"] == "da")){
	header("Location: prijava.php");
}

?>

        <?php include_once("header.php"); ?>

            <?php
                    require('korisnici.php');
                    $db = new Baza();
                    if(isset($_GET['akcija']) && isset($_GET['idKorisnika'])){
                    echo "<a href='tablice.php'><h2>Natrag</h2></a><br/> ";
                    $korisnici = $db->dajKorisnike();
                    if ($_GET['akcija'] == 1){
                            echo "<strong>Detalji korisnika: </strong> <br />";
                            echo "<table>";
                            foreach($korisnici as $korisnik) {
                                if ($korisnik['iduser'] == $_GET['idKorisnika']) {
                        
                        echo "<tr class=\"gumb\"><td>Korisničko ime</td><td>Ime</td><td>Prezime</td><td>E-mail</td><td>Spol</td><td>Životopis</td></tr>";		
                        echo "<tr>";
                        echo "<td class=\"gumb2\">{$korisnik["username"]}</td>";
						echo "<td class=\"gumb2\">{$korisnik["ime"]}</td>";
                        echo "<td class=\"gumb2\">{$korisnik["prezime"]}</td>";
                        echo "<td class=\"gumb2\">{$korisnik["email"]}</td>";
                        echo "<td class=\"gumb2\">{$korisnik["spol"]}</td>";
                        echo "<td class=\"gumb2\">{$korisnik["bio"]}</td>";
                        echo "</tr>";
                        
			}
		}
               echo "</table>";
	}
	} 
?>
        <?php include_once("footer.php"); ?>
