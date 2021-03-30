<?php

session_start();

function hasSessionStart(){
	return isset($_SESSION['init']) ? true : false;
}
function startSession(){
	if(hasSessionStart()){

	}
}

?>