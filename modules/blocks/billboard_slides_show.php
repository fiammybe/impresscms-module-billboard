<?php
/**
 * Billboard version infomation
 *
 * This file holds the function needed to fill the image slides
 *
 * @copyright	(c) 2011 David Janssens
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @since		0.1
 * @author		David Janssens (fiammybe) <david.j@impresscms.org>
 * @package		billboard
 * @version		$Id$
 */

if (!defined("ICMS_ROOT_PATH")) die("ICMS root path not defined");

function billboard_slides_show()
{
	include_once(ICMS_ROOT_PATH . '/modules/billboard/include/common.php');
	
	$billboard_slide_handler = icms_getModuleHandler('slide', 'billboard');
	$billboard_config = icms_getModuleConfig('billboard');
		
	$criteria = new CriteriaCompo();
	$criteria->setStart(0);
	$criteria->setLimit(10);
	$criteria->setSort('slide_order');
	$criteria->setOrder('ASC');
	
	$block = array();
	$block['slides'] = $billboard_slide_handler->getObjects($criteria, true, false);
	$block['config'] = $billboard_config;
	  
	return $block;
}

?>