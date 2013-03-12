<?php
/**
 * Comment include file
 *
 * File holding functions used by the module to hook with the comment system of ImpressCMS
 *
 * @copyright	(c) 2011 David Janssens
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @since		1.0
 * @author		David Janssens (fiammybe) <david.j@impresscms.org>
 * @package		billboard
 * @version		$Id$
 */

function billboard_com_update($item_id, $total_num) {
    $billboard_post_handler = icms_getModuleHandler("post", basename(dirname(dirname(__FILE__))), "billboard");
    $billboard_post_handler->updateComments($item_id, $total_num);
}

function billboard_com_approve(&$comment) {
    // notification mail here
}