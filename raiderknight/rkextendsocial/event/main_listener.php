<?php

/*
* @package phpBB Extension - Extended Footer Socials
* @copyright (c) 2022, RaiderKnight, https://raiderknight.com
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace raiderknight\rkextendsocial\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class main_listener implements EventSubscriberInterface
{

	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'		=> 'load_language_on_setup',
			'core.page_header'		=> 'add_page_rkextendsocial',
		);
	}

	protected $user;
	protected $template;
	protected $config;	

	public function __construct(\phpbb\user $user, \phpbb\template\template $template, \phpbb\config\config $config)
	{
		$this->user			= $user;
		$this->template		= $template;
		$this->config		= $config;
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
		'ext_name'		=> 'raiderknight/rkextendsocial',
		'lang_set'		=> 'common',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function add_page_rkextendsocial($event)
	{
		$this->user->add_lang_ext('raiderknight/rkextendsocial', 'common');

		$this->template->assign_vars(array(
		'RKEXTENDSOCIAL_ENBL'			=> $this->config['rkextendsocial_enbl'],

		'RKEXTENDSOCIAL_SZE'			=> $this->config['rkextendsocial_sze'],
		'RKEXTENDSOCIAL_CRNRS'			=> $this->config['rkextendsocial_crnrs'],

		'RKEXTENDSOCIAL_WBST_ENBL'		=> $this->config['rkextendsocial_wbst_enbl'],
		'RKEXTENDSOCIAL_WBST_URL'		=> $this->config['rkextendsocial_wbst_url'],

		'RKEXTENDSOCIAL_FCBK_ENBL'		=> $this->config['rkextendsocial_fcbk_enbl'],
		'RKEXTENDSOCIAL_FCBK_URL'		=> $this->config['rkextendsocial_fcbk_url'],

		'RKEXTENDSOCIAL_TWTR_ENBL'		=> $this->config['rkextendsocial_twtr_enbl'],
		'RKEXTENDSOCIAL_TWTR_URL'		=> $this->config['rkextendsocial_twtr_url'],

		'RKEXTENDSOCIAL_INSTA_ENBL'		=> $this->config['rkextendsocial_insta_enbl'],
		'RKEXTENDSOCIAL_INSTA_URL'		=> $this->config['rkextendsocial_insta_url'],

		'RKEXTENDSOCIAL_PNTRST_ENBL'	=> $this->config['rkextendsocial_pntrst_enbl'],
		'RKEXTENDSOCIAL_PNTRST_URL'		=> $this->config['rkextendsocial_pntrst_url'],

		'RKEXTENDSOCIAL_YTUBE_ENBL'		=> $this->config['rkextendsocial_ytube_enbl'],
		'RKEXTENDSOCIAL_YTUBE_URL'		=> $this->config['rkextendsocial_ytube_url'],

		'RKEXTENDSOCIAL_DRBL_ENBL'		=> $this->config['rkextendsocial_drbl_enbl'],
		'RKEXTENDSOCIAL_DRBL_URL'		=> $this->config['rkextendsocial_drbl_url'],

		'RKEXTENDSOCIAL_CDPEN_ENBL'		=> $this->config['rkextendsocial_cdpen_enbl'],
		'RKEXTENDSOCIAL_CDPEN_URL'		=> $this->config['rkextendsocial_cdpen_url'],

		'RKEXTENDSOCIAL_GTHUB_ENBL'		=> $this->config['rkextendsocial_gthub_enbl'],
		'RKEXTENDSOCIAL_GTHUB_URL'		=> $this->config['rkextendsocial_gthub_url'],

		'RKEXTENDSOCIAL_EBAY_ENBL'		=> $this->config['rkextendsocial_ebay_enbl'],
		'RKEXTENDSOCIAL_EBAY_URL'		=> $this->config['rkextendsocial_ebay_url'],

		'RKEXTENDSOCIAL_PYPL_ENBL'		=> $this->config['rkextendsocial_pypl_enbl'],
		'RKEXTENDSOCIAL_PYPL_URL'		=> $this->config['rkextendsocial_pypl_url'],

        'RKEXTENDSOCIAL_DISCO_ENBL'		=> $this->config['rkextendsocial_disco_enbl'],
		'RKEXTENDSOCIAL_DISCO_URL'		=> $this->config['rkextendsocial_disco_url'],

		'RKEXTENDSOCIAL_PATREON_ENBL'	=> $this->config['rkextendsocial_patreon_enbl'],
		'RKEXTENDSOCIAL_PATREON_URL'	=> $this->config['rkextendsocial_patreon_url'],

		'RKEXTENDSOCIAL_BMAC_ENBL'		=> $this->config['rkextendsocial_bmac_enbl'],
		'RKEXTENDSOCIAL_BMAC_URL'		=> $this->config['rkextendsocial_bmac_url'],

		'RKEXTENDSOCIAL_TWITCH_ENBL'	=> $this->config['rkextendsocial_twitch_enbl'],
		'RKEXTENDSOCIAL_TWITCH_URL'		=> $this->config['rkextendsocial_twitch_url'],

		'RKEXTENDSOCIAL_LINKEDIN_ENBL'		=> $this->config['rkextendsocial_linkedin_enbl'],
		'RKEXTENDSOCIAL_LINKEDIN_URL'		=> $this->config['rkextendsocial_linkedin_url'],

        'RKEXTENDSOCIAL_SOUNDCLOUD_ENBL'	=> $this->config['rkextendsocial_soundcloud_enbl'],
		'RKEXTENDSOCIAL_SOUNDCLOUD_URL'		=> $this->config['rkextendsocial_soundcloud_url'],

		'RKEXTENDSOCIAL_STEAM_ENBL'		=> $this->config['rkextendsocial_steam_enbl'],
		'RKEXTENDSOCIAL_STEAM_URL'		=> $this->config['rkextendsocial_steam_url'],

		'RKEXTENDSOCIAL_REDDIT_ENBL'	=> $this->config['rkextendsocial_reddit_enbl'],
		'RKEXTENDSOCIAL_REDDIT_URL'		=> $this->config['rkextendsocial_reddit_url'],

		'RKEXTENDSOCIAL_WEIBO_ENBL'		=> $this->config['rkextendsocial_weibo_enbl'],
		'RKEXTENDSOCIAL_WEIBO_URL'		=> $this->config['rkextendsocial_weibo_url'],

		));
	}

}
