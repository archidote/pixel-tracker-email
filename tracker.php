<?php

$date = date('Y-m-d H:i:s');
$tracking = "Mail opened at ".$date." from ".$_SERVER['REMOTE_ADDR']." - ID : ".$_GET["tracker"]."". PHP_EOL;
$fp = fopen("mailTracking.log", "a+");
fwrite($fp, ''.$tracking.'');
fclose($fp);

/*

edit html into the mail form 

hello 


how are you ? <press f12> and insert into <div XXX > <img src="https://le-guide-du-sysops.fr/pixel-tracker-email/tracker.php?tracker=Victor " alt="" width="1px" height="1px">
</div>


and send the mail :) 

*/
exit; 


?>