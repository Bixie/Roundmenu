<?php
/**
 *  Copyright (C) 2014 Matthijs Alles
 *	Bixie.nl
 *
 */

// no direct access
defined('_JEXEC') or die;
?>



<div class="round_menu_wrapper">
	<div class="round_menu" id="roundMenu">
		<div id="rmb0" class="round_menu-button round_menu-button--1<?php echo $actiefBlauw ?>">
			<img src="/modules/mod_roundmenu/assets/images/menu_opt1.png" alt="">
			<img src="/modules/mod_roundmenu/assets/images/menu_opt1-hover.png" alt="" class="hoverImg">
		</div>

		<div id="rmb1" class="round_menu-button round_menu-button--2<?php echo $actiefGroen ?>">
			<img src="/modules/mod_roundmenu/assets/images/menu_opt2.png" alt="">
			<img src="/modules/mod_roundmenu/assets/images/menu_opt2-hover.png" alt="" class="hoverImg">
		</div>

		<div id="rmb2" class="round_menu-button round_menu-button--3<?php echo $actiefGeel ?>">
			<img src="/modules/mod_roundmenu/assets/images/menu_opt3.png" alt="">
			<img src="/modules/mod_roundmenu/assets/images/menu_opt3-hover.png" alt="" class="hoverImg">
		</div>

		<div id="rmb3" class="round_menu-button round_menu-button--center">
				<img id="Image-Maps-Com-image-maps-2014-09-24-195240" src="/modules/mod_roundmenu/assets/images/menu_opt_center.png" alt="" usemap="#image-maps-2014-09-24-195240">
				<map name="image-maps-2014-09-24-195240" id="ImageMapsCom-image-maps-2014-09-24-195240">
					<area shape="rect" coords="448,448,450,450" alt="Image Map" style="outline:none;" title="Image Map" 
						href="<?php echo $linkMidden; ?>" />
					<area  alt="" title="" shape="poly" coords="223,148,195,154,171,169,156,193,150,221,156,249,171,273,195,288,223,294,251,288,275,273,290,249,296,221,290,193,275,169,251,154" style="outline:none;" target="_self"
						href="<?php echo $linkMidden; ?>"     />
					<area  alt="" title="" shape="poly" coords="336,48,268,162,298,198,295,252,264,291,328,411,394,360,429,287,441,202,412,115,370,66" style="outline:none;" target="_self" 
						href="<?php echo $linkBlauw; ?>"    />
					<area  alt="" title=""  shape="poly" coords="338,42,268,155,203,145,159,172,139,227,11,220,29,133,75,71,146,29,240,13" style="outline:none;" target="_self"
						href="<?php echo $linkGroen; ?>" />
					<area  alt="" title="" href="<?php echo $linkGeel; ?>" shape="poly" coords="143,222,12,218,36,333,92,394,170,433,247,438,326,413,261,292,197,298,150,269" style="outline:none;" target="_self"     />

				</map>
			<img src="/modules/mod_roundmenu/assets/images/menu_opt_center-hover.png" alt="" class="hoverImg">
		</div>
		<a id="rml0" href="<?php echo $linkBlauw; ?>" class="round_menu-link round_menu-link--1"></a>
		<a id="rml1" href="<?php echo $linkGroen; ?>" class="round_menu-link round_menu-link--2"></a>
		<a id="rml2" href="<?php echo $linkGeel; ?>" class="round_menu-link round_menu-link--3"></a>
		<a id="rml3" href="<?php echo $linkMidden; ?>" class="round_menu-link round_menu-link--center"></a>
	</div>
</div>