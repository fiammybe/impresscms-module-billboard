<?php
/**
 * Class representing Billboard slide objects
 *
 * @copyright	(c) 2011 David Janssens
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @since		1.0
 * @author		David Janssens (fiammybe) <david.j@impresscms.org>
 * @package		billboard
 * @version		$Id$
 */

defined("ICMS_ROOT_PATH") or die("ICMS root path not defined");

class mod_billboard_Slide extends icms_ipf_Object {
	/**
	 * Constructor
	 *
	 * @param mod_billboard_Slide $handler Object handler
	 */
	public function __construct(&$handler) {
		parent::__construct($handler);

		$this->quickInitVar("slide_id", XOBJ_DTYPE_INT, TRUE);
		$this->quickInitVar("image", XOBJ_DTYPE_IMAGE, TRUE);
		$this->quickInitVar("title", XOBJ_DTYPE_TXTBOX, FALSE);
		$this->quickInitVar("url", XOBJ_DTYPE_TXTBOX, FALSE);
		$this->quickInitVar("caption", XOBJ_DTYPE_TXTAREA, FALSE);
		$this->quickInitVar("slide_order", XOBJ_DTYPE_INT, FALSE);
		$this->setControl("image", "image");

	}

	/**
	 * Overriding the icms_ipf_Object::getVar method to assign a custom method on some
	 * specific fields to handle the value before returning it
	 *
	 * @param str $key key of the field
	 * @param str $format format that is requested
	 * @return mixed value of the field that is requested
	 */
	public function getVar($key, $format = "s") {
		if ($format == "s" && in_array($key, array())) {
			return call_user_func(array ($this,	$key));
		}
		return parent::getVar($key, $format);
	}
}