<?php
$tileTypes = array();
$tile = array();

function stripSpaces($s){
	return str_replace(" ","-",$s);
}
function makeLinkHref($l){
	global $pageTitles, $bot, $nojsuser;
	if($l==""){
		return "";
	}
	if(substr($l,0,9) == 'external:'){
		return substr($l,9);
	}
	
	if(substr($l,0,7) == "http://" ||
	   substr($l,0,8) == "https://" ||
	   substr($l,0,1) == "/" ||
	   substr($l,0,1) == "#" ||
	   $l[strlen($l)-1] == "/")
	{
		return $l;
	}
	if(array_key_exists($l,$pageTitles)){
		$lu = $pageTitles[$l];
	}else{
		$lu = "url=".$l;
	}
	
	if($bot && !$nojsuser){
		return "#!/".strtolower(stripSpaces($lu));	
	}else{
		return "?p=".strtolower(stripSpaces($lu));
	}
}
function makeLink($l){ // make valid links
	global $pageTitles, $bot, $nojsuser;
	$t = " ";
	if($l==""){
		return "";
	}
	if(substr($l,0,7) == 'newtab:'){
		$t = " target='_blank' ";
		$l = substr($l,7);
	}
	$l = makeLinkHref($l);
	
	if($bot && !$nojsuser){
		return $t."href='".strtolower(stripSpaces($l))."'";	
	}else{
		return $t."href='".strtolower(stripSpaces($l))."'";
	}
}
function passToJS(){
	global $passToJS;
	foreach($passToJS as $phpName=>$jsName){
		global ${$phpName};
		echo $jsName." = '".addslashes(${$phpName})."';";
	}
}
?>