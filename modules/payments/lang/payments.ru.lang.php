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
$L['cfg_balance_enabled'] = (isset($L['cfg_balance_enabled'])) ? $L['cfg_balance_enabled'] : array('Включить внутренние счета');


$L['payments_mybalance'] = (isset($L['payments_mybalance'])) ? $L['payments_mybalance'] : 'Мой счет';
$L['payments_balance'] = (isset($L['payments_balance'])) ? $L['payments_balance'] : 'На счету';
$L['payments_paytobalance'] = (isset($L['payments_paytobalance'])) ? $L['payments_paytobalance'] : 'Пополнить счет';
$L['payments_history'] = (isset($L['payments_history'])) ? $L['payments_history'] : 'История операций';
$L['payments_payout'] = (isset($L['payments_payout'])) ? $L['payments_payout'] : 'Вывод со счета';
$L['payments_balance_payout_error_summ'] = (isset($L['payments_balance_payout_error_summ'])) ? $L['payments_balance_payout_error_summ'] : 'Не указана сумма';
$L['payments_balance_payout_list'] = (isset($L['payments_balance_payout_list'])) ? $L['payments_balance_payout_list'] : 'Заявки на вывод средств со счета';
$L['payments_balance_payout_title'] = (isset($L['payments_balance_payout_title'])) ? $L['payments_balance_payout_title'] : 'Заявка на вывод со счета';
$L['payments_balance_payout_desc'] = (isset($L['payments_balance_payout_desc'])) ? $L['payments_balance_payout_desc'] : 'Вывод со счета по заявке';
$L['payments_balance_payout_summ'] = (isset($L['payments_balance_payout_summ'])) ? $L['payments_balance_payout_summ'] : 'Укажите сумму';
$L['payments_balance_payout_details'] = (isset($L['payments_balance_payout_details'])) ? $L['payments_balance_payout_details'] : 'Реквизиты счета или кошелька';
$L['payments_balance_billing_error_summ'] = (isset($L['payments_balance_billing_error_summ'])) ? $L['payments_balance_billing_error_summ'] : 'Не указана сумма';
$L['payments_balance_payout_error_details'] = (isset($L['payments_balance_payout_error_details'])) ? $L['payments_balance_payout_error_details'] : 'Не указаны реквизиты';
$L['payments_balance_billing_desc'] = (isset($L['payments_balance_billing_desc'])) ? $L['payments_balance_billing_desc'] : 'Пополнение счета';
$L['payments_balance_billing_summ'] = (isset($L['payments_balance_billing_summ'])) ? $L['payments_balance_billing_summ'] : 'Укажите сумму';

$L['payments_billing_title'] = (isset($L['payments_billing_title'])) ? $L['payments_billing_title'] : 'Способы оплаты';
$L['payments_emptybillings'] = (isset($L['payments_emptybillings'])) ? $L['payments_emptybillings'] : 'На данный момент способы оплаты недоступны. Пожалуйста, попробуйте выполнить оплату позже.';

$L['payments_allusers'] = (isset($L['payments_allusers'])) ? $L['payments_allusers'] : 'Все пользователи';
$L['payments_siteinvoices'] = (isset($L['payments_siteinvoices'])) ? $L['payments_siteinvoices'] : 'Счет на сайте';
$L['payments_debet'] = (isset($L['payments_debet'])) ? $L['payments_debet'] : 'дебет';
$L['payments_credit'] = (isset($L['payments_credit'])) ? $L['payments_credit'] : 'кредит';
$L['payments_allpayments'] = (isset($L['payments_allpayments'])) ? $L['payments_allpayments'] : 'Сумма всех платежей';
$L['payments_area'] = (isset($L['payments_area'])) ? $L['payments_area'] : 'Тип';
$L['payments_code'] = (isset($L['payments_code'])) ? $L['payments_code'] : 'Код';
$L['payments_desc'] = (isset($L['payments_desc'])) ? $L['payments_desc'] : 'Назначение';
$L['payments_summ'] = (isset($L['payments_summ'])) ? $L['payments_summ'] : 'Сумма';

?>