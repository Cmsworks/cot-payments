<?php
/**
 * wmbilling plugin
 *
 * @package wmbilling
 * @version 1.0
 * @author Yusupov, esclkm
 * @copyright Copyright (c) CMSWorks Team 2013
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Plugin Config
 */
$L['cfg_webmoney_wmr'] = (isset($L['cfg_webmoney_wmr'])) ? $L['cfg_webmoney_wmr'] : array('Webmoney WMR-кошелек');
$L['cfg_webmoney_wmid'] = (isset($L['cfg_webmoney_wmid'])) ? $L['cfg_webmoney_wmid'] : array('Webmoney WMID');
$L['cfg_webmoney_skey'] = (isset($L['cfg_webmoney_skey'])) ? $L['cfg_webmoney_skey'] : array('Webmoney Sekret key');
$L['cfg_webmoney_mode'] = (isset($L['cfg_webmoney_mode'])) ? $L['cfg_webmoney_mode'] : array('Test mode');
$L['cfg_webmoney_hashmethod'] = (isset($L['cfg_webmoney_hashmethod'])) ? $L['cfg_webmoney_hashmethod'] : array('Hash method');

$L['wmbilling_title'] = (isset($L['wmbilling_title'])) ? $L['wmbilling_title'] : 'Webmoney';

$L['wmbilling_formtext'] = (isset($L['wmbilling_formtext'])) ? $L['wmbilling_formtext'] : 'Now you will be redirected to the payment system Webmoney for payment. If not, click the "Go to payment".';
$L['wmbilling_formbuy'] = (isset($L['wmbilling_formbuy'])) ? $L['wmbilling_formbuy'] : 'Go to payment';
$L['wmbilling_error_paid'] = (isset($L['wmbilling_error_paid'])) ? $L['wmbilling_error_paid'] : 'Payment was successful. In the near future the service will be activated!';
$L['wmbilling_error_done'] = (isset($L['wmbilling_error_done'])) ? $L['wmbilling_error_done'] : 'Payment was successful.';
$L['wmbilling_error_incorrect'] = (isset($L['wmbilling_error_incorrect'])) ? $L['wmbilling_error_incorrect'] : 'The signature is incorrect!';
$L['wmbilling_error_otkaz'] = (isset($L['wmbilling_error_otkaz'])) ? $L['wmbilling_error_otkaz'] : 'Failure to pay.';
$L['wmbilling_error_title'] = (isset($L['wmbilling_error_title'])) ? $L['wmbilling_error_title'] : 'Result of the operation of payment';
$L['wmbilling_error_fail'] = (isset($L['wmbilling_error_fail'])) ? $L['wmbilling_error_fail'] : 'Payment is not made! Please try again. If the problem persists, contact your site administrator';


?>