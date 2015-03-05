<?php
session_start();
?>

        <?php include_once("header.php"); ?>

             <div class="sekcija">  
        <section id="sekcija_biografija">
                <hgroup>
                    <h2>Biografija</h2>
                </hgroup>
                    <nav>
                        <a href="#sekcija_interesi">Interesi</a>
                        <a href="#sekcija_skolovanje">Školovanje</a>
                        <a href="#sekcija_seminarski">Seminarski rad</a>
                        
                    </nav> 
            <dl>
                <dt>O meni:</dt>
                <dd>Rođen sam u Sinju 1991. godine. U istom gradu završio sam osnovnu školu Fra Pavla Vučkovića te opću gimnaziju Dinka Šimunovića. Studiram na Fakultetu Organizacije i Informatike u Varaždinu. Trenutno sam 3. godina informacijskih sustava  na preddiplomskom studiju. Imam Microsoft Technology Associate certifikat iz područja Networking Fundamentals.</dd>
                <dt>Razlog upisa FOI-a:</dt>
                <dd>Zanimanje za informatiku i informacijske tehnologije </dd>
                <dt>Očekivanja od studija:</dt>
                <dd>Dobivanje znanja u raznim područjima informacijskih znanosti te zaposlenje u struci</dd>
           </dl>
            <img src="css/jv.png" alt="jovidic">
        </section>
        </div>
        <hr/>
          <div class="sekcija">  
        <section id="sekcija_interesi">
                <hgroup>
                    <h2>Interesi</h2>
                </hgroup>
                    <nav>
                        <a href="#sekcija_biografija">Biografija</a>
                        <a href="#sekcija_skolovanje">Školovanje</a>
                        <a href="#sekcija_seminarski">Seminarski rad</a>
                       
                    </nav>          
            <ul>
                <li>Moderna tehnologija</li>
                <li>Automobilska industrija</li>
                <li>Sport</li>
            </ul>
        </section>
          </div>
        <hr/>
          <div class="sekcija">  
        <section id="sekcija_skolovanje">
                <hgroup>
                    <h2>Školovanje</h2>
                </hgroup>
                    <nav>
                        <a href="#sekcija_biografija">Biografija</a>
                        <a href="#sekcija_interesi">Interesi</a>
                        <a href="#sekcija_seminarski">Seminarski rad</a>
                        
                    </nav>          
            <ol class="linkovi">
                <li><a href="http://os-frapvuckovica-sinj.skole.hr/" target=_blank>Fra Pavla Vučkovića</a></li>
                <li><a href="http://www.gimnazija-dsimunovica-sinj.skole.hr/" target=_blank>Opća Gimnazija Dinka Šimunovića</a></li>
                
            </ol>
        </section>
          </div>
        
        <hr/>
          <div class="sekcija">  
        <section id="sekcija_seminarski">

                    <h2>Seminarski rad</h2>

                    <nav>
                        <a href="#sekcija_biografija">Biografija</a>
                        <a href="#sekcija_skolovanje">Školovanje</a>
                        <a href="#sekcija_interesi">Interesi</a>
                        
                        
                    </nav>
                    <p>&nbsp;</p>
             <video width="320" height="240" controls>
            <source src="http://161.53.120.205/WebDiP/studenti/uploads/ankvesic-7531691119.mp4" type="video/mp4"> 
            
            </video>  
        </section>
          
        </div>
	
        <?php include_once("footer.php"); ?>