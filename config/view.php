<?php 

/**
* 
*/
class View 
{
	function render($filename){

		include("view/".$filename.".php");
	}
}
?>