<?php
/**
 * @package		Footer Menu for Joomla! 2.5+
 * @subpackage	mod_footermenu
 * @copyright	Copyright (C) 2013-2014 KMO Design Pty Ltd. All rights reserved.
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

// no direct access
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

$list	= modFooterMenuHelper::getList($params);
$app	= JFactory::getApplication();
$menu	= $app->getMenu();
$active	= $menu->getActive();
$active_id = isset($active) ? $active->id : $menu->getDefault()->id;
$path	= isset($active) ? $active->tree : array();
$showAll	= $params->get('showAllChildren');
$class_sfx	= htmlspecialchars($params->get('class_sfx'));
$columns	= ceil(count($list) / (int) $params->get('columns'));

if(count($list)) {
	require JModuleHelper::getLayoutPath('mod_footermenu', $params->get('layout', 'default'));
}
