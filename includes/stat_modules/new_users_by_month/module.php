<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_ICYPHOENIX'))
{
	die('Hacking attempt');
}

//
// Modules should be considered to already have access to the following variables which
// the parser will give out to it:

// $return_limit - Control Panel defined number of items to display
// $module_info['name'] - The module name specified in the info.txt file
// $module_info['email'] - The author email
// $module_info['author'] - The author name
// $module_info['version'] - The version
// $module_info['url'] - The author url
//
// To make the module more compatible, please do not use any functions here
// and put all your code inline to keep from redeclaring functions on accident.
//

//
// All your code
//
// New users by month
//

$sql = "SELECT YEAR(FROM_UNIXTIME(user_regdate)) as aar, MONTH(FROM_UNIXTIME(user_regdate)) as mnd, COUNT(*) AS ant
FROM " . USERS_TABLE . "
WHERE (user_id <> " . ANONYMOUS . ")
GROUP BY YEAR(FROM_UNIXTIME(user_regdate)), MONTH(FROM_UNIXTIME(user_regdate))
ORDER BY user_regdate";

if (!($result = $db->sql_query($sql)))
{
	message_die(GENERAL_ERROR, 'Couldn\'t retrieve users data', '', __LINE__, __FILE__, $sql);
}

$user_count = $db->sql_numrows($result);
$user_data = $db->sql_fetchrowset($result);

$template->_tpldata['signup.'] = array();
//reset($template->_tpldata['signup.']);

for ($i = 0; $i < $user_count; $i=$i+$k)
{
	$class = (!($i+1 % 2)) ? $theme['td_class2'] : $theme['td_class1'];

	$year = $user_data[$i]['aar'];
	$k = 0;
	for ($j = 0; $j < 12; $j++)
	{
		$m[$j+1] = 0;
	}
	for ($j = 0; $j < 12; $j++)
	{
		if ($year == $user_data[$i+$j]['aar'])
		{
			$month = $user_data[$i+$j]['mnd'];
			$m[$month] = $user_data[$i+$j]['ant'];
			$k = $k + 1;
		}
	}
	$template->assign_block_vars('signup', array(
		'CLASS' => $class,
		'YEAR' => $year,
		'M01' => $m[1],
		'M02' => $m[2],
		'M03' => $m[3],
		'M04' => $m[4],
		'M05' => $m[5],
		'M06' => $m[6],
		'M07' => $m[7],
		'M08' => $m[8],
		'M09' => $m[9],
		'M10' => $m[10],
		'M11' => $m[11],
		'M12' => $m[12])
	);
}

$template->assign_vars(array(
	'L_SIGNUPBYMONTH' => $lang['module_name_new_users_by_month'],
	'L_YEAR' => $lang['Year'],
	'L_MONTH' => $lang['Month'],
	'L_NUMBER' => $lang['Number'],
	'L_JAN' => $lang['Month_jan'],
	'L_FEB' => $lang['Month_feb'],
	'L_MAR' => $lang['Month_mar'],
	'L_APR' => $lang['Month_apr'],
	'L_MAY' => $lang['Month_may'],
	'L_JUN' => $lang['Month_jun'],
	'L_JUL' => $lang['Month_jul'],
	'L_AUG' => $lang['Month_aug'],
	'L_SEP' => $lang['Month_sep'],
	'L_OCT' => $lang['Month_oct'],
	'L_NOV' => $lang['Month_nov'],
	'L_DEC' => $lang['Month_dec'])
);

?>