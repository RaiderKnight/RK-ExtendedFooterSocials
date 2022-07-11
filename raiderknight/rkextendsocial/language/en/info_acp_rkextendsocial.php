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
	'ACP_RKEXTENDSOCIAL'						=> 'Extended Footer Socials',

	'ACP_RKEXTENDSOCIAL_SETTINGS'				=> 'Settings',
	'ACP_RKEXTENDSOCIAL_SETTINGS_INFO'			=> 'Here you can configure the Extended Footer Socials extension.',

	'ACP_RKEXTENDSOCIAL_ENBL_SETUP'				=> 'Enable extension',
	'ACP_RKEXTENDSOCIAL_ENBL'					=> 'Enable Extended Footer Socials extension',

	'ACP_RKEXTENDSOCIAL_SCLS_STYLE_SETUP'		=> 'Socials style settings',
	'ACP_RKEXTENDSOCIAL_SCLS_SZE'				=> 'Social icon size',
	'ACP_RKEXTENDSOCIAL_SCLS_SML'				=> 'Small',
	'ACP_RKEXTENDSOCIAL_SCLS_MDM'				=> 'Medium',
	'ACP_RKEXTENDSOCIAL_SCLS_LRG'				=> 'Large',
	'ACP_RKEXTENDSOCIAL_SCLS_CRNRS'				=> 'Social icon corners',
	'ACP_RKEXTENDSOCIAL_SCLS_FLT'				=> 'Flat',
	'ACP_RKEXTENDSOCIAL_SCLS_RNDD'				=> 'Rounded',
	'ACP_RKEXTENDSOCIAL_SCLS_RND'				=> 'Round',

	'ACP_RKEXTENDSOCIAL_SCLS_LINKS_SETUP'		=> 'Social link settings',

	'ACP_RKEXTENDSOCIAL_WBST_ENBL'				=> 'Enable website social',
	'ACP_RKEXTENDSOCIAL_WBST_URL'				=> 'Website URL',
	'ACP_RKEXTENDSOCIAL_WBST_URL_PLCHLDR'		=> 'https://your-website-url-here.co.uk/',

	'ACP_RKEXTENDSOCIAL_FCBK_ENBL'				=> 'Enable Facebook social',
	'ACP_RKEXTENDSOCIAL_FCBK_URL'				=> 'Facebook URL',
	'ACP_RKEXTENDSOCIAL_FCBK_URL_PLCHLDR'		=> 'https://www.facebook.com/your-username-here/',

	'ACP_RKEXTENDSOCIAL_TWTR_ENBL'				=> 'Enable Twitter social',
	'ACP_RKEXTENDSOCIAL_TWTR_URL'				=> 'Twitter URL',
	'ACP_RKEXTENDSOCIAL_TWTR_URL_PLCHLDR'		=> 'https://twitter.com/your-username-here/',

	'ACP_RKEXTENDSOCIAL_INSTA_ENBL'				=> 'Enable InstaGram social',
	'ACP_RKEXTENDSOCIAL_INSTA_URL'				=> 'InstaGram URL',
	'ACP_RKEXTENDSOCIAL_INSTA_URL_PLCHLDR'		=> 'https://www.instagram.com/your-username-here/',

	'ACP_RKEXTENDSOCIAL_PNTRST_ENBL'			=> 'Enable Pinterest social',
	'ACP_RKEXTENDSOCIAL_PNTRST_URL'				=> 'Pinterest URL',
	'ACP_RKEXTENDSOCIAL_PNTRST_URL_PLCHLDR'		=> 'https://www.pinterest.co.uk/your-username-here/',

	'ACP_RKEXTENDSOCIAL_YTUBE_ENBL'				=> 'Enable YouTube social',
	'ACP_RKEXTENDSOCIAL_YTUBE_URL'				=> 'YouTube URL',
	'ACP_RKEXTENDSOCIAL_YTUBE_URL_PLCHLDR'		=> 'https://www.youtube.com/your-channel-url-here/',

	'ACP_RKEXTENDSOCIAL_DRBL_ENBL'				=> 'Enable Dribbble social',
	'ACP_RKEXTENDSOCIAL_DRBL_URL'				=> 'Dribbble URL',
	'ACP_RKEXTENDSOCIAL_DRBL_URL_PLCHLDR'		=> 'https://dribbble.com/your-username-here/',

	'ACP_RKEXTENDSOCIAL_CDPEN_ENBL'				=> 'Enable CodePen social',
	'ACP_RKEXTENDSOCIAL_CDPEN_URL'				=> 'CodePen URL',
	'ACP_RKEXTENDSOCIAL_CDPEN_URL_PLCHLDR'		=> 'https://codepen.io/your-username-here/',

	'ACP_RKEXTENDSOCIAL_GTHUB_ENBL'				=> 'Enable GitHub social',
	'ACP_RKEXTENDSOCIAL_GTHUB_URL'				=> 'GitHub URL',
	'ACP_RKEXTENDSOCIAL_GTHUB_URL_PLCHLDR'		=> 'https://github.com/your-username-here/',

	'ACP_RKEXTENDSOCIAL_EBAY_ENBL'				=> 'Enable eBay social',
	'ACP_RKEXTENDSOCIAL_EBAY_URL'				=> 'eBay URL',
	'ACP_RKEXTENDSOCIAL_EBAY_URL_PLCHLDR'		=> 'https://www.ebay.co.uk/usr/your-username-here/',

	'ACP_RKEXTENDSOCIAL_PYPL_ENBL'				=> 'Enable PayPal social',
	'ACP_RKEXTENDSOCIAL_PYPL_URL'				=> 'PayPal URL',
	'ACP_RKEXTENDSOCIAL_PYPL_URL_PLCHLDR'		=> 'https://www.paypal.com/paypalme/your-username-here/',
    
    'ACP_RKEXTENDSOCIAL_DISCO_ENBL'				=> 'Enable Discord social',
	'ACP_RKEXTENDSOCIAL_DISCO_URL'				=> 'Discord URL',
	'ACP_RKEXTENDSOCIAL_DISCO_URL_PLCHLDR'		=> 'https://discord.gg/your-invitation-here/',

	'ACP_RKEXTENDSOCIAL_PATREON_ENBL'			=> 'Enable Patreon social',
	'ACP_RKEXTENDSOCIAL_PATREON_URL'			=> 'Patreon URL',
	'ACP_RKEXTENDSOCIAL_PATREON_URL_PLCHLDR'	=> 'https://www.patreon.com/your-username-here/',

	'ACP_RKEXTENDSOCIAL_BMAC_ENBL'				=> 'Enable BuyMeaCoffee social',
	'ACP_RKEXTENDSOCIAL_BMAC_URL'				=> 'BuyMeaCoffee URL',
	'ACP_RKEXTENDSOCIAL_BMAC_URL_PLCHLDR'		=> 'https://www.buymeacoffee.com/your-username-here/',

	'ACP_RKEXTENDSOCIAL_TWITCH_ENBL'			=> 'Enable Twitch social',
	'ACP_RKEXTENDSOCIAL_TWITCH_URL'				=> 'Twitch URL',
	'ACP_RKEXTENDSOCIAL_TWITCH_URL_PLCHLDR'		=> 'https://www.twitch.tv/your-username-here/',

    'ACP_RKEXTENDSOCIAL_LINKEDIN_ENBL'			=> 'Enable LinkedIn social',
	'ACP_RKEXTENDSOCIAL_LINKEDIN_URL'			=> 'LinkedIn URL',
	'ACP_RKEXTENDSOCIAL_LINKEDIN_URL_PLCHLDR'	=> 'https://www.linkedin.com/your-username-here/',
    
    'ACP_RKEXTENDSOCIAL_SOUNDCLOUD_ENBL'		=> 'Enable SoundCloud social',
	'ACP_RKEXTENDSOCIAL_SOUNDCLOUD_URL'			=> 'SoundCloud URL',
	'ACP_RKEXTENDSOCIAL_SOUNDCLOUD_URL_PLCHLDR'	=> 'https://soundcloud.com/your-username-here/',

	'ACP_RKEXTENDSOCIAL_STEAM_ENBL'			    => 'Enable Steam social',
	'ACP_RKEXTENDSOCIAL_STEAM_URL'			    => 'Steam URL',
	'ACP_RKEXTENDSOCIAL_STEAM_URL_PLCHLDR'	    => 'https://www.steam.com/your-username-here/',

	'ACP_RKEXTENDSOCIAL_REDDIT_ENBL'		    => 'Enable Reddit social',
	'ACP_RKEXTENDSOCIAL_REDDIT_URL'				=> 'Reddit URL',
	'ACP_RKEXTENDSOCIAL_REDDIT_URL_PLCHLDR'		=> 'https://www.reddit.com/your-username-here/',

	'ACP_RKEXTENDSOCIAL_WEIBO_ENBL'			    => 'Enable Sina Weibo social',
	'ACP_RKEXTENDSOCIAL_WEIBO_URL'				=> 'Weibo URL',
	'ACP_RKEXTENDSOCIAL_WEIBO_URL_PLCHLDR'		=> 'https://www.weibo.com/your-username-here/',

	'ACP_RKEXTENDSOCIAL_SAVED'					=> 'Extension settings updated successfully.',
));
