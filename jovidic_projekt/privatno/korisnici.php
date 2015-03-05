<!DOCTYPE html>
<html>
    <head>
        <title>ispis</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <script type="text/javascript" src="js/jquery.js"></script>


        <script type="text/javascript" src="js/jquery-ui-1.10.2.custom.min.js"></script>
        <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
        


        <script type="text/javascript" src="js/jovidic.js"></script> 
        <script type="text/javascript" src="js/jovidic_tablice.js"></script>
        <link rel="stylesheet" href="css/jquery-ui-1.10.2.custom.css"/>
        <link rel="stylesheet" href="css/jquery.dataTables.css"/>
        <link href ="../css/jovidic.css" rel="stylesheet" type="text/css" />
        
    </head>
    <body>
        <div class="header">
                <h1 >Josip Vidić</h1>
                <h2>Web dizajn i programiranje</h2>
	</div>
        <div class="navigacija">
             <nav class="navigacija">
                    <ul>
                    <li><a href="../registracija.php">Registracija</a></li>
                    <li><a href="../prijava.html">Prijava</a></li>
                    <li><a href="../osobna2.html">Osobna</a></li>
                    <li><a href="../dokumentacija.html">Dokumentacija</a></li>
                    <li><a href="../tablice.php">Tablica</a></li>                   
                    <li><a href="../privatno/korisnici.php">Privatno</a></li>
                    </ul>
            </nav>
	</div>
        <div class="wrap_sadrzaj">
        <div class="sadrzaj">
            <?php 
                    require('korisnik.php');
                    $baza=new Baza();
                    $users= $baza->dajKorisnike();
                    echo '<table>';
                    echo "<tr class=\"gumb\"><td>Ime</td><td class=\"glava\">Prezime</td><td class=\"glava\" >Lozinka</td><td>Username</td></tr>";
                    foreach($users as $korisnik)
                    {
                        echo '<tr>';
                        echo "<td  class=\"gumb2\">{$korisnik["ime"]}</td>";
                        echo "<td  class=\"gumb2\">{$korisnik["prezime"]}</td>";
                        echo "<td  class=\"gumb2\">{$korisnik["lozinka"]}</td>";
                        echo "<td  class=\"gumb2\">{$korisnik["username"]}</td>";
                        echo '</tr>'; 
                    }
                    echo '</table>';
?> 
            
	</div>
        </div>
        <div class="footer">
            <table class="tablica">
                <tr>
                    <td>
                        <p><a href="http://validator.w3.org/check?uri=http://arka.foi.hr/WebDiP/2012/vjezba_03/jovidic/jovidic_tablice.html" target="_blank">
                                <img src="http://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSvSpQMNYB_YAMZ6Idf904AQxzNhfI4A-xqLnWvh9Pd4t4FekGW_A" alt="html5" />
                            </a></p>
                    </td>
                    <td>
                      <p>Vrijeme utrošeno: 25 sati</p>
                    </td>
                    <td>
                        <p>
                            <a href="http://jigsaw.w3.org/css-validator/check/referer">
                              <img class="valid" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" /></a></p>
                    </td>      
                </tr>          
            </table>
	</div>
    </body>
</html>
