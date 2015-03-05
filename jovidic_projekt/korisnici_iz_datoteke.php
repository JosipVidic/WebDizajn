 <?php      
            require('korisnici.php');
            $kor = array_slice(json_decode(file_get_contents('http://arka.foi.hr/WebDiP/2012/vjezba_05/korisnici.json'),true),0,15);
            $korisnik = array("slika" => "korisnici/vzec.jpg", "ime" => "Josip", "prezime" => "Vidic", "korisnicko_ime" => "jovidic", "email" => "jovidic@foi.hr");
            array_push($kor, $korisnik);
            echo "<table>";
            require_once('recaptchalib.php');
            echo "<tr class=\"gumb\"><td>Ime</td><td class=\"glava\">Prezime</td><td class=\"glava\" >Korisnicko</td><td class=\"glava\" >Slika</td><td class=\"glava\" >Email</td></tr>";
            foreach($kor as $korisnik) {
            echo '<tr>';
                        echo "<td  class=\"gumb2\">{$korisnik["ime"]}</td>";
                        echo "<td  class=\"gumb2\">{$korisnik["prezime"]}</td>";
                        echo "<td  class=\"gumb2\">{$korisnik["korisnicko_ime"]}</td>";
                        echo "<td class=\"gumb2\">"."<img src=\"../{$korisnik["slika"]}\" weight=50px height=50px >" . "</td>";
                        echo "<td class=\"gumb2\">";
            if ($korisnik["email"] != " ") {
                echo recaptcha_mailhide_html("01IwnBxmiigZqtJUyxcmQLyQ==", "7484c7b8ef2e279b7939c0a7b0b653d1", $korisnik["email"]);
            }
            
            }
            echo '</tr>'; 
            echo "</table>";
    ?>