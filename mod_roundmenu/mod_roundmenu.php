<?php
/**
 *    com_bix_printshop - Online-PrintStore for Joomla
 *  Copyright (C) 2010-2012 Matthijs Alles
 *    Bixie.nl

 */

// no direct access
defined('_JEXEC') or die;

$document = JFactory::getDocument();
$document->addStylesheet('/modules/mod_roundmenu/assets/roundmenu.css');
$document->addScript('/modules/mod_roundmenu/assets/roundmenu.js');

$app = JFactory::getApplication();
$activeItemId = $app->input->getInt('Itemid');

$currentColor = $app->getUserState('mod_roundmenu.currentcolor','none');
$colors = array(
	'middle'=>'rood',
	'button1'=>'blauw',
	'button2'=>'groen',
	'button3'=>'geel'
);
$itemIds = array(
	'middle'=>$params->get('middle', 101),
	'button1'=>$params->get('button1', 101),
	'button2'=>$params->get('button2', 101),
	'button3'=>$params->get('button3', 101)
);
$noneItems = $params->get('none', array());
//zet kleur als nodig
foreach ($itemIds as $type=>$itemId) {
	if ($activeItemId == $itemId && $colors[$type] != $currentColor) {
		$currentColor = $colors[$type];
	}
}
//reset evt
if (in_array($activeItemId,$noneItems)) {
	$currentColor = 'none';
}
$app->setUserState('mod_roundmenu.currentcolor',$currentColor);

$linkMidden = JRoute::_('index.php?Itemid='.$itemIds['middle']);
$actiefBlauw = $currentColor == 'blauw'? ' active': '';
$linkBlauw = JRoute::_('index.php?Itemid='.$itemIds['button1']);
$actiefGroen = $currentColor == 'groen'? ' active': '';
$linkGroen = JRoute::_('index.php?Itemid='.$itemIds['button2']);
$actiefGeel = $currentColor == 'geel'? ' active': '';
 $linkGeel = JRoute::_('index.php?Itemid='.$itemIds['button3']);
$currentColor;
require JModuleHelper::getLayoutPath('mod_roundmenu', $params->get('layout', 'default'));
