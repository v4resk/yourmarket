<?php

function create_alert_red($str){
	$divAlert = "<div class=\"alert alert-danger\" role=\"alert\">
			  	<strong>Error !</strong> ".$str."
			  	<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
			 	<span aria-hidden=\"true\">&times;</span>
				</button>
				</div>";
			return $divAlert;
}

function create_alert_blue($str){
	return "<div class=\"alert alert-info\" role=\"alert\">
			  <strong>Info :</strong>".$str."
			  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
			  <span aria-hidden=\"true\">&times;</span>
			 </button>
			</div>";
}

function create_alert_green($str){
	return "<div class=\"alert alert-success\" role=\"alert\">
			  <strong>Succes !</strong>".$str."
			  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
			  <span aria-hidden=\"true\">&times;</span>
			 </button>
			</div>";
}


?>