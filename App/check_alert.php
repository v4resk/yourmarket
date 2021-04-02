<?php  

if(isset($_SESSION['green_alert'])){echo $_SESSION['green_alert']; unset($_SESSION['green_alert']);}
if(isset($_SESSION['red_alert'])){echo $_SESSION['red_alert']; unset($_SESSION['red_alert']);}
if(isset($_SESSION['blue_alert'])){echo $_SESSION['blue_alert']; unset($_SESSION['blue_alert']);}

		   
?>