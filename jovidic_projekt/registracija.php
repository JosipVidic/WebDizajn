<?php
session_start();
require_once 'DBconfig.php';
?>

        <?php include_once("header.php"); ?>

            <div class="register">
            <form id="registracija" method="post" name="registracija" action="provjera.php">
                <table>
                    <tr>
                        <td >
                            <label for="ime">Ime: </label>
                        </td>
                        <td>
                            <input type="text" id="ime" name="ime" size="20" maxlength="15"  placeholder="Ime">
                            <span id="error_name"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="prezime">Prezime: </label>
                        </td>
                        <td>
                            <input type="text" id="prezime" name="prezime" size="20" maxlength="15"  placeholder="Prezime">
                            <span id="error_surname"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email">Email (@foi.hr): </label>
                        </td>
                        <td>
                            <input type="text" id="email" name="email" size="20"  placeholder="Email" >
                            <span id="email_error"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="korisnicko">Korisničko ime:</label>
                        </td>
                        <td>
                            <input type="text" id="korisnicko" name="korisnicko" size="20"  placeholder="Korisničko ime" >
                            <span id="error_user"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="lozinka1">Lozinka </label>
                        </td>
                        <td>
                            <input type="password" id="lozinka1" name="lozinka1" size="20"  placeholder="Lozinka" >
                            <span id="error_password2"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="lozinka2">Potvrdi lozinku </label>
                        </td>
                        <td>
                            
                            <input type="password" id="lozinka2" name="lozinka2" size="20" pattern=".{6,}" placeholder="Potvrdi lozinku" >
                            <span id="error_password"></span>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="tel">Broj telefona: </label>
                        </td>
                        <td>
                            <input type="tel" id="tel" name="tel" size="38" pattern='\d\d\d \d\d\d\d\d\d\d' placeholder="Unesite broj telefona (XXX XXXXXXX)" title="Unesite broj telefona u formatu XXX XXXXXXX" >
                            <span id="error_tel"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="grad">Grad: </label>
                        </td>
                        <td>
                            <?php
                            $dbc = new DBConfig();
                            $gradovi = $dbc->dajGradove();
                            echo '<select id="grad" name="grad" >';
                            foreach ($gradovi as $grad){
                                echo "<option  value=" .$grad['idlokacija']. " >".$grad['grad']."</option>";
                            }
                            echo '</select>';
                            ?>
                           
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="zivotopis">Životopis: </label>
                        </td>
                        <td>
                            <textarea name="zivotopis" id="zivotopis" rows="7" cols="34" maxlength="280" placeholder="Životopis..." ></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="date">Datum rođenja:</label>
                        </td>
                        <td>
                            <input type="date" id="date" name="date" >
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="spol">Spol:</label>
                        </td>
                        <td>
                            <select id="spol" name="spol" >
                                    <option  value="" >== Odaberi spol ==</option>
                                    <option  value=muski >Muški</option>
                                    <option  value=zenski>Ženski</option>
                                    
                            </select>
                            <span id="error_gender"></span>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <label for="obavijest">Želite li primati obavijesti?</label>
                        </td>
                        <td>
                            <input type="radio" name="obavijest" id="obavijest" value="1" required="required"> Da
                            <input type="radio" name="obavijest" id="obavijest1" value="0" required="required"> Ne
                            <span id="obavijesti_error"></span>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <label for="terms"> Da li ste pročitali uvjete korištenja?</label>
                        </td>
                        <td>
                            <input type="checkbox" name="terms" required="required" id="terms" value="Da" required="required" title="Prihvaćate li uvjete korištenja"/> Da
                        </td>

                    </tr>
                    <tr>
                        <td colspan="2">
                            <?php
                                require_once('recaptchalib.php');
                                $publickey = "6LdV8OASAAAAAPp1EBqqETIw1yuFe3LSnHaXVkBT";
                                echo recaptcha_get_html($publickey);
                                
                              ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="gumb" type="reset" value=" Inicijaliziraj ">
                        </td>
                        <td>
                             <input class="gumb" type="submit" id="submit" name="submit" value="Registriraj se">
                             <span id="submit_error"></span>
                        </td>

                    </tr>
                    
                </table>
               
            </form>
            </div>
             
        <?php include_once("footer.php"); ?>
