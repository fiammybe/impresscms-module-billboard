<?php
/**
 * Classes responsible for managing Billboard slideshow objects
 *
 * @copyright    (c) 2012 David Janssens
 * @license        http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @since        1.1
 * @author        David Janssens (fiammybe) <fiammybe@gmail.com>
 * @package        billboard
 * @version        $Id$
 */

defined("ICMS_ROOT_PATH") or die("ICMS root path not defined");

class mod_billboard_SlideshowHandler extends icms_ipf_Handler
{
    /**
     * Constructor
     *
     * @param icms_db_legacy_Database $db database connection object
     */
    public function __construct(&$db)
    {
        parent::__construct($db, "slideshow", "slideshow_id", "title", "billboard");
    }


}