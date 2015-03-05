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
            
            <h2> Dijagrami su izrađeni u: </h2>
            <ol class="linkovi">
                <li><a href="https://creately.com" target=_blank>Creately</a></li>
                <li><a href="http://yuml.me/diagram/scruffy/usecase/draw" target=_blank>Scruffy</a></li>
                <li><a href="http://www.mysql.com/products/workbench/" target=_blank>MySQLWorkbench</a></li>
            </ol>
            
        <?php include_once("footer.php"); ?>
