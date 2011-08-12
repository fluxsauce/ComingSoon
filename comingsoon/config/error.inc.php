<?php
/**
 * Error page configuration
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
// Page title; required
$_CONFIG['title'] = 'Error';
// Photo; required
// -- Filename, relative to images directory from base_url
$_CONFIG['photo']['filename'] = 'placeholder.png';
// -- Alt text
$_CONFIG['photo']['alt'] = 'Placeholder';
// -- Height in pixels
$_CONFIG['photo']['height_px'] = 72;
// -- Width in pixels
$_CONFIG['photo']['width_px'] = 493;
// Bottom caption; optional
// -- CSS Height, include units
$_CONFIG['caption_bottom']['height'] = '100px';