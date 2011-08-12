<?php
/**
 * Custom error code page generation
 *
 * @package comingsoon
 * @link http://tools.ietf.org/html/rfc2616
 * @link http://en.wikipedia.org/wiki/List_of_HTTP_status_codes
 * @author jpeck@fluxsauce.com
 */

global $_CONFIG;
require_once('config/error.inc.php');

$rfc_status_codes = array(
  400 => array(
    'title' => 'Bad Request',
    'explanation' => 'The request could not be understood by the server due to malformed syntax.',
  ),
  401 => array(
    'title' => 'Unauthorized',
    'explanation' => 'The request requires user authentication.',
  ),
  403 => array(
    'title' => 'Forbidden',
    'explanation' => 'The server understood the request, but is refusing to fulfill it.',
  ),
  404 => array(
    'title' => 'Not Found',
    'explanation' => 'The server has not found anything matching the Request-URI.',
  ),
  405 => array(
    'title' => 'Method Not Allowed',
    'explanation' => 'The method specified in the Request-Line is not allowed for the resource identified by the Request-URI.',
  ),
  406 => array(
    'title' => 'Not Acceptable',
    'explanation' => 'The resource identified by the request is only capable of generating response entities which have content characteristics not acceptable according to the accept headers sent in the request.',
  ),
  407 => array(
    'title' => 'The client must first authenticate itself with the proxy.',
    'explanation' => 'Proxy Authentication Required',
  ),
  408 => array(
    'title' => 'Request Timeout',
    'explanation' => 'The client did not produce a request within the time that the server was prepared to wait.',
  ),
  409 => array(
    'title' => 'Conflict',
    'explanation' => 'he request could not be completed due to a conflict with the current state of the resource.',
  ),
  410 => array(
    'title' => 'Gone',
    'explanation' => 'The requested resource is no longer available at the server and no forwarding address is known.',
  ),
  411 => array(
    'title' => 'Length Required',
    'explanation' => 'The server refuses to accept the request without a defined Content-Length.',
  ),
  412 => array(
    'title' => 'Precondition Failed',
    'explanation' => ' The precondition given in one or more of the request-header fields evaluated to false when it was tested on the server.',
  ),
  413 => array(
    'title' => 'Request Entity Too Large',
    'explanation' => 'The server is refusing to process a request because the request entity is larger than the server is willing or able to process.',
  ),
  414 => array(
    'title' => 'Request-URI Too Long',
    'explanation' => ' The server is refusing to service the request because the Request-URI is longer than the server is willing to interpret.',
  ),
  415 => array(
    'title' => 'Unsupported Media Type',
    'explanation' => 'The server is refusing to service the request because the entity of the request is in a format not supported by the requested resource for the requested method.',
  ),
  416 => array(
    'title' => 'Requested Range Not Satisfiable',
    'explanation' => 'The client has asked for a portion of the file, but the server cannot supply that portion.',
  ),
  417 => array(
    'title' => 'Expectation Failed',
    'explanation' => 'The server cannot meet the requirements of the Expect request-header field.',
  ),
  500 => array(
    'title' => 'Internal Server Error',
    'explanation' => 'The server encountered an unexpected condition which prevented it from fulfilling the request.',
  ),
  501 => array(
    'title' => 'Not Implemented',
    'explanation' => 'The server does not support the functionality required to fulfill the request.',
  ),
  502 => array(
    'title' => 'Bad Gateway',
    'explanation' => 'The server, while acting as a gateway or proxy, received an invalid response from the upstream server it accessed in attempting to fulfill the request.',
  ),
  503 => array(
    'title' => 'Service Unavailable',
    'explanation' => ' The server is currently unable to handle the request due to a temporary overloading or maintenance of the server.',
  ),
  504 => array(
    'title' => 'Gateway Timeout',
    'explanation' => 'The server, while acting as a gateway or proxy, did not receive a timely response from the upstream server specified by the URI (e.g. HTTP, FTP, LDAP) or some other auxiliary server (e.g. DNS) it needed to access in attempting to complete the request.',
  ),
  505 => array(
    'title' => 'HTTP Version Not Supported',
    'explanation' => 'The server does not support, or refuses to support, the HTTP protocol version that was used in the request message.',
  ),
);

$status_code = getenv('REDIRECT_STATUS');
$_CONFIG['caption_bottom']['content'] = '<h1>' . $status_code . ' ' . $rfc_status_codes[$status_code]['title'] . '</h1>';
$_CONFIG['caption_bottom']['content'] .= '<div>' . $rfc_status_codes[$status_code]['explanation'] . '</div>';

include_once('render.php');
?>