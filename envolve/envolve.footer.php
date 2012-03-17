<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=footer.tags
Tags=footer.tpl:{FOOTER_ENVOLVE}
[END_COT_EXT]
==================== */

/**
 * Generates random quotes from slots
 *
 * @package envolve
 * @version 1.0
 * @author Trustmaster
 * @copyright Copyright (c) Vladimir Sibirov 2011
 * @license BSD License
 */

defined('COT_CODE') or die('Wrong URL');

require_once $cfg['plugins_dir'] . '/envolve/lib/envolve_api_client.php';

if (!empty($cfg['plugin']['envolve']['key']) && $usr['id'] > 0 && cot_auth('plug', 'envolve', 'W'))
{
	$envolve_avatar = empty($usr['profile']['user_avatar']) ? $cfg['mainurl'] . '/datas/defaultav/blank.png' : $cfg['mainurl'] . '/' . $usr['profile']['user_avatar'];
	$t->assign('FOOTER_ENVOLVE', envapi_get_html_for_reg_user($cfg['plugin']['envolve']['key'], $usr['name'], null, $envolve_avatar, cot_auth('plug', 'envolve', 'A'), ''));
}

?>
