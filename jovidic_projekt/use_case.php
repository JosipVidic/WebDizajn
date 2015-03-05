<?php
session_start();
?>

        <?php include_once("header.php"); ?>

             <div class="sekcija">  
                  <nav>
                        <a href="navigacijski.php">Navigacijski</a>
                        <a href="era.php">ERA</a>
                        <a href="sekvencijalni.php">Sekvencijalni</a>
                        <a href="use_case.php">Use case</a>     
                    </nav>  
            </div>
            <div class="dijagramdiv">
           <table class="dijagramtab">
           <tr>
               <td>
                   <p><a href="dokumentacija/d_neregistrirani.png" target="_blank">
                                <img class="dijagram" src="dokumentacija/d_neregistrirani.png" alt="neregistrirani" />
             </a></p>
               </td>
               <td>
                   <p><a href="dokumentacija/d_registrirani.png" target="_blank">
                                <img class="dijagram" src="dokumentacija/d_registrirani.png" alt="registrirani" />
             </a></p>
               </td>
               <td>
                   <p><a href="dokumentacija/d_moderator.png" target="_blank">
                                <img class="dijagram" src="dokumentacija/d_moderator.png" alt="moderator" />
             </a></p>
               </td>
               <td>
                   <p><a href="dokumentacija/d_administrator.png" target="_blank">
                                <img class="dijagram" src="dokumentacija/d_administrator.png" alt="administrator" />
             </a></p>
               </td>
           </tr>
           <tr>
               <td>
                   <h2>Neregistrirani <br> korisnik</h2>
               </td>
               <td>
                   <h2>Registrirani <br> korisnik</h2>
               </td>
               <td>
                   <h2>Moderator</h2>
               </td>
               <td>
                   <h2>Administrator</h2>
               </td>
           </tr>
           </table>
            </div>
            

        <?php include_once("footer.php"); ?>
