<?php
session_start();
?>

        <?php include_once("header.php"); ?>

            <div class="buybuy"><?php
            include('korisnik.php');
                for($i = 1; $i <= 10; $i++){
                echo '<ul class="thumbs">
                    <li class="loveshack">
                        <div class="thumb">
                        <img src="images/upload/1-test.jpg">
                        <h3>Proizvod</h3>  
                        <p>Kupi me kupi me kupi me kupi me kupi me kupi me</p>
                        ';
                        if(isset($_SESSION["prijavljen"])){       
                        $uid = $_SESSION["uid"];
                        $user = new Korisnik();
                        $upodaci = $user->dajPodatke($uid);
                        $tip = $upodaci['id_tip_korisnikaFK'];
                        if($tip <= 3){
                        echo '
                        <div class="user_controls"><input class="gumb" id="kupi" type="button" value="Kupi"></div>';
                        }
                        if ($tip <= 2) {
                        echo '
                        <div class="moderator_controls"><input class="gumb" type="button" value="Uredi"></div>';
                       }
                       if ($tip <= 1) {
                        echo '
                        <div class="admin_controls"><input class="gumb" type="button" value="Izbrisi"></div>';
                       }
                        
                        }
                        else{    
                            echo '<div class="all-controls"><p><input class="gumb" id="prijavi" type="button" value="Registriraj/Prijavi"></p></div>';
                        }
                        echo '
                      
                        </div>
                    </li>
        </ul>';
}
?>  </div>
              
<?php include_once("footer.php"); ?>
        