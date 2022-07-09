<?php

/*
* @package phpBB Extension - Extended Footer Socials
* @copyright (c) 2022, RaiderKnight, https://raiderknight.com
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace raiderknight\rkextendsocial\migrations;

class rkextendsocial_data extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			array('module.add',		array('acp', 'ACP_CAT_DOT_MODS', 'ACP_RKEXTENDSOCIAL')),
			array('module.add',		array('acp', 'ACP_RKEXTENDSOCIAL', array(
			'module_basename'		=> '\raiderknight\rkextendsocial\acp\main_module',
			'module_langname'		=> 'ACP_RKEXTENDSOCIAL_SETTINGS',
			'module_mode'			=> 'overview',
			'module_auth'			=> 'ext_raiderknight/rkextendsocial && acl_a_board',
			))),

			array('config.add',		array('raiderknight_enbl', '')),

			array('config.add',		array('raiderknight_sze', '')),
			array('config.add',		array('raiderknight_crnrs', '')),

			array('config.add',		array('raiderknight_wbst_enbl', '')),
			array('config.add',		array('raiderknight_wbst_url', '')),

			array('config.add',		array('raiderknight_fcbk_enbl', '')),
			array('config.add',		array('raiderknight_fcbk_url', '')),

			array('config.add',		array('raiderknight_twtr_enbl', '')),
			array('config.add',		array('raiderknight_twtr_url', '')),
			
			array('config.add',		array('raiderknight_insta_enbl', '')),
			array('config.add',		array('raiderknight_insta_url', '')),

			array('config.add',		array('raiderknight_pntrst_enbl', '')),
			array('config.add',		array('raiderknight_pntrst_url', '')),

			array('config.add',		array('raiderknight_ytube_enbl', '')),
			array('config.add',		array('raiderknight_ytube_url', '')),

			array('config.add',		array('raiderknight_drbl_enbl', '')),
			array('config.add',		array('raiderknight_drbl_url', '')),

			array('config.add',		array('raiderknight_cdpen_enbl', '')),
			array('config.add',		array('raiderknight_cdpen_url', '')),
			
			array('config.add',		array('raiderknight_gthub_enbl', '')),
			array('config.add',		array('raiderknight_gthub_url', '')),

			array('config.add',		array('raiderknight_ebay_enbl', '')),
			array('config.add',		array('raiderknight_ebay_url', '')),

			array('config.add',		array('raiderknight_pypl_enbl', '')),
			array('config.add',		array('raiderknight_pypl_url', '')),

            array('config.add',		array('raiderknight_disco_enbl', '')),
			array('config.add',		array('raiderknight_disco_url', '')),
			
			array('config.add',		array('raiderknight_patreon_enbl', '')),
			array('config.add',		array('raiderknight_patreon_url', '')),

			array('config.add',		array('raiderknight_bmac_enbl', '')),
			array('config.add',		array('raiderknight_bmac_url', '')),

			array('config.add',		array('raiderknight_twitch_enbl', '')),
			array('config.add',		array('raiderknight_twitch_url', '')),
		);
	}
}
