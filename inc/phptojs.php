<script>
scale = <?php echo $scale ?>;
spacing = <?php echo $spacing ?>;
theme = '<?php echo $theme ?>';
$group.titles = <?php echo json_encode($groupTitles);?>;
$group.spacingFull = <?php echo json_encode($groupSpacing);?>;
$group.inactive.opacity = "<?php echo $groupInactiveOpacity?>";
$group.inactive.clickable = "<?php echo $groupInactiveClickable?>";
$group.showEffect = <?php echo $groupShowEffect?>;

siteTitle = '<?php echo $siteTitle?>';
siteTitleHome = '<?php echo $siteTitleHome?>';
showSpeed = <?php echo $showSpeed?>;
hideSpeed = <?php echo $hideSpeed?>;
scrollSpeed = <?php echo $scrollSpeed?>;

<?Php
if($device=="tablet" && !$scrollHeaderTablet){
	?>
	scrollHeader = false;
	<?php
}else{
	?>
	scrollHeader = "<?php echo $scrollHeader?>";
	<?php
}
?>
disableGroupScrollingWhenVerticalScroll = "<?php echo $disableGroupScrollingWhenVerticalScroll?>";

/*For background image*/
bgMaxScroll= "<?php echo $bgMaxScroll?>";
bgScrollSpeed = "<?php echo $bgScrollSpeed?>";

/*For responsive */
autoRearrangeTiles = "<?php echo $autoRearrangeTiles;?>";
autoResizeTiles = "<?php echo $autoResizeTiles;?>";
rearrangeTreshhold = 3;
<?php
$passToJS["pageTitles"] = "pageTitles";

/* PASS PHP VARS TO JS*/
foreach($passToJS as $phpName=>$jsName){
	if(is_array(${$phpName})){
		//arrayToJS(${$phpName},$jsName);
		echo $jsName."=new Array();"; 
		foreach(${$phpName} as $key=>$val){
			echo $jsName."['".$key."'] = '".$val."';";
		}
	}else if(is_int(${$phpName})){
		echo $jsName." = ".(${$phpName}).";";
	}else{
		echo $jsName." = '".(${$phpName})."';";
	}
}
?>
</script>