# "Coming soon" placeholder generator: ComingSoon

Are you working on many web development projects and registering their domains,
but don't have anything to show there until it's ready?  Are you tired of the
nineties animated placeholders with "Under Construction" festering on an
incomplete site?

**ComingSoon** generates a stylish, minimalistic HTML 5 "coming soon"
placeholder.  An image is centered in the page, with optional comments
above and below the image.

Additionally, **ComingSoon** allows you to handle your own server and
client error codes in a standardized manner, rather than defaulting
to the web server's built-in messages.

## Examples

Default index page:

<img src="http://fluxsauce.com/sites/default/files/images/demo-index.png" width="730" height="297"/>

Default error page:

<img src="http://fluxsauce.com/sites/default/files/images/demo-error.png" width="730" height="207"/>

## Requirements

ComingSoon has no library dependencies, but does require Apache (for `.htaccess`) and PHP.

## Installation

Place the contents of ComingSoon in the target web root.  If you are not
using the root, you will have to modify the `$_CONFIG['base_url']` and
`.htaccess` to reflect the proper location. 

## Configuration

There are two configuration files; one for the index page, and one for the
error page.

        comingsoon/config/index.inc.php
        comingsoon/config/error.inc.php

Each configuration file has the following format:

```php
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
```

## Customization

For maximum flexibility, both the index and error pages can have their own stylesheet, image and favicon.

If you replace the image, remember to adjust the `$_CONFIG['photo']`,
as the dimensions, alternate text and filename will have changed and are used
to correctly render the page.

## Error code handling

The `.htaccess` file contains [Apache ErrorDocument Directives](http://httpd.apache.org/docs/current/mod/core.html#errordocument) that direct
the client to the local error handler.

All [RFC2616 client and server status codes are handled](http://tools.ietf.org/html/rfc2616).

You may wish to customize the status messages to something more
touchy-feely if the minimalistic "accurate but cold" approach
isn't best suited for your needs.

## .htaccess vs Apache configuration

If you have access to your Apache configuration and are looking for
the optimization of avoiding .htaccess execution, you can copy
the `ErrorDocument` directives in the following format:

        <Directory /web/docs>
          ErrorDocument 404 /comingsoon/error.php
        </Directory>

## Validation and compatibility

The generated [HTML5](http://validator.w3.org/) and [CSS level 2.1](http://jigsaw.w3.org/css-validator/) both pass their associated W3C markup validation services.

The layout and rendering look fine in Firefox 5 and Internet Explorer 9.  The vertical lines are off by a pixel or two in Chrome 13.

## Contributing

The ComingSoon source code is [hosted on GitHub](https://github.com/fluxsauce/ComingSoon).

Please use the [issue tracker](https://github.com/fluxsauce/ComingSoon/issues) if you find any bugs or wish to contribute.

### MIT license

Copyright (c) 2011 Jon Peck (FluxSauce.com)

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
"Software"), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, 
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.