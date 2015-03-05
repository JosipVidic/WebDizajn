<?php

session_start();
if(isset($_SESSION["prijavljen"]) && $_SESSION["prijavljen"] == "da"){
	if($_SESSION["tip"]!=1 && $_GET["idKorisnika"]!=$_SESSION["uid"]){
		header("Location: tablice.php");
	}
	require_once("korisnik.php");
	$korisnik = new Korisnik();
	if(isset($_POST["submit"])){
		$korisnik->izmijeniPodatke($_POST);
		header("Location: tablice.php");
	} else {
		$podaci_o_korisniku = $korisnik->dajPodatke($_GET["idKorisnika"]);	
	}
} else {
	header("Location: prijava.php");
}

?>
             <?php include_once("header.php"); ?>
            <div>
            <form id="uredi" method="post" name="registracija" action="uredi.php">
				<input type="hidden" name="uid" value="<?php echo $podaci_o_korisniku["iduser"] ?>"/>
                <table>
                    <tr>
                        <td >
                            <label for="ime">Ime: </label>
                        </td>
                        <td>
                            <input type="text" id="ime" name="ime" value="<?php echo $podaci_o_korisniku["ime"] ?>" size="20" maxlength="15"  placeholder="Ime">
                            <span id="error_name"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="prezime">Prezime: </label>
                        </td>
                        <td>
                            <input type="text" id="prezime" value="<?php echo $podaci_o_korisniku["prezime"] ?>" name="prezime" size="20" maxlength="15"  placeholder="Prezime">
                            <span id="error_surname"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email">Email (@foi.hr): </label>
                        </td>
                        <td>
                            <input type="text" id="email" value="<?php echo $podaci_o_korisniku["email"] ?>" name="email" size="20"  placeholder="Email" >
                            <span id="email_error"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="korisnicko">Korisničko ime:</label>
                        </td>
                        <td>
                            <input type="text" id="korisnicko"  value="<?php echo $podaci_o_korisniku["username"] ?>" name="username" size="20"  placeholder="Korisničko ime" >
                            <span id="error_user"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="lozinka1">Lozinka </label>
                        </td>
                        <td>
                            <input type="text" value="<?php echo $podaci_o_korisniku["lozinka"] ?>" id="lozinka1" name="lozinka" size="20"  placeholder="Lozinka" >
                            <span id="error_password2"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="tel">Broj telefona: </label>
                        </td>
                        <td>
                            <input type="tel" id="tel" value="<?php echo $podaci_o_korisniku["tel"] ?>" name="tel" size="38" pattern='\d\d\d \d\d\d\d\d\d\d' placeholder="Unesite broj telefona (XXX XXXXXXX)" title="Unesite broj telefona u formatu XXX XXXXXXX" >
                            <span id="error_tel"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="zivotopis">Životopis: </label>
                        </td>
                        <td>
                            <textarea name="bio" id="zivotopis" rows="7" cols="34" maxlength="280" placeholder="Životopis..." >
							<?php echo $podaci_o_korisniku["bio"] ?>
							</textarea>
                        </td>
                    </tr>
                    
                    <?php 
                    $uid = $_SESSION["uid"];
                    $user = new Korisnik();
                    $upodaci = $user->dajPodatke($uid);
                    $tip = $upodaci['id_tip_korisnikaFK'];
                    if($tip == 1){ 
                        ?>
                      <tr>
                        <td>
                            <label for="tip">Tip:</label>
                             
                        </td>
                        <td>
                                 <select id="tip" name="id_tip_korisnikaFK" >
                                    <option  value="1" >User</option>
                                    <option  value="2" >Moderator</option>
                                    <option  value="3">Administrator</option>
                                    
                            </select>
                      </td>
                    </tr>
                     <?php } ?>
                    <tr>
                        <td>
                            <input class="gumb" type="reset" value=" Inicijaliziraj ">
                        </td>
                        <td>
                             <input class="gumb" type="submit" id="submit" name="submit" value="Potvrdi izmjene!">
                             <span id="submit_error"></span>
                        </td>

                    </tr>
                    
                </table>
               
            </form>
            </div>
          <?php include_once("footer.php"); ?>