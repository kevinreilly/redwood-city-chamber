<?php
# Database Configuration
define( 'DB_NAME', 'wp_rwcc' );
define( 'DB_USER', 'rwcc' );
define( 'DB_PASSWORD', 'MvVbT7prqFcxyKwz' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY', ':iZX#UJ8W`$t`|te-Xf_|4aV|6T7tTZm~#tV3sv3#u:a=N0kYAyz+!~qFk8^16l-');
define('SECURE_AUTH_KEY', 'ZO|sJ`k#k7Qub)g1mZ$!`_AewRW|u=^p}9+Y)g_dkF^d2SZN<a2B%[2|w@c-S7g<');
define('LOGGED_IN_KEY', 'yY<6!-lA~>H+hi; W`3]d|uR6P&)w8oQ/6SpoN*=3w*~84v8YaMYa;+A#_ZUZ>zo');
define('NONCE_KEY', 'y9d{!;*?@9G{U^zZX:9In}HY+yJvH4I(,YwA+|?<R|-C57QsPv-la2P/{uS^O-~)');
define('AUTH_SALT',        'lbrU=;~R8<`[uj^;g]<3Z-AN,xw2|AW3.[!,n`H-phlGyg4Ml@x>W:p:Ro/h~8c<');
define('SECURE_AUTH_SALT', 'XY^jO.w~-W>}.cpkCM-JTY)wycaE|raSY~OqkV$=Z|~xQ.B{j(YO|Vyc1&;~ewr)');
define('LOGGED_IN_SALT',   'cx]_Q/[-z;L!G:z5L dD*izD#.-7^*yw-fK^9or/9vs}fl67<uVLP}L_.dOuq^vm');
define('NONCE_SALT',       '<CS+bYF7^Q>/+m+AQ!7)=s@eg-C@kodT10uLIppkMn0J|CD23>NCN.]nO-?h|Ydb');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'PWP_NAME', 'rwcc' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', 'ffb281abd594594ac6af683cc7f7728273cf97c1' );

define( 'WPE_FOOTER_HTML', "" );

define( 'WPE_CLUSTER_ID', '41163' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'rwcc.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-41163', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );

define( 'WP_AUTO_UPDATE_CORE', false );

$wpe_special_ips=array ( 0 => '45.79.136.153', );

$wpe_netdna_domains_secure=array ( );

define( 'WPE_CACHE_TYPE', 'generational' );

define( 'WPE_LBMASTER_IP', '45.79.136.153' );

define( 'WPE_SFTP_PORT', 2222 );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
