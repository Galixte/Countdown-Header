<?php
/**
*
* @version $Id: info_acp_countdownheader.php 98 2017-05-02 20:01:13Z Scanialady $
* @package phpBB Extension - Countdown Header (deutsch)
* @copyright (c) 2016 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ‚ ‘ ’ « » „ “ ” …
//

$lang = array_merge($lang, array(
	'ACP_COUNTDOWNHEADER'			=> 'Countdown Header',
	'ACP_COUNTDOWNHEADER_CONFIG'	=> 'Konfiguration',
	//Log
	'LOG_COUNTDOWNHEADER_SAVED'		=> '<strong>Countdown Header Einstellungen gespeichert</strong>',
));
