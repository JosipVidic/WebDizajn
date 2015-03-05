

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <script type="text/javascript" src="js/jquery.js"></script>


        <script type="text/javascript" src="js/jquery-ui-1.10.2.custom.min.js"></script>
        <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
        

        
        <script type="text/javascript" src="js/jovidic_grad.js"></script>
        <script type="text/javascript" src="js/jovidic.js"></script>
        <script type="text/javascript" src="js/jovidic_tablice.js"></script>
        
        
        <link rel="stylesheet" href="css/jquery-ui-1.10.2.custom.css"/>
        <link rel="stylesheet" href="css/jquery.dataTables.css"/>
        <link href ="css/novi.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
       <div class="all">
       <div class="header"> <div class="sadrzaj">
                <h1 >Josip Vidić</h1>
                <h2>Web dizajn i programiranje</h2> 
                
                <?php
				if(isset($_SESSION["prijavljen"]))

					echo '<ul><li><a  href="session.php?odjavi">Odjava</a></li></ul>';
				else{
					echo '<ul><li><a href="prijava.php">Prijava</a></li><br>
                                        <li><a href="registracija.php">Registracija</a></li></ul>';
                                }
			?>
</div></div>
<div class="samo">
        <?php include_once("navigacija.php"); ?>
        <div class="wrap_sadrzaj">
        <div class="sadrzaj">
            