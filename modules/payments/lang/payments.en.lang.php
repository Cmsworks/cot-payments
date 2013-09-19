<?php
/**
 * Payments module
 *
 * @package payments
 * @version 1.1.2
 * @author Yusupov, esclkm
 * @copyright Copyright (c) CMSWorks Team 2013
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Module Config
 */
$L['cfg_balance_enabled'] = (isset($L['cfg_balance_enabled'])) ? $L['cfg_balance_enabled'] : array('Turn on internal billings');

$L['payments_mybalance'] = (isset($L['payments_mybalance'])) ? $L['payments_mybalance'] : 'My balance';
$L['payments_balance'] = (isset($L['payments_balance'])) ? $L['payments_balance'] : 'Balance';
$L['payments_paytobalance'] = (isset($L['payments_paytobalance'])) ? $L['payments_paytobalance'] : 'To deposit';
$L['payments_history'] = (isset($L['payments_history'])) ? $L['payments_history'] : 'History';
$L['payments_payout'] = (isset($L['payments_payout'])) ? $L['payments_payout'] : 'Payout';

$L['payments_balance_payout_error_summ'] = (isset($L['payments_balance_payout_error_summ'])) ? $L['payments_balance_payout_error_summ'] : 'Amount empty';
$L['payments_balance_payout_list'] = (isset($L['payments_balance_payout_list'])) ? $L['payments_balance_payout_list'] : 'Requests';
$L['payments_balance_payout_title'] = (isset($L['payments_balance_payout_title'])) ? $L['payments_balance_payout_title'] : 'Payout request';
$L['payments_balance_payout_desc'] = (isset($L['payments_balance_payout_desc'])) ? $L['payments_balance_payout_desc'] : 'Payout';
$L['payments_balance_payout_summ'] = (isset($L['payments_balance_payout_summ'])) ? $L['payments_balance_payout_summ'] : 'Amount';
$L['payments_balance_payout_details'] = (isset($L['payments_balance_payout_details'])) ? $L['payments_balance_payout_details'] : 'Details';
$L['payments_balance_payout_error_details'] = (isset($L['payments_balance_payout_error_details'])) ? $L['payments_balance_payout_error_details'] : 'Details is empty';

$L['payments_balance_billing_error_summ'] = (isset($L['payments_balance_billing_error_summ'])) ? $L['payments_balance_billing_error_summ'] : 'Amount empty';
$L['payments_balance_billing_desc'] = (isset($L['payments_balance_billing_desc'])) ? $L['payments_balance_billing_desc'] : 'Account funding';
$L['payments_balance_billing_summ'] = (isset($L['payments_balance_billing_summ'])) ? $L['payments_balance_billing_summ'] : 'Enter the amount';

$L['payments_transfer'] = (isset($L['payments_transfer'])) ? $L['payments_transfer'] : 'Transfer for user';
$L['payments_balance_transfer_desc'] = (isset($L['payments_balance_transfer_desc'])) ? $L['payments_balance_transfer_desc'] : "Transfer from %1\$s to %2\$s (%3\$s)";
$L['payments_balance_transfer_comment'] = (isset($L['payments_balance_transfer_comment'])) ? $L['payments_balance_transfer_comment'] : "Comment";
$L['payments_balance_transfer_summ'] = (isset($L['payments_balance_transfer_summ'])) ? $L['payments_balance_transfer_summ'] : "Amount";
$L['payments_balance_transfer_username'] = (isset($L['payments_balance_transfer_username'])) ? $L['payments_balance_transfer_username'] : "User login";
$L['payments_balance_transfer_error_username'] = (isset($L['payments_balance_transfer_error_username'])) ? $L['payments_balance_transfer_error_username'] : "User not found";
$L['payments_balance_transfer_error_summ'] = (isset($L['payments_balance_transfer_error_summ'])) ? $L['payments_balance_transfer_error_summ'] : 'Amount empty';
$L['payments_balance_transfer_error_comment'] = (isset($L['payments_balance_transfer_error_comment'])) ? $L['payments_balance_transfer_error_comment'] : 'Comment is empty';

$L['payments_billing_title'] = (isset($L['payments_billing_title'])) ? $L['payments_billing_title'] : 'Billings';
$L['payments_emptybillings'] = (isset($L['payments_emptybillings'])) ? $L['payments_emptybillings'] : 'At the moment, payment methods available. Please try to pay later.';

$L['payments_allusers'] = (isset($L['payments_allusers'])) ? $L['payments_allusers'] : 'All users';
$L['payments_siteinvoices'] = (isset($L['payments_siteinvoices'])) ? $L['payments_siteinvoices'] : 'Site invoices';
$L['payments_debet'] = (isset($L['payments_debet'])) ? $L['payments_debet'] : 'Debet';
$L['payments_credit'] = (isset($L['payments_credit'])) ? $L['payments_credit'] : 'Credit';
$L['payments_allpayments'] = (isset($L['payments_allpayments'])) ? $L['payments_allpayments'] : 'Summ all payments';
$L['payments_area'] = (isset($L['payments_area'])) ? $L['payments_area'] : 'Type';
$L['payments_code'] = (isset($L['payments_code'])) ? $L['payments_code'] : 'Code';
$L['payments_desc'] = (isset($L['payments_desc'])) ? $L['payments_desc'] : 'Desc';
$L['payments_summ'] = (isset($L['payments_summ'])) ? $L['payments_summ'] : 'Summ';

?>