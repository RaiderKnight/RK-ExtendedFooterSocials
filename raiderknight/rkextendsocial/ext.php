<?php

/*
* @package phpBB Extension - Extended Footer Socials
* @copyright (c) 2022, RaiderKnight, https://raiderknight.com
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace raiderknight\rkextendsocial;

class ext extends \phpbb\extension\base
{
	/** Enable extension if phpBB version requirement is met **/
	public function is_enableable()
	{
		return phpbb_version_compare(PHPBB_VERSION, '3.3.0', '>=');
	}
}
