<?php
/**
 * Index page configuration
 *
 * @package comingsoon
 * @author jpeck@fluxsauce.com
 */

global $_CONFIG;
$_CONFIG = array();
// All relative URLs will be converted to absolute URLs
$_CONFIG['base_url'] = '/comingsoon/';
// Style sheet, relative to css directory from base_url; required
$_CONFIG['stylesheet'] = 'comingsoon.css';
// Favorites icon, relative to images directory from base_url; optional, but highly recommended
$_CONFIG['favicon'] = 'favicon.ico';
// Page description; optional
$_CONFIG['meta_description'] = 'This site has not yet launched.';
// Page keywords, comma separated, no spaces; optional
$_CONFIG['meta_keywords'] = '';
// Page title; required
$_CONFIG['title'] = 'Placeholder - coming soon...';
// Photo; required
// -- Filename, relative to images directory from base_url
$_CONFIG['photo']['filename'] = 'placeholder.png';
// -- Alt text
$_CONFIG['photo']['alt'] = 'Placeholder';
// -- Height in pixels
$_CONFIG['photo']['height_px'] = 72;
// -- Width in pixels
$_CONFIG['photo']['width_px'] = 493;
// Google Analytics Account ID; optional
$_CONFIG['google_analytics_account_id'] = '';
// Top caption; optional
// -- Content
$_CONFIG['caption_top']['content'] = '<h1>Coming soon...</h1>';
// -- CSS Height, include units
$_CONFIG['caption_top']['height'] = '100px';
// Bottom caption; optional
// -- Content
$_CONFIG['caption_bottom']['content'] = '<h2>Stay tuned for details.</h2>';
$_CONFIG['caption_bottom']['content'] .= '<div>This site has not yet launched.</div>';
// -- CSS Height, include units
$_CONFIG['caption_bottom']['height'] = '100px';