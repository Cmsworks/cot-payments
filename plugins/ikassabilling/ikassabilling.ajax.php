<?php

/**
 * [BEGIN_COT_EXT]
 * Hooks=ajax
 * [END_COT_EXT]
 */
/**
 * Ikassa billing Plugin
 *
 * @package ikassabilling
 * @version 1.0
 * @author Yusupov, esclkm
 * @copyright (c) CMSWorks Team 2013
 * @license BSD
 */
defined('COT_CODE') or die('Wrong URL');

require_once cot_incfile('payments', 'module');

if($_SERVER['REQUEST_METHOD'] == 'POST' && $cfg['plugin']['ikassabilling']['enablepost'])
{
	$status_data = $_POST;
}	
else
{	
	$status_data = $_GET;
}	

$secret_key = $cfg['plugin']['ikassabilling']['secret_key'];

$sing_hash_str = $status_data['ik_shop_id'] . ':' .
		$status_data['ik_payment_amount'] . ':' .
		$status_data['ik_payment_id'] . ':' .
		$status_data['ik_paysystem_alias'] . ':' .
		$status_data['ik_baggage_fields'] . ':' .
		$status_data['ik_payment_state'] . ':' .
		$status_data['ik_trans_id'] . ':' .
		$status_data['ik_currency_exch'] . ':' .
		$status_data['ik_fees_payer'] . ':' .
		$secret_key;
$sign_hash = strtoupper(md5($sing_hash_str));


if ($status_data['ik_sign_hash'] === $sign_hash && $status_data['ik_payment_state'] == 'success'
		&& $status_data['ik_shop_id'] == $cfg['plugin']['ikassabilling']['shop_id'])
{
	cot_payments_updatestatus($status_data['ik_payment_id'], 'paid');
}
?>