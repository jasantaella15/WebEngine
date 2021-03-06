<?php
/**
 * WebEngine CMS
 * https://webenginecms.org/
 * 
 * @version 1.0.9.9
 * @author Lautaro Angelico <https://lautaroangelico.com/>
 * @copyright (c) 2013-2018 Lautaro Angelico, All Rights Reserved
 * 
 * Licensed under the MIT license
 * https://opensource.org/licenses/MIT
 */

define('access', 'api');

include('../includes/webengine.php');

$cs = cs_CalculateTimeLeft();
$timeLeft = (check_value($cs) ? $cs : 0);

echo json_encode(
	array(
		'TimeLeft' => $timeLeft
	)
);
