<?php

/*
* @package phpBB Extension - Extended Footer Socials
* @copyright (c) 2022, RaiderKnight, https://raiderknight.com
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace raiderknight\rkextendsocial\acp;

class main_module
{

var $u_action;

	function main($id, $mode)
	{
		global $user, $template, $request, $config;

		$this->tpl_name 	= 'acp_rkextendsocial';
		$this->page_title 	= $user->lang('ACP_RKEXTENDSOCIAL_SETTINGS');
		$form_name 		 	= 'acp_rkextendsocial';

		add_form_key($form_name);

		$submit = $request->is_set_post('submit');
		if ($submit)
		{
		if (!check_form_key('acp_rkextendsocial'))
		{
		trigger_error('FORM_INVALID');
		}

		$config->set('rkextendsocial_enbl',				$request->variable('rkextendsocial_enbl', 0));

		$config->set('rkextendsocial_sze',				$request->variable('rkextendsocial_sze', 0));
		$config->set('rkextendsocial_crnrs',			$request->variable('rkextendsocial_crnrs', 0));

		$config->set('rkextendsocial_wbst_enbl',		$request->variable('rkextendsocial_wbst_enbl', 0));
		$config->set('rkextendsocial_wbst_url',			$request->variable('rkextendsocial_wbst_url', ''));

		$config->set('rkextendsocial_fcbk_enbl',		$request->variable('rkextendsocial_fcbk_enbl', 0));
		$config->set('rkextendsocial_fcbk_url',			$request->variable('rkextendsocial_fcbk_url', ''));

		$config->set('rkextendsocial_twtr_enbl',		$request->variable('rkextendsocial_twtr_enbl', 0));
		$config->set('rkextendsocial_twtr_url',			$request->variable('rkextendsocial_twtr_url', ''));

		$config->set('rkextendsocial_insta_enbl',		$request->variable('rkextendsocial_insta_enbl', 0));
		$config->set('rkextendsocial_insta_url',		$request->variable('rkextendsocial_insta_url', ''));

		$config->set('rkextendsocial_pntrst_enbl',		$request->variable('rkextendsocial_pntrst_enbl', 0));
		$config->set('rkextendsocial_pntrst_url',		$request->variable('rkextendsocial_pntrst_url', ''));

		$config->set('rkextendsocial_ytube_enbl',		$request->variable('rkextendsocial_ytube_enbl', 0));
		$config->set('rkextendsocial_ytube_url',		$request->variable('rkextendsocial_ytube_url', ''));

		$config->set('rkextendsocial_drbl_enbl',		$request->variable('rkextendsocial_drbl_enbl', 0));
		$config->set('rkextendsocial_drbl_url',			$request->variable('rkextendsocial_drbl_url', ''));

		$config->set('rkextendsocial_cdpen_enbl',		$request->variable('rkextendsocial_cdpen_enbl', 0));
		$config->set('rkextendsocial_cdpen_url',		$request->variable('rkextendsocial_cdpen_url', ''));

		$config->set('rkextendsocial_gthub_enbl',		$request->variable('rkextendsocial_gthub_enbl', 0));
		$config->set('rkextendsocial_gthub_url',		$request->variable('rkextendsocial_gthub_url', ''));

		$config->set('rkextendsocial_ebay_enbl',		$request->variable('rkextendsocial_ebay_enbl', 0));
		$config->set('rkextendsocial_ebay_url',			$request->variable('rkextendsocial_ebay_url', ''));

		$config->set('rkextendsocial_pypl_enbl',		$request->variable('rkextendsocial_pypl_enbl', 0));
		$config->set('rkextendsocial_pypl_url',			$request->variable('rkextendsocial_pypl_url', ''));

        $config->set('rkextendsocial_disco_enbl',		$request->variable('rkextendsocial_disco_enbl', 0));
		$config->set('rkextendsocial_disco_url',		$request->variable('rkextendsocial_disco_url', ''));

		$config->set('rkextendsocial_patreon_enbl',		$request->variable('rkextendsocial_patreon_enbl', 0));
		$config->set('rkextendsocial_patreon_url',		$request->variable('rkextendsocial_patreon_url', ''));

		$config->set('rkextendsocial_bmac_enbl',		$request->variable('rkextendsocial_bmac_enbl', 0));
		$config->set('rkextendsocial_bmac_url',			$request->variable('rkextendsocial_bmac_url', ''));

		$config->set('rkextendsocial_twitch_enbl',		$request->variable('rkextendsocial_twitch_enbl', 0));
		$config->set('rkextendsocial_twitch_url',			$request->variable('rkextendsocial_twitch_url', ''));
        

		trigger_error($user->lang('ACP_RKEXTENDSOCIAL_SAVED') . adm_back_link($this->u_action));
		}

		$template->assign_vars(array(

			'RKEXTENDSOCIAL_ENBL'			=> $config['rkextendsocial_enbl'],

			'RKEXTENDSOCIAL_SZE'			=> $config['rkextendsocial_sze'],
			'RKEXTENDSOCIAL_CRNRS'			=> $config['rkextendsocial_crnrs'],

			'RKEXTENDSOCIAL_WBST_ENBL'		=> $config['rkextendsocial_wbst_enbl'],
			'RKEXTENDSOCIAL_WBST_URL'		=> $config['rkextendsocial_wbst_url'],

			'RKEXTENDSOCIAL_FCBK_ENBL'		=> $config['rkextendsocial_fcbk_enbl'],
			'RKEXTENDSOCIAL_FCBK_URL'		=> $config['rkextendsocial_fcbk_url'],

			'RKEXTENDSOCIAL_TWTR_ENBL'		=> $config['rkextendsocial_twtr_enbl'],
			'RKEXTENDSOCIAL_TWTR_URL'		=> $config['rkextendsocial_twtr_url'],

			'RKEXTENDSOCIAL_INSTA_ENBL'		=> $config['rkextendsocial_insta_enbl'],
			'RKEXTENDSOCIAL_INSTA_URL'		=> $config['rkextendsocial_insta_url'],

			'RKEXTENDSOCIAL_PNTRST_ENBL'	=> $config['rkextendsocial_pntrst_enbl'],
			'RKEXTENDSOCIAL_PNTRST_URL'		=> $config['rkextendsocial_pntrst_url'],

			'RKEXTENDSOCIAL_YTUBE_ENBL'		=> $config['rkextendsocial_ytube_enbl'],
			'RKEXTENDSOCIAL_YTUBE_URL'		=> $config['rkextendsocial_ytube_url'],

			'RKEXTENDSOCIAL_DRBL_ENBL'		=> $config['rkextendsocial_drbl_enbl'],
			'RKEXTENDSOCIAL_DRBL_URL'		=> $config['rkextendsocial_drbl_url'],

			'RKEXTENDSOCIAL_CDPEN_ENBL'		=> $config['rkextendsocial_cdpen_enbl'],
			'RKEXTENDSOCIAL_CDPEN_URL'		=> $config['rkextendsocial_cdpen_url'],

			'RKEXTENDSOCIAL_GTHUB_ENBL'		=> $config['rkextendsocial_gthub_enbl'],
			'RKEXTENDSOCIAL_GTHUB_URL'		=> $config['rkextendsocial_gthub_url'],

			'RKEXTENDSOCIAL_EBAY_ENBL'		=> $config['rkextendsocial_ebay_enbl'],
			'RKEXTENDSOCIAL_EBAY_URL'		=> $config['rkextendsocial_ebay_url'],

			'RKEXTENDSOCIAL_PYPL_ENBL'		=> $config['rkextendsocial_pypl_enbl'],
			'RKEXTENDSOCIAL_PYPL_URL'		=> $config['rkextendsocial_pypl_url'],

            'RKEXTENDSOCIAL_DISCO_ENBL'		=> $config['rkextendsocial_disco_enbl'],
			'RKEXTENDSOCIAL_DISCO_URL'		=> $config['rkextendsocial_disco_url'],

			'RKEXTENDSOCIAL_PATREON_ENBL'	=> $config['rkextendsocial_patreon_enbl'],
			'RKEXTENDSOCIAL_PATREON_URL'	=> $config['rkextendsocial_patreon_url'],

			'RKEXTENDSOCIAL_BMAC_ENBL'		=> $config['rkextendsocial_bmac_enbl'],
			'RKEXTENDSOCIAL_BMAC_URL'		=> $config['rkextendsocial_bmac_url'],

			'RKEXTENDSOCIAL_TWITCH_ENBL'	=> $config['rkextendsocial_twitch_enbl'],
			'RKEXTENDSOCIAL_TWITCH_URL'		=> $config['rkextendsocial_twitch_url'],

			'U_ACTION'					=> $this->u_action,
		));
	}
}
