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

	'ACP_RKEXTENDSOCIAL_SETTINGS'				=> 'Paramètres',
	'ACP_RKEXTENDSOCIAL_SETTINGS_INFO'			=> 'Ici, vous pouvez configurer l\'extension Extended Footer Socials.',

	'ACP_RKEXTENDSOCIAL_ENBL_SETUP'				=> 'Activer l\'extension',
	'ACP_RKEXTENDSOCIAL_ENBL'					=> 'Activer l\'extension Extended Footer Socials',

	'ACP_RKEXTENDSOCIAL_SCLS_STYLE_SETUP'		=> 'Paramètres du style des icônes sociaux',
	'ACP_RKEXTENDSOCIAL_SCLS_SZE'				=> 'Taille des icônes sociaux',
	'ACP_RKEXTENDSOCIAL_SCLS_SML'				=> 'Petit',
	'ACP_RKEXTENDSOCIAL_SCLS_MDM'				=> 'Médium',
	'ACP_RKEXTENDSOCIAL_SCLS_LRG'				=> 'Large',
	'ACP_RKEXTENDSOCIAL_SCLS_CRNRS'				=> 'Coins des icônes sociaux',
	'ACP_RKEXTENDSOCIAL_SCLS_FLT'				=> 'Plat',
	'ACP_RKEXTENDSOCIAL_SCLS_RNDD'				=> 'Arrondi',
	'ACP_RKEXTENDSOCIAL_SCLS_RND'				=> 'Rond',

	'ACP_RKEXTENDSOCIAL_SCLS_LINKS_SETUP'		=> 'Paramètres des liens sociaux',

	'ACP_RKEXTENDSOCIAL_WBST_ENBL'				=> 'Activez l\'icône social de votre site',
	'ACP_RKEXTENDSOCIAL_WBST_URL'				=> 'URL de votre site',
	'ACP_RKEXTENDSOCIAL_WBST_URL_PLCHLDR'		=> 'https://your-website-url-here.co.uk/',

	'ACP_RKEXTENDSOCIAL_FCBK_ENBL'				=> 'Activez l\'icône social Facebook social',
	'ACP_RKEXTENDSOCIAL_FCBK_URL'				=> 'URL Facebook',
	'ACP_RKEXTENDSOCIAL_FCBK_URL_PLCHLDR'		=> 'https://www.facebook.com/vers-votre-profil/',

	'ACP_RKEXTENDSOCIAL_TWTR_ENBL'				=> 'Activez l\'icône social Twitter social',
	'ACP_RKEXTENDSOCIAL_TWTR_URL'				=> 'URL Twitter',
	'ACP_RKEXTENDSOCIAL_TWTR_URL_PLCHLDR'		=> 'https://twitter.com/vers-votre-profil/',

	'ACP_RKEXTENDSOCIAL_INSTA_ENBL'				=> 'Activez l\'icône social InstaGram social',
	'ACP_RKEXTENDSOCIAL_INSTA_URL'				=> 'URL InstaGram',
	'ACP_RKEXTENDSOCIAL_INSTA_URL_PLCHLDR'		=> 'https://www.instagram.com/vers-votre-profil/',

	'ACP_RKEXTENDSOCIAL_PNTRST_ENBL'			=> 'Activez l\'icône social Pinterest social',
	'ACP_RKEXTENDSOCIAL_PNTRST_URL'				=> 'URL Pinterest',
	'ACP_RKEXTENDSOCIAL_PNTRST_URL_PLCHLDR'		=> 'https://www.pinterest.co.uk/vers-votre-profil/',

	'ACP_RKEXTENDSOCIAL_YTUBE_ENBL'				=> 'Activez l\'icône social YouTube social',
	'ACP_RKEXTENDSOCIAL_YTUBE_URL'				=> 'URL YouTube',
	'ACP_RKEXTENDSOCIAL_YTUBE_URL_PLCHLDR'		=> 'https://www.youtube.com/your-channel-url-here/',

	'ACP_RKEXTENDSOCIAL_DRBL_ENBL'				=> 'Activez l\'icône social Dribbble social',
	'ACP_RKEXTENDSOCIAL_DRBL_URL'				=> 'URL Dribbble',
	'ACP_RKEXTENDSOCIAL_DRBL_URL_PLCHLDR'		=> 'https://dribbble.com/vers-votre-profil/',

	'ACP_RKEXTENDSOCIAL_CDPEN_ENBL'				=> 'Activez l\'icône social CodePen social',
	'ACP_RKEXTENDSOCIAL_CDPEN_URL'				=> 'URL CodePen',
	'ACP_RKEXTENDSOCIAL_CDPEN_URL_PLCHLDR'		=> 'https://codepen.io/vers-votre-profil/',

	'ACP_RKEXTENDSOCIAL_GTHUB_ENBL'				=> 'Activez l\'icône social GitHub social',
	'ACP_RKEXTENDSOCIAL_GTHUB_URL'				=> 'URL GitHub',
	'ACP_RKEXTENDSOCIAL_GTHUB_URL_PLCHLDR'		=> 'https://github.com/vers-votre-profil/',

	'ACP_RKEXTENDSOCIAL_EBAY_ENBL'				=> 'Activez l\'icône social eBay social',
	'ACP_RKEXTENDSOCIAL_EBAY_URL'				=> 'URL eBay',
	'ACP_RKEXTENDSOCIAL_EBAY_URL_PLCHLDR'		=> 'https://www.ebay.co.uk/usr/vers-votre-profil/',

	'ACP_RKEXTENDSOCIAL_PYPL_ENBL'				=> 'Activez l\'icône social PayPal social',
	'ACP_RKEXTENDSOCIAL_PYPL_URL'				=> 'URL PayPal',
	'ACP_RKEXTENDSOCIAL_PYPL_URL_PLCHLDR'		=> 'https://www.paypal.com/paypalme/vers-votre-profil/',
    
    'ACP_RKEXTENDSOCIAL_DISCO_ENBL'				=> 'Activez l\'icône social Discord social',
	'ACP_RKEXTENDSOCIAL_DISCO_URL'				=> 'URL Discord',
	'ACP_RKEXTENDSOCIAL_DISCO_URL_PLCHLDR'		=> 'https://discord.gg/your-invitation-here/',

	'ACP_RKEXTENDSOCIAL_PATREON_ENBL'			=> 'Activez l\'icône social Patreon social',
	'ACP_RKEXTENDSOCIAL_PATREON_URL'			=> 'URL Patreon',
	'ACP_RKEXTENDSOCIAL_PATREON_URL_PLCHLDR'	=> 'https://www.patreon.com/vers-votre-profil/',

	'ACP_RKEXTENDSOCIAL_BMAC_ENBL'				=> 'Activez l\'icône social BuyMeaCoffee social',
	'ACP_RKEXTENDSOCIAL_BMAC_URL'				=> 'URL BuyMeaCoffee',
	'ACP_RKEXTENDSOCIAL_BMAC_URL_PLCHLDR'		=> 'https://www.buymeacoffee.com/vers-votre-profil/',

	'ACP_RKEXTENDSOCIAL_TWITCH_ENBL'			=> 'Activez l\'icône social Twitch social',
	'ACP_RKEXTENDSOCIAL_TWITCH_URL'				=> 'URL Twitch',
	'ACP_RKEXTENDSOCIAL_TWITCH_URL_PLCHLDR'		=> 'https://www.twitch.tv/vers-votre-profil/',

    'ACP_RKEXTENDSOCIAL_LINKEDIN_ENBL'			=> 'Activez l\'icône social LinkedIn social',
	'ACP_RKEXTENDSOCIAL_LINKEDIN_URL'			=> 'URL LinkedIn',
	'ACP_RKEXTENDSOCIAL_LINKEDIN_URL_PLCHLDR'	=> 'https://www.linkedin.com/vers-votre-profil/',
    
    'ACP_RKEXTENDSOCIAL_SOUNDCLOUD_ENBL'		=> 'Activez l\'icône social SoundCloud social',
	'ACP_RKEXTENDSOCIAL_SOUNDCLOUD_URL'			=> 'URL SoundCloud',
	'ACP_RKEXTENDSOCIAL_SOUNDCLOUD_URL_PLCHLDR'	=> 'https://soundcloud.com/vers-votre-profil/',

	'ACP_RKEXTENDSOCIAL_STEAM_ENBL'			    => 'Activez l\'icône social Steam social',
	'ACP_RKEXTENDSOCIAL_STEAM_URL'			    => 'URL Steam',
	'ACP_RKEXTENDSOCIAL_STEAM_URL_PLCHLDR'	    => 'https://www.steam.com/vers-votre-profil/',

	'ACP_RKEXTENDSOCIAL_REDDIT_ENBL'		    => 'Activez l\'icône social Reddit social',
	'ACP_RKEXTENDSOCIAL_REDDIT_URL'				=> 'URL Reddit',
	'ACP_RKEXTENDSOCIAL_REDDIT_URL_PLCHLDR'		=> 'https://www.reddit.com/vers-votre-profil/',

	'ACP_RKEXTENDSOCIAL_WEIBO_ENBL'			    => 'Activez l\'icône social Sina Weibo social',
	'ACP_RKEXTENDSOCIAL_WEIBO_URL'				=> 'URL Weibo',
	'ACP_RKEXTENDSOCIAL_WEIBO_URL_PLCHLDR'		=> 'https://www.weibo.com/vers-votre-profil/',

	'ACP_RKEXTENDSOCIAL_SAVED'					=> 'Les paramètres de l\'extension ont été mis à jour avec succès.',
));
