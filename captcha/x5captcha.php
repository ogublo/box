<?php
include("../res/x5engine.php");
$nameList = array("uag","8w3","axt","fdj","mnp","gsd","n6n","ya2","jwh","4dc");
$charList = array("8","8","R","6","G","P","X","V","W","3");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
