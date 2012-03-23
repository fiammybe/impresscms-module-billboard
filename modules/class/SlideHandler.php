<?php
/**
 * Classes responsible for managing Billboard slide objects
 *
 * @copyright	(c) 2011 David Janssens
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @since		1.0
 * @author		David Janssens (fiammybe) <david.j@impresscms.org>
 * @package		billboard
 * @version		$Id$
 */

defined("ICMS_ROOT_PATH") or die("ICMS root path not defined");

class mod_billboard_SlideHandler extends icms_ipf_Handler {
	/**
	 * Constructor
	 *
	 * @param icms_db_legacy_Database $db database connection object
	 */
	public function __construct(&$db) {
		parent::__construct($db, "slide", "slide_id", "title", "caption", "billboard");
		$this->enableUpload(array("image/gif", "image/jpeg", "image/pjpeg", "image/png"), 512000, 800, 600);
	}


}