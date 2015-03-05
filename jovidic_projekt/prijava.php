<?php

session_start();

$kime = "";
if(isset($_COOKIE["kime"])){
	$kime = $_COOKIE["kime"];
}
?>

        <?php include_once("header.php"); ?>

            <form id="prijava" method="post" name="prijava" action="session.php" >
            <table>
               
                <tr>
                    <td>
                        <label for="kime">Korisničko ime: </label>
                    </td>
                    <td>
                         <input type="text" id="kime" name="kime" size="15" maxlength="15" value="<?php echo $kime; ?>" autofocus="autofocus" pattern=".{4,}" placeholder="Korisničko ime" required="required">
                    </td>
                </tr>             
                <tr>
                    <td>
                        <label for="lozinka">Lozinka: </label>
                    </td>
                    <td>
                        <input type="password" id="lozinka" name="lozinka" size="15" maxlength="15" pattern=".{4,}" placeholder="Lozinka" required="required"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="checkbox">Zapamti me:</label>
                    </td>
                    <td>
                        <input type="checkbox" id="checkbox" value="da" name="checkbox">
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <input class="gumb" type="submit" value=" Prijavi se ">
                    </td>
                </tr>
            </table>
            </form>
        <?php include_once("footer.php"); ?>
