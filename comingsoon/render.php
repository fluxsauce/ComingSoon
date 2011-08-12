<?php
/**
 * Generate a page based on a global $_CONFIG.
 *
 * @package comingsoon
 * @author jpeck@fluxsauce.com
 * @link http://www.wpdfd.com/editorial/thebox/deadcentre4.html
 */
global $_CONFIG;

// For optimzation, create an array with the content, then implode it to render
$output = array();

// HTML5
$output[] = '<!DOCTYPE html>';
$output[] = '<html>';
$output[] = '<head>';
$output[] = '<meta http-equiv=content-type content="text/html;charset=UTF-8">';
// Description
if ($_CONFIG['meta_description']) {
	$output[] = '<meta name="description" content="' . $_CONFIG['meta_description'] . '"/>';
}
// Keywords
if ($_CONFIG['meta_keywords']) {
	$output[] = '<meta name="keywords" content="' . $_CONFIG['meta_keywords'] . '"/>';
}
// Title
if ($_CONFIG['title']) {
	$output[] = '<title>' . $_CONFIG['title'] . '</title>';
}
// favicon
if ($_CONFIG['favicon']) {
	$output[] = '<link rel="Shortcut Icon" href="' . $_CONFIG['base_url'] . 'images/' . $_CONFIG['favicon'] . '" type="image/x-icon" />';
}
// External CSS
$output[] = '<link rel="stylesheet" href="' . $_CONFIG['base_url'] . 'css/' . $_CONFIG['stylesheet'] . '"/>';
// Inline CSS: Customization based on size of photo and captions
$output[] = "<style>
#caption_top {
  width: " . $_CONFIG['photo']['width_px'] . "px;
  height: " . $_CONFIG['caption_top']['height'] . ";
  top: -" . $_CONFIG['caption_top']['height'] . ";
}
#content {
  top: -" . round($_CONFIG['photo']['height_px'] / 2) . "px;
  height: " . $_CONFIG['photo']['height_px'] . "px;
  width: " . $_CONFIG['photo']['width_px'] . "px;
  margin-left: -" . round($_CONFIG['photo']['width_px'] / 2) . "px;
}
#caption_bottom {
  top: " . ($_CONFIG['photo']['height_px'] + 2) . "px;
  height: " . $_CONFIG['caption_bottom']['height'] . ";
  width: " . $_CONFIG['photo']['width_px'] . "px;
}
</style>";
$output[] = '</head>';
$output[] = '<body>';
// This is the line that goes across the page
$output[] = '<div id="horizon">';
// Content, including the two captions
$output[] = '<div id="content">';
// #caption_top
if ('' != $_CONFIG['caption_top']['content']) {
	$output[] = '<div id="caption_top" class="captions">' . $_CONFIG['caption_top']['content'] . '</div>';
}
// Image
$output[] = '<div>';
$output[] = '<img src="' . $_CONFIG['base_url'] . 'images/' . $_CONFIG['photo']['filename'] . '" alt="' . $_CONFIG['photo']['alt'] . '" width="' . $_CONFIG['photo']['width_px'] . '" height="' . $_CONFIG['photo']['height_px'] . '"/>';
$output[] = '</div>';
// #caption_bottom
if ('' != $_CONFIG['caption_bottom']['content']) {
	$output[] = '<div id="caption_bottom" class="captions">' . $_CONFIG['caption_bottom']['content'] . '</div>';
}
$output[] = '</div>'; // #horizon
$output[] = '</div>'; // #content
// Google Analytics
if ('' != $_CONFIG['google_analytics_account_id']) {
	$output[] = "<script type=\"text/javascript\">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '" . $_CONFIG['google_analytics_account_id'] . "']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>";
}
$output[] = '</body>';
$output[] = '</html>';

// Render
// echo implode("\n", $output); // Debug
echo implode('', $output); // Production