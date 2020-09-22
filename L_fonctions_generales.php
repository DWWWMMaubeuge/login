<?php
function gestionSession()
{
    GLOBAL $inscription, 
    
    session_start();
    if (isset($_SESSION[""]))
}
function setHeaderNoCache()
{
	GLOBAL $__URL_local;
	
	echo "<DOCTYPE html>\n";
	echo "<html>\n";
	echo "<head>\n";
	echo "<meta http-equiv=\"Cache-Control\" content=\"no-cache, no-store, must-revalidate\" />\n";
	echo "<meta http-equiv=\"Pragma\" content=\"no-cache\" />\n";
	echo "<meta http-equiv=\"Expires\" content=\"0\" />\n";
	echo "<link href=\"annonce.css\" rel=\"stylesheet\">\n";
	//echo "<link href=\"MA_CSS.css\" rel=\"stylesheet\">\n";
	echo "<script>\n";
	echo "function goAffGrand( id )\n";
	echo "{ window.location.replace(\"http://localhost$__URL_local/login.php?IDinscription=\"+id );}\n";
	echo "</script>\n";
	echo "</head>\n";
	echo "<body>\n";
}


?>
