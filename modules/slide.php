<?php
/**
* Slide page
*
* @copyright	(c) 2011 David Janssens
* @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
* @since		1.0
* @author		David Janssens (fiammybe) <david.j@impresscms.org>
* @package		billboard
* @version		$Id$
*/

include_once "header.php";

$xoopsOption["template_main"] = "billboard_slide.html";
include_once ICMS_ROOT_PATH . "/header.php";

$billboard_slide_handler = icms_getModuleHandler("slide", basename(dirname(__FILE__)), "billboard");

$billboardModuleConfig = icms_getModuleConfig('billboard');

/** Use a naming convention that indicates the source of the content of the variable */
$clean_slide_id = isset($_GET["slide_id"]) ? (int)$_GET["slide_id"] : 0 ;
$slideObj = $billboard_slide_handler->get($clean_slide_id);

if ($slideObj && !$slideObj->isNew()) {
	$icmsTpl->assign("billboard_slide", $slideObj->toArray());
} else {
	$icmsTpl->assign("billboard_title", _MD_BILLBOARD_ALL_SLIDES);

	$objectTable = new icms_ipf_view_Table($billboard_slide_handler, FALSE, array());
	$objectTable->isForUserSide();
	$objectTable->addColumn(new icms_ipf_view_Column("title"));
	$icmsTpl->assign("billboard_slide_table", $objectTable->fetch());
	$icmsTpl->assign("billboard_config", $billboardModuleConfig)
}

$icmsTpl->assign("billboard_module_home", '<a href="' . ICMS_URL . "/modules/" . icms::$module->getVar("dirname") . '/">' . icms::$module->getVar("name") . "</a>");

include_once "footer.php";