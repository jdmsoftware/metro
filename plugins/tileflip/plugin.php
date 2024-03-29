<?php
$tileTypes['flip'] = array( /* Defaults*/
	"group"=>0,
	"x"=>0,
	"y"=>0,
	'width'=>1,
	'height'=>1,
	"background"=>$defaultBackgroundColor,
	"url"=>"",
	"img"=>"",
	"text"=>"Your text for the backside",
	"imgSize"=>1.0,
	"stretchImage"=>false,
	"labelText"=>"",
	"labelColor"=>$defaultLabelColor,
	"labelPosition"=>$defaultLabelPosition,
	"classes"=>"",
);
function tile_flip($group,$x,$y,$width,$height,$background,$url,$img,$text,$imgSize,$stretchImage,$labelText,$labelColor,$labelPosition,$classes){
	global $scale, $spacing, $scaleSpacing, $groupSpacing;
	
	$marginTop = $y*$scaleSpacing+getMarginTop($group);
	$marginLeft = $x*$scaleSpacing+getMarginLeft($group);
	$tileWidth = $width*$scaleSpacing-$spacing;
	$tileHeight = $height*$scaleSpacing-$spacing;
	?>
  	<a <?php echo makeLink($url);?> class="tile tileFlip support3D group<?php echo $group?> <?php echo $classes?>" style="
    margin-top:<?php echo $marginTop?>px; margin-left:<?php echo $marginLeft?>px;
	width:<?php echo $tileWidth?>px; height:<?php echo $tileHeight;?>px;" <?php posVal($marginTop,$marginLeft,$tileWidth);?>> 
    
    <div class='flipContainer'>
		<div class='flipFront' style="background:<?php echo $background;?>;">
        <div class='flipImgWrapper'>
        <div class='flipImgCenterer'>
        <img src="<?php echo $img?>" style="
        width:<?php echo $imgSize*$tileWidth+2;?>px;
        <?php if($stretchImage){?>
                height:<?php echo $imgSize*$tileHeight+2;?>px;
		<?php }?>
       "/>
       </div>
        </div>
        </div>
		<div class='flipBack' style="background:<?php echo $background;?>;"><?php echo $text?></div>
        <?php 
		if($labelText!=""){
			if($labelPosition=='top'){
				echo "<div class='tileLabelWrapper top' style='border-top-color:".$labelColor.";'><div class='tileLabel top' >".$labelText."</div></div>";
			}else{
				echo "<div class='tileLabelWrapper bottom'><div class='tileLabel bottom' style='border-bottom-color:".$labelColor.";'>".$labelText."</div></div>";
			}
		}
	?>
	</div>
    </a>
    <?php
}
?>