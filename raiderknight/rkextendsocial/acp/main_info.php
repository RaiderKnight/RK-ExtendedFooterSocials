<?php

/*
* @package phpBB Extension - Extended Footer Socials
* @copyright (c) 2022, RaiderKnight, https://raiderknight.com
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace raiderknight\rkextendsocial\acp;

class main_info
{
	function module()
	{
		return array(
			'filename'	=> '\raiderknight\rkextendsocial\acp\main_module',
			'title'		=> 'ACP_RKEXTENDSOCIAL',
			'modes'		=> array(
			'settings'	=> array(
			'title'		=> 'ACP_RKEXTENDSOCIAL_SETTINGS',
			'auth'		=> 'ext_raiderknight\rkextendsocial && acl_a_board',
			'cat'		=> array('ACP_RKEXTENDSOCIAL')),
			),
		);
	}
}
