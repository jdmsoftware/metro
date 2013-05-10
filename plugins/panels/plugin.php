<?php
/* panel plugin */
include("settings.php");

onEvent('bodyEnd','panel');
function panel(){
	global $theme,$panelWidth, $panelColor, $preloadedPanels;
	echo 
	"<div id='panel' style='max-width:".$panelWidth."px;right:-".$panelWidth."px;background-color:".$panelColor.";'>
	<img id='panelArrow' src='themes/".$theme."/img/panels/arrow.png' onClick='javascript:hidePanel();'>
	<img id='panelLoader' src='themes/".$theme."/img/panels/loader.gif'/>
	<div id='panelContent'>
	</div>
	";
	
	foreach($preloadedPanels as $panel){
		if(file_exists("panels/".$panel)){
			echo "<div class='preloadedPanel' id='panel_".str_replace("%","_",urlencode(str_replace("/","_slash-",str_replace(".","_",$panel))))."'>";
			include("panels/".$panel);
			echo "</div>";
		}
	}
	echo"</div>";
}
$passToJS['hidePanelOnClick'] = 'hidePanelOnClick';
?>