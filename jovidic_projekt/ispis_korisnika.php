<?php 

@session_start();

	require_once 'korisnici.php';
        require_once 'korisnik.php';
	$baza=new Baza();
	$users= $baza->dajKorisnike();
	echo '<table>';
	echo "<tr class=\"gumb\"><td>Ime</td><td class=\"glava\">Prezime</td><td class=\"glava\" >Email</td></tr>";
	foreach($users as $korisnik)
	{
		echo '<tr>';
		echo "<td  class=\"gumb2\">{$korisnik["ime"]}</td>";
		echo "<td  class=\"gumb2\">{$korisnik["prezime"]}</td>";
		echo "<td  class=\"gumb2\">{$korisnik["email"]}</td>";
                if(isset($_SESSION["prijavljen"])){ 
                    $uid = $_SESSION["uid"];
                    $user = new Korisnik();
                    $upodaci = $user->dajPodatke($uid);
                $tip = $upodaci['id_tip_korisnikaFK'];
                if ($tip == 1 || $uid == $korisnik['iduser']){
		echo "<td><a id=\"detail\" href=detalji.php?idKorisnika=".$korisnik['iduser']."&akcija=1><button id=\"details\" class=\"gumb\">Detalji</button></a></td>";
		echo "<td><a id=\"detail\" href=uredi.php?idKorisnika=".$korisnik['iduser']."><button id=\"details\" class=\"gumb\">Uredi</button></a></td>";
                    }
                }
                echo '</tr>'; 
	}
	echo '</table>';
?> 