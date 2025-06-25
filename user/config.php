<?php
define( 'YOURLS_SITE', getenv('YOURLS_SITE') );
define( 'YOURLS_DB_USER', getenv('YOURLS_DB_USER') );
define( 'YOURLS_DB_PASS', getenv('YOURLS_DB_PASS') );
define( 'YOURLS_DB_NAME', getenv('YOURLS_DB_NAME') );
define( 'YOURLS_DB_HOST', getenv('YOURLS_DB_HOST') );
define( 'YOURLS_DB_PREFIX', 'yourls_' );

define( 'YOURLS_PRIVATE', true );
define( 'YOURLS_UNIQUE_URLS', true );

define( 'YOURLS_USER', [
  'admin' => 'yourpassword' // Replace with env var or strong pass
]);
