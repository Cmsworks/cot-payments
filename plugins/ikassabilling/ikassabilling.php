<?php

/**
 * [BEGIN_COT_EXT]
 * Hooks=standalone
 * [END_COT_EXT]
 */
/**
 * Ikassa billing Plugin
 *
 * @package ikassabilling
 * @version 1.0
 * @author Yusupov. esclkm
 * @copyright (c) CMSWorks Team 2013
 * @license BSD
 */
defined('COT_CODE') && defined('COT_PLUG') or die('Wrong URL');

require_once cot_incfile('ikassabilling', 'plug');
require_once cot_incfile('payments', 'module');

$m = cot_import('m', 'G', 'ALP');
$pid = cot_import('pid', 'G', 'INT');

if (empty($m))
{
	// Получаем информацию о заказе
	if (!empty($pid) && $pinfo = cot_payments_payinfo($pid))
	{

		cot_block($pinfo['pay_status'] == 'new' || $pinfo['pay_status'] == 'process');

		$ik_shop_id = $cfg['plugin']['ikassabilling']['shop_id'];
		$ik_payment_amount = $pinfo['pay_summ'];
		$ik_payment_id = $pid;
		$ik_payment_desc = $pinfo['pay_desc'];

		$ikassa_form = '<form id="ikassaform" name="payment" action="https://www.interkassa.com/lib/payment.php" method="post" 
enctype="application/x-www-form-urlencoded" accept-charset="cp1251">
		<input type="hidden" name="ik_shop_id" value="'.$ik_shop_id.'">
		<input type="hidden" name="ik_payment_amount" value="'.$ik_payment_amount.'">
		<input type="hidden" name="ik_payment_id" value="'.$ik_payment_id.'">
		<input type="hidden" name="ik_payment_desc" value="'.$ik_payment_desc.'">
		<input type="submit" name="process" class="btn btn-success btn-large" value="'.$L['ikassabilling_formbuy'].'">
		</form>';

		$t->assign(array(
			'IKASSA_FORM' => $ikassa_form,
		));
		$t->parse("MAIN.IKASSAFORM");
		
		cot_payments_updatestatus($pid, 'process'); // Изменяем статус "в процессе оплаты"
	}
	else
	{
		cot_die();
	}
}
elseif ($m == 'success')
{
	if($_SERVER['REQUEST_METHOD'] == 'POST' && $cfg['plugin']['ikassabilling']['enablepost'])
	{
		$status_data = $_POST;
	}	
	else
	{	
		$status_data = $_GET;
	}
	
	if($status_data['ik_payment_state'] == 'success' && $status_data['ik_shop_id'] == $cfg['plugin']['ikassabilling']['shop_id']) {
		
		// проверка наличия номера платежки и ее статуса
		$pinfo = cot_payments_payinfo($status_data['ik_payment_id']);
		if ($pinfo['pay_status'] == 'done')
		{
			$plugin_body = $L['ikassabilling_error_done'];
		}
		elseif ($pinfo['pay_status'] == 'paid')
		{
			$plugin_body = $L['ikassabilling_error_paid'];
		}
		else
		{
			$plugin_body = $L['roboxbilling_error_otkaz'];
		}
	}
	else{
		$plugin_body = $L['ikassabilling_error_incorrect'];
	}

	$t->assign(array(
		"IKASSA_TITLE" => $L['ikassabilling_error_title'],
		"IKASSA_ERROR" => $plugin_body
	));
	$t->parse("MAIN.ERROR");
}
elseif ($m == 'fail')
{
	$t->assign(array(
		"IKASSA_TITLE" => $L['ikassabilling_error_title'],
		"IKASSA_ERROR" => $L['ikassabilling_error_fail']
	));
	$t->parse("MAIN.ERROR");
}
?>