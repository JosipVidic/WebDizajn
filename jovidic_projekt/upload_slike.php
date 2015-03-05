<?php
/* 
	-prijavljeni korisnik može uploadati slike
*/
session_start();
if(!(isset($_SESSION["prijavljen"]) && $_SESSION["prijavljen"] == "da")){
	header("Location: prijava.php");
}

?>

        <?php include_once("header.php"); ?>
            <div>
            <form enctype="multipart/form-data" method="post" action="upload.php">
                <table>
                    <tr>
                        <td >
                            <label for="fileToUpload">Odaberite datoteku za upload!</label><br />
                        </td>
                        <td>
                            <input type="file" name="fileToUpload" id="fileToUpload" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Upload" />
                        </td>
                    </tr>
                                        
                </table>
               
            </form>
            </div>
            
        <?php include_once("footer.php"); ?>
