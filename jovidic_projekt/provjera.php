 <?php
 echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
  require_once('recaptchalib.php');
  $privatekey = "6LdV8OASAAAAAA9y6lbIhdbdQrtUKKDHJU7OBZd_";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    die ("<strong>CAPTCHA je netočno unesena!!</strong><hr><br>" .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else {
      echo "<em>CAPTCHA je točno unesena</em><hr><br>";
  }
  
  if($_POST){
      
      echo"UNESENI PODACI: <hr><br>";
      $error = 0;
      foreach ($_POST as $id=>$vrijednost){
          if ($vrijednost== "") {
              //echo $id.'= <strong>Polje je prazno!!!</strong>'."<hr><br>";
              $error ++;
          }
          else if($id=='email'){
              $mail=$vrijednost;
              $domena= explode('@', $mail);
              if ($domena[1] == "foi.hr"){
              //echo $id."=".$vrijednost;
              }
              else{
             // echo 'email nije ispravan<br>';
               $error ++;   
              }
                  
              }
              else if($id=='date'){
                  $datum = (string)$vrijednost;
                  $datum_korekcija = date('Y-m-d',strtotime($datum));
               //   echo "Datum korigirani: " . $datum_korekcija . "<hr><br>";
              }
              //else {echo $id."=".$vrijednost."<hr><br>";}
              }
           if($error == 0){
               //upis u bazu
              require_once("korisnik.php");
	      $korisnik = new Korisnik();
              $korisnik->register($_POST);
              echo "REgistracija je uspješna";
              
           }else{
               //greška
               echo "Greška pri registraciji";
           }
           
          }
      
  ?>
