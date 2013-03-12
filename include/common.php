<?php
/**
 * Common file of the module included on all pages of the module
 *
 * @copyright	(c) 2011 David Janssens
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @since		1.0
 * @author		David Janssens (fiammybe) <david.j@impresscms.org>
 * @package		billboard
 * @version		$Id$
 */

defined("ICMS_ROOT_PATH") or die("ICMS root path not defined");

if (!defined("BILLBOARD_DIRNAME")) define("BILLBOARD_DIRNAME", $modversion["dirname"] = basename(dirname(dirname(__FILE__))));
if (!defined("BILLBOARD_URL")) define("BILLBOARD_URL", ICMS_URL."/modules/".BILLBOARD_DIRNAME."/");
if (!defined("BILLBOARD_ROOT_PATH")) define("BILLBOARD_ROOT_PATH", ICMS_ROOT_PATH."/modules/".BILLBOARD_DIRNAME."/");
if (!defined("BILLBOARD_IMAGES_URL")) define("BILLBOARD_IMAGES_URL", BILLBOARD_URL."images/");
if (!defined("BILLBOARD_ADMIN_URL")) define("BILLBOARD_ADMIN_URL", BILLBOARD_URL."admin/");

// Include the common language file of the module
icms_loadLanguageFile("billboard", "common");