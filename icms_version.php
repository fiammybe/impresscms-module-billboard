<?php
/**
 * Billboard version infomation
 *
 * This file holds the configuration information of this module
 *
 * @copyright		(c) 2011-2017 David Janssens
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @since		1.0
 * @author		David Janssens (fiammybe) <david.j@impresscms.org>
 * @package		billboard
 * @version		$Id$
 */

defined("ICMS_ROOT_PATH") or die("ICMS root path not defined");

/**  General Information  */
$modversion = array(
	"name"						=> _MI_BILLBOARD_MD_NAME,
	"version"					=> "2.0",
	"description"					=> _MI_BILLBOARD_MD_DESC,
	"author"					=> "David Janssens (fiammybe)",
	"credits"					=> "ImpressCMS core team",
	"help"						=> "",
	"license"					=> "GNU General Public License (GPL-v2)",
	"official"					=> 0,
	"dirname"					=> basename(dirname(__FILE__)),
	"modname"					=> "billboard",

/**  Images information  */
	"iconsmall"					=> "images/icon_small.png",
	"iconbig"					=> "images/icon_big.png",
	"image"						=> "images/icon_big.png", /* for backward compatibility */

/**  Development information */
	"status_version"				=> "2",
	"status"					=> "Alpha",
	"date"						=> "29/11/2017",
	"author_word"					=> "Updating and extending the billboards module",
	"warning"					=> _CO_ICMS_WARNING_ALPHA,

/** Contributors */
	"developer_website_url"				=> "http://www.impresscms.be",
	"developer_website_name"			=> "ImpressCMS Belgium",
	"developer_email"				=> "david.j@impresscms.org",

/** Administrative information */
	"hasAdmin"					=> 1,
	"adminindex"					=> "admin/index.php",
	"adminmenu"					=> "admin/menu.php",

/** Install and update informations */
	"onInstall"					=> "include/onupdate.inc.php",
	"onUpdate"					=> "include/onupdate.inc.php",

/** Search information */
	"hasSearch"					=> 0,

/** Menu information */
	"hasMain"					=> 0,

/** Comments information */
	"hasComments"					=> 0
	);
/** other possible types: testers, translators, documenters and other */
$modversion['people']['developers'][] = "David Janssens (fiammybe)";
$modversion['people']['developers'][] = "Simon (Madfish)";

/** Manual */
$modversion['manual']['wiki'][] = "<a href='https://github.com/IPFModules/billboard/wiki'>English</a>";

/** Database information */
$modversion['object_items'][1] = 'slide';

$modversion["tables"] = icms_getTablesArray($modversion['dirname'], $modversion['object_items']);

/** Templates information */
$modversion['templates'] = array(
	array("file" => "billboard_admin_slide.html", "description" => "slide Admin Index"),
	array("file" => "billboard_slide.html", "description" => "slide Index"),

	array('file' => 'billboard_header.html', 'description' => 'Module Header'),
	array('file' => 'billboard_footer.html', 'description' => 'Module Footer'));

/** Blocks information */
/** Blocks information */
$modversion['blocks'][1] = array(
  'file' => 'billboard_slides_show.php',
  'name' => '_MI_BB_SLIDESHOWLIST',
  'description' => '_MI_BB_SLIDESHOWDSC',
  'show_func' => 'billboard_slides_show',
  'template' => 'billboard_slides_show.html');

/** Preferences information */
$modversion['config'][] = array(
  'name' => 'coin_width',
  'title' => '_MI_BB_COINWIDTH',
  'description' => '_MI_BB_COINWIDTHDSC',
  'formtype' => 'textbox',
  'valuetype' => 'text',
  'default' => 565);
  
$modversion['config'][] = array(
  'name' => 'coin_height',
  'title' => '_MI_BB_COINHEIGHT',
  'description' => '_MI_BB_COINHEIGHTDSC',
  'formtype' => 'textbox',
  'valuetype' => 'text',
  'default' => 290);
  
$modversion['config'][] = array(
  'name' => 'coin_spw',
  'title' => '_MI_BB_COINSPW',
  'description' => '_MI_BB_COINSPWDSC',
  'formtype' => 'textbox',
  'valuetype' => 'text',
  'default' => 7);
  
$modversion['config'][] = array(
  'name' => 'coin_sph',
  'title' => '_MI_BB_COINSPH',
  'description' => '_MI_BB_COINSPHDSC',
  'formtype' => 'textbox',
  'valuetype' => 'text',
  'default' => 5);
  
$modversion['config'][] = array(
  'name' => 'coin_delay',
  'title' => '_MI_BB_COINDELAY',
  'description' => '_MI_BB_COINDELAYDSC',
  'formtype' => 'textbox',
  'valuetype' => 'text',
  'default' => 3000);
  
$modversion['config'][] = array(
  'name' => 'coin_sdelay',
  'title' => '_MI_BB_COINSDELAY',
  'description' => '_MI_BB_COINSDELAYDSC',
  'formtype' => 'textbox',
  'valuetype' => 'text',
  'default' => 30);
  
$modversion['config'][] = array(
  'name' => 'coin_opacity',
  'title' => '_MI_BB_COINOPACITY',
  'description' => '_MI_BB_COINOPACITYDSC',
  'formtype' => 'textbox',
  'valuetype' => 'text',
  'default' => 0.7);
  
$modversion['config'][] = array(
  'name' => 'coin_titlespeed',
  'title' => '_MI_BB_COINTTLSPEED',
  'description' => '_MI_BB_COINTTLSPEEDDSC',
  'formtype' => 'textbox',
  'valuetype' => 'text',
  'default' => 500);
  
$modversion['config'][] = array(
  'name' => 'coin_effect',
  'title' => '_MI_BB_COINEFFECT',
  'description' => '_MI_BB_COINEFFECTDSC',
  'formtype' => 'textbox',
  'valuetype' => 'text',
  'default' => 'random');
    
$modversion['config'][] = array(
  'name' => 'coin_navigation',
  'title' => '_MI_BB_COINNAV',
  'description' => '_MI_BB_COINNAVDSC',
  'formtype' => 'textbox',
  'valuetype' => 'text',
  'default' => 'true');
  
$modversion['config'][] = array(
  'name' => 'coin_links',
  'title' => '_MI_BB_COINLNK',
  'description' => '_MI_BB_COINLNKDSC',
  'formtype' => 'textbox',
  'valuetype' => 'text',
  'default' => 'true');
  
$modversion['config'][] = array(
  'name' => 'coin_hoverpause',
  'title' => '_MI_BB_COINPAUSE',
  'description' => '_MI_BB_COINPAUSEDSC',
  'formtype' => 'textbox',
  'valuetype' => 'text',
  'default' => 'true');
