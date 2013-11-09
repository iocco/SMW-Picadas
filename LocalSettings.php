<?php
# This file was automatically generated by the MediaWiki 1.19.8
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# http://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename      = "Picadas V";
$wgMetaNamespace = "Picadas_V";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs please see:
## http://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath       = "/mediawiki";
$wgScriptExtension  = ".php";

## The protocol and server name to use in fully-qualified URLs
$wgServer           = "http://localhost";

## The relative URL path to the skins directory
$wgStylePath        = "$wgScriptPath/skins";

## The relative URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo             = "../images/logo.png";

## UPO means: this is also a user preference option

$wgEnableEmail      = true;
$wgEnableUserEmail  = true; # UPO

$wgEmergencyContact = "apache@localhost";
$wgPasswordSender   = "apache@localhost";

$wgEnotifUserTalk      = false; # UPO
$wgEnotifWatchlist     = false; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype           = "mysql";
$wgDBserver         = "localhost";
$wgDBname           = "picadas";
$wgDBuser           = "tareauser";
$wgDBpassword       = "tareapass";

# MySQL specific settings
$wgDBprefix         = "_wiki";

# MySQL table options to use during installation or update
$wgDBTableOptions   = "ENGINE=InnoDB, DEFAULT CHARSET=utf8";

# Experimental charset support for MySQL 5.0.
$wgDBmysql5 = false;

## Shared memory settings
$wgMainCacheType    = CACHE_NONE;
$wgMemCachedServers = array();

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads  = true;
#$wgUseImageMagick = true;
#$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from http://commons.wikimedia.org
$wgUseInstantCommons  = false;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "en_US.utf8";

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
#$wgHashedUploadDirectory = false;

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
#$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of the list in ./languages/Names.php
$wgLanguageCode = "es";

$wgSecretKey = "f6746018fe283f5d0e9a16ba16d76d62eb1034410cad7e94b4104ec667ee47a5";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "18cb8d793dc379d0";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'standard', 'nostalgia', 'cologneblue', 'monobook', 'vector':
$wgDefaultSkin = "vector";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl  = "";
$wgRightsText = "";
$wgRightsIcon = "";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "";

# Query string length limit for ResourceLoader. You should only set this if
# your web server has a query string length limit (then set it to that limit),
# or if you have suhosin.get.max_value_length set in php.ini (then set it to
# that value)
$wgResourceLoaderMaxQueryLength = -1;

# The following permissions were set based on your choice in the installer
$wgGroupPermissions['*']['edit'] = false;

# Enabled Extensions. Most extensions are enabled by including the base extension file here
# but check specific extension documentation for more details
# The following extensions were automatically enabled:
require_once( "$IP/extensions/SemanticMediaWiki/SemanticMediaWiki.php" );
require_once( "$IP/extensions/Validator/Validator.php" );


# End of automatically generated settings.
# Add more configuration options below.
enableSemantics('localhost');
include_once("$IP/extensions/SemanticForms/SemanticForms.php");
require_once( "$IP/extensions/Maps/Maps.php" );
require_once( "$IP/extensions/SemanticMaps/SemanticMaps.php" );
require_once ("$IP/extensions/SemanticRating/SemanticRating.php");
require_once( $IP.'/extensions/W4GRatingBar/w4g_rb.php');
$wgW4GRB_Path='/extensions/W4GRatingBar';
$wgW4GRB_Settings['ajax-fresh-data']=true;
$wgW4GRB_Settings['allow-unoptimized-queries']=true;
$wgW4GRB_Settings['auto-include']=false;
$wgW4GRB_Settings['fix-spaces']=true;
$wgW4GRB_Settings['max-bars-per-page']=1;
$wgW4GRB_Settings['max-items-per-list']=200;
$wgW4GRB_Settings['default-items-per-list']=30;
$wgW4GRB_Settings['max-lists-per-page']=5;
$wgW4GRB_Settings['show-voter-names']=false;
$wgGroupPermissions['*']['w4g_rb-canvote'] = true;
$wgGroupPermissions['user']['w4g_rb-canvote'] = true;
$wgGroupPermissions['autoconfirmed']['w4g_rb-canvote'] = true;
$wgGroupPermissions['bot']['w4g_rb-canvote'] = false;
$wgGroupPermissions['sysop']['w4g_rb-canvote'] = true;
$wgGroupPermissions['bureaucrat']['w4g_rb-canvote'] = true;