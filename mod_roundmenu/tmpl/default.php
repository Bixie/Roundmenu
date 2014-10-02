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
					<area shape="rect" coords="358,358,360,360" alt="Image Map" style="outline:none;" title="Image Map" 
						href="<?php echo $linkMidden; ?>" />
					<area  alt="" title="" shape="poly" coords="263,53,214,129,232,165,231,197,207,227,254,315,307,270,329,215,333,155,303,89" style="outline:none;" target="_self"
						href="<?php echo $linkBlauw; ?>"     />
					<area  alt="" title="" shape="poly" coords="262,49,226,33,163,30,117,41,72,66,35,120,26,175,120,176,134,139,164,121,212,132" style="outline:none;" target="_self" 
						href="<?php echo $linkGroen; ?>"    />
					<area  alt="" title=""  shape="poly" coords="119,176,27,178,43,249,73,292,110,316,147,329,193,332,253,315,208,225,157,231,128,212" style="outline:none;" target="_self"
						href="<?php echo $linkGeel; ?>" />
					<area  alt="" title="" href="<?php echo $linkMidden; ?>" shape="poly" coords="179,125,157,129,139,142,126,160,122,182,126,204,139,222,157,235,179,239,201,235,219,222,232,204,236,182,232,160,219,142,201,129" style="outline:none;" target="_self"     />

				</map>
			<img src="/modules/mod_roundmenu/assets/images/menu_opt_center-hover.png" alt="" class="hoverImg">
		</div>
		<a id="rml0" href="<?php echo $linkBlauw; ?>" class="round_menu-link round_menu-link--1"></a>
		<a id="rml1" href="<?php echo $linkGroen; ?>" class="round_menu-link round_menu-link--2"></a>
		<a id="rml2" href="<?php echo $linkGeel; ?>" class="round_menu-link round_menu-link--3"></a>
		<a id="rml3" href="<?php echo $linkMidden; ?>" class="round_menu-link round_menu-link--center"></a>
	</div>
</div>