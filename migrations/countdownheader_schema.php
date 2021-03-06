<?php
/**
*
* @package phpBB Extension - Countdown Header
* @copyright (c) 2016 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\countdownheader\migrations;

class countdownheader_schema extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			// Add configs
			array('config.add', array('countdownheader_enable', '')),
			array('config.add', array('countdownheader_date', '')),
			array('config.add', array('countdownheader_text_big', '')),
			array('config.add', array('countdownheader_text_small', '')),
			array('config.add', array('countdownheader_url', '')),
			array('config.add', array('countdownheader_version', '1.0.0')),
			array('config.add', array('countdownheader_testmode', '')),
		);
	}
}
