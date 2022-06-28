<?php

function convertToSEO($text){

	$turkce = array("ç","Ç","ğ","Ğ","ü","Ü","ö","Ö","ı","İ","ş","Ş",".",",","!"," ","\"","?","*","_","=","|","(",")","{","}","[","]");
	$convert= array("c","C","g","G","u","U","o","O","i","I","s","S","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-");

	return strtolower(str_replace($turkce,$convert,$text));
}

?>