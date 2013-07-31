<?php

/**
 * Payments module
 *
 * @package payments
 * @version 1.1.2
 * @author Yusupov, esclkm
 * @copyright Copyright (c) CMSWorks Team
 * @license BSD
 */
defined('COT_CODE') or die('Wrong URL.');

list($usr['auth_read'], $usr['auth_write'], $usr['isadmin']) = cot_auth('payments', 'any', 'RWA');
cot_block($usr['auth_write']);

$n = cot_import('n', 'G', 'ALP');
$pid = cot_import('pid', 'G', 'INT');
$rsumm = cot_import('rsumm', 'G', 'INT');

if (empty($n))
{
	$n = 'history';
}

$t = new XTemplate(cot_tplfile('payments.balance', 'module'));

$t->assign(array(
	'BALANCE_SUMM' => cot_payments_getuserbalance($usr['id']),
	'BALANCE_BILLING_URL' => cot_url('payments', 'm=balance&n=billing'),
	'BALANCE_HISTORY_URL' => cot_url('payments', 'm=balance&n=history'),
));

if ($n == 'billing')
{

	$pid = cot_import('pid', 'G', 'INT');

	if ($a == 'buy')
	{

		$summ = cot_import('summ', 'P', 'NUM');
		cot_check(empty($summ), 'payments_balance_billing_error_summ');

		if (!cot_error_found())
		{
			$options['desc'] = $L['payments_balance_billing_desc'];
			$options['code'] = $pid;

			cot_payments_create_order('balance', $summ, $options);
		}
	}

	cot_display_messages($t);

	$t->assign(array(
		'BALANCE_FORM_ACTION_URL' => cot_url('payments', 'm=balance&n=billing&a=buy&pid=' . $pid),
		'BALANCE_FORM_SUMM' => (!empty($rsumm)) ? $rsumm : $summ,
	));
	$t->parse('MAIN.BILLINGFORM');
}

if ($n == 'history')
{
	$pays = $db->query("SELECT * FROM $db_payments 
		WHERE pay_userid=" . $usr['id'] . " AND pay_status='done' AND pay_summ>0
		ORDER BY pay_pdate DESC")->fetchAll();
	foreach ($pays as $pay)
	{
		$t->assign(cot_generate_paytags($pay, 'HIST_ROW_'));
		$t->parse('MAIN.HISTORY.HIST_ROW');
	}
	$t->parse('MAIN.HISTORY');
}

$t->parse('MAIN');
$module_body = $t->text('MAIN');
?>