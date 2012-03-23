<?php
/**
 * Admin page to manage slides
 *
 * List, add, edit and delete slide objects
 *
 * @copyright	(c) 2011 David Janssens
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @since		1.0
 * @author		David Janssens (fiammybe) <david.j@impresscms.org>
 * @package		billboard
 * @version		$Id$
 */

/**
 * Edit a Slide
 *
 * @param int $slide_id Slideid to be edited
*/
function editslide($slide_id = 0) {
	global $billboard_slide_handler, $icmsModule, $icmsAdminTpl;

	$slideObj = $billboard_slide_handler->get($slide_id);

	if (!$slideObj->isNew()){
		$icmsModule->displayAdminMenu(0, _AM_BILLBOARD_SLIDES . " > " . _CO_ICMS_EDITING);
		$sform = $slideObj->getForm(_AM_BILLBOARD_SLIDE_EDIT, "addslide");
		$sform->assign($icmsAdminTpl);
	} else {
		$icmsModule->displayAdminMenu(0, _AM_BILLBOARD_SLIDES . " > " . _CO_ICMS_CREATINGNEW);
		$sform = $slideObj->getForm(_AM_BILLBOARD_SLIDE_CREATE, "addslide");
		$sform->assign($icmsAdminTpl);

	}
	$icmsAdminTpl->display("db:billboard_admin_slide.html");
}

include_once "admin_header.php";

$billboard_slide_handler = icms_getModuleHandler("slide", basename(dirname(dirname(__FILE__))), "billboard");
/** Use a naming convention that indicates the source of the content of the variable */
$clean_op = "";
/** Create a whitelist of valid values, be sure to use appropriate types for each value
 * Be sure to include a value for no parameter, if you have a default condition
 */
$valid_op = array ("mod", "changedField", "addslide", "del", "view", "");

if (isset($_GET["op"])) $clean_op = htmlentities($_GET["op"]);
if (isset($_POST["op"])) $clean_op = htmlentities($_POST["op"]);

/** Again, use a naming convention that indicates the source of the content of the variable */
$clean_slide_id = isset($_GET["slide_id"]) ? (int)$_GET["slide_id"] : 0 ;

/**
 * in_array() is a native PHP function that will determine if the value of the
 * first argument is found in the array listed in the second argument. Strings
 * are case sensitive and the 3rd argument determines whether type matching is
 * required
*/
if (in_array($clean_op, $valid_op, TRUE)) {
	switch ($clean_op) {
		case "mod":
		case "changedField":
			icms_cp_header();
			editslide($clean_slide_id);
			break;

		case "addslide":
			$controller = new icms_ipf_Controller($billboard_slide_handler);
			$controller->storeFromDefaultForm(_AM_BILLBOARD_SLIDE_CREATED, _AM_BILLBOARD_SLIDE_MODIFIED);
			break;

		case "del":
			$controller = new icms_ipf_Controller($billboard_slide_handler);
			$controller->handleObjectDeletion();
			break;

		case "view" :
			$slideObj = $billboard_slide_handler->get($clean_slide_id);
			icms_cp_header();
			$slideObj->displaySingleObject();
			break;

		default:
			icms_cp_header();
			$icmsModule->displayAdminMenu(0, _AM_BILLBOARD_SLIDES);
			$objectTable = new icms_ipf_view_Table($billboard_slide_handler);
			$objectTable->addColumn(new icms_ipf_view_Column("title"));
			$objectTable->addIntroButton("addslide", "slide.php?op=mod", _AM_BILLBOARD_SLIDE_CREATE);
			$icmsAdminTpl->assign("billboard_slide_table", $objectTable->fetch());
			$icmsAdminTpl->display("db:billboard_admin_slide.html");
			break;
	}
	icms_cp_footer();
}
/**
 * If you want to have a specific action taken because the user input was invalid,
 * place it at this point. Otherwise, a blank page will be displayed
 */