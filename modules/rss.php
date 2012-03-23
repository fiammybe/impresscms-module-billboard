<?php
/**
 * Generating an RSS feed
 *
 * @copyright	(c) 2011 David Janssens
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @since		1.0
 * @author		David Janssens (fiammybe) <david.j@impresscms.org>
 * @package		billboard
 * @version		$Id$
 */

/** Include the module's header for all pages */
include_once 'header.php';
include_once ICMS_ROOT_PATH . '/header.php';

/** To come soon in imBuilding...

$clean_post_uid = isset($_GET['uid']) ? intval($_GET['uid']) : FALSE;

$billboard_feed = new icms_feeds_Rss();

$billboard_feed->title = $icmsConfig['sitename'] . ' - ' . $icmsModule->name();
$billboard_feed->url = XOOPS_URL;
$billboard_feed->description = $icmsConfig['slogan'];
$billboard_feed->language = _LANGCODE;
$billboard_feed->charset = _CHARSET;
$billboard_feed->category = $icmsModule->name();

$billboard_post_handler = icms_getModuleHandler("post", basename(dirname(__FILE__)), "billboard");
//BillboardPostHandler::getPosts($start = 0, $limit = 0, $post_uid = FALSE, $year = FALSE, $month = FALSE
$postsArray = $billboard_post_handler->getPosts(0, 10, $clean_post_uid);

foreach($postsArray as $postArray) {
	$billboard_feed->feeds[] = array (
	  'title' => $postArray['post_title'],
	  'link' => str_replace('&', '&amp;', $postArray['itemUrl']),
	  'description' => htmlspecialchars(str_replace('&', '&amp;', $postArray['post_lead']), ENT_QUOTES),
	  'pubdate' => $postArray['post_published_date_int'],
	  'guid' => str_replace('&', '&amp;', $postArray['itemUrl']),
	);
}

$billboard_feed->render();
*/