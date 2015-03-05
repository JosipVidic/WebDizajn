<?php
/* 
	kontrola pristupa:
	- prijavljeni korisnik može vidjeti svačije detalje profila
*/
session_start();
if(!(isset($_SESSION["prijavljen"]) && $_SESSION["prijavljen"] == "da")){
	header("Location: prijava.php");
}

?>

        <?php include_once("header.php"); ?>

            <div>
                <?php
                $files = glob("images/upload/*.*");

                $colCnt=0;
                echo '<table>';

                for ($i=1; $i<count($files); $i++)
                {
                $colCnt++;
                    if ($colCnt==1)
                    echo '<tr>';
                    echo '<td width="25%" style="font-size:8.5px; font-family:arial">';

                    $num = $files[$i];

                    echo '<p>
                    <a class="galerija" href="'.$num.'" rel="lightbox[roadtrip]">
                    <img class="galerija" src="'.$num.'"  /></a>
                    </p> ';
  
                    print substr(substr($num,6,100),0,-4);

                    echo '</td>';

                    if ($colCnt==4)
                    {
                    echo '</tr>';
                    $colCnt=0;
                    }
                    }

                    echo '</table>';
                    ?>

            </div>
             
        <?php include_once("footer.php"); ?>
