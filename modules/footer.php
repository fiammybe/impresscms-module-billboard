<?php
/**
 * Footer page included at the end of each page on user side of the mdoule
 *
 * @copyright	(c) 2011 David Janssens
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @since		1.0
 * @author		David Janssens (fiammybe) <david.j@impresscms.org>
 * @package		billboard
 * @version		$Id$
 */

defined("ICMS_ROOT_PATH") or die("ICMS root path not defined");

$icmsTpl->assign("billboard_adminpage", "<a href='" . ICMS_URL . "/modules/" . icms::$module->getVar("dirname") . "/admin/index.php'>" ._MD_BILLBOARD_ADMIN_PAGE . "</a>");
$icmsTpl->assign("billboard_is_admin", icms_userIsAdmin(BILLBOARD_DIRNAME));
$icmsTpl->assign('billboard_url', BILLBOARD_URL);
$icmsTpl->assign('billboard_images_url', BILLBOARD_IMAGES_URL);

$xoTheme->addStylesheet(BILLBOARD_URL . 'module' . ((defined("_ADM_USE_RTL") && _ADM_USE_RTL) ? '_rtl' : '') . '.css');

include_once ICMS_ROOT_PATH . '/footer.php';