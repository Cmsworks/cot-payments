<?php

/**
 * Installation handler
 *
 * @package wmbilling
 * @version 1.0
 * @author Yusupov, esclkm
 * @copyright Copyright (c) CMSWorks Team
 * @license BSD License
 */
defined('COT_CODE') or die('Wrong URL');

require_once cot_incfile('payments', 'module');

if (!$db->fieldExists($db_payments, "pay_wmrnd"))
{
	$db->query("ALTER TABLE `$db_payments` ADD COLUMN `pay_wmrnd` varchar(255) NOT NULL");
}
?>