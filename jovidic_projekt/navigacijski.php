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
           <table class="dijagramtab">
           <tr>
               <td>
                   <p><a href="dokumentacija/d_navigacijski.png" target="_blank">
                                <img class="dijagram" src="dokumentacija/d_navigacijski.png" alt="navigacijski" />
             </a></p>
               </td>
           </tr>
           <tr>
               <td>
                   <h2>Navigacijski <br> model</h2>
               </td>
           </tr>
           </table>
            
            

        <?php include_once("footer.php"); ?>
