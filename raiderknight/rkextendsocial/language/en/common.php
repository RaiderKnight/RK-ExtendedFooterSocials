<?php

/*
* @package phpBB Extension - Extended Footer Socials
* @copyright (c) 2022, RaiderKnight, https://raiderknight.com
* @license GNU General Public License, version 2 (GPL-2.0)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'RKEXTENDSOCIAL_WBST'		=> 'Website',
	'RKEXTENDSOCIAL_FCBK'		=> 'Facebook',
	'RKEXTENDSOCIAL_TWTR'		=> 'Twitter',
	'RKEXTENDSOCIAL_INSTA'		=> 'Instagram',
	'RKEXTENDSOCIAL_PNTRST'		=> 'Pinterest',
	'RKEXTENDSOCIAL_YTUBE'		=> 'YouTube',
	'RKEXTENDSOCIAL_DRBL'		=> 'Dribbble',
	'RKEXTENDSOCIAL_CDPEN'		=> 'CodePen',
	'RKEXTENDSOCIAL_GTHUB'		=> 'GitHub',
	'RKEXTENDSOCIAL_EBAY'		=> 'eBay',
	'RKEXTENDSOCIAL_PYPL'		=> 'PayPal',
    'RKEXTENDSOCIAL_DISCO'		=> 'Discord',
	'RKEXTENDSOCIAL_PATREON'	=> 'Patreon',
	'RKEXTENDSOCIAL_BMAC'		=> 'BuyMeaCoffee',
    'RKEXTENDSOCIAL_TWITCH'		=> 'Twitch',
));
