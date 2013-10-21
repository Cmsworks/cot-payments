<?php
/**
 * ikassabilling plugin
 *
 * @package ikassabilling
 * @version 1.0
 * @author Yusupov, esclkm
 * @copyright Copyright (c) CMSWorks Team 2013
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Module Config
 */
$L['cfg_shop_id'] = array('Shop ID (ik_shop_id)', '');
$L['cfg_secret_key'] = array('Secret key (secret_key)', '');

$L['ikassabilling_title'] = 'Interkassa';

$L['ikassabilling_formtext'] = 'Now you will be redirected to the payment system Interkassa for payment. If not, click the "Go to payment".';
$L['ikassabilling_formbuy'] = 'Go to payment';
$L['ikassabilling_error_paid'] = 'Payment was successful. In the near future the service will be activated!';
$L['ikassabilling_error_done'] = 'Payment was successful.';
$L['ikassabilling_error_incorrect'] = 'The signature is incorrect!';
$L['ikassabilling_error_otkaz'] = 'Failure to pay.';
$L['ikassabilling_error_title'] = 'Result of the operation of payment';
$L['ikassabilling_error_fail'] = 'Payment is not made! Please try again. If the problem persists, contact your site administrator';

?>