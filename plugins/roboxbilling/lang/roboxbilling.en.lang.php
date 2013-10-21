<?php
/**
 * roboxbilling plugin
 *
 * @package roboxbilling
 * @version 1.0
 * @author Yusupov, esclkm
 * @copyright Copyright (c) CMSWorks Team 2013
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Plugin Config
 */
$L['cfg_mrh_login'] = array('Логин в Робокассе');
$L['cfg_mrh_pass1'] = array('Пароль #1 в Робокассе');
$L['cfg_mrh_pass2'] = array('Пароль #2 в Робокассе');
$L['cfg_testmode'] = array('Тестовый режим');
$L['cfg_diablepost'] = array('Disable POST');

$L['roboxbilling_title'] = 'Robokassa';

$L['roboxbilling_error_paid'] = 'Payment was successful. In the near future the service will be activated!';
$L['roboxbilling_error_done'] = 'Payment was successful.';
$L['roboxbilling_error_incorrect'] = 'The signature is incorrect!';
$L['roboxbilling_error_otkaz'] = 'Failure to pay.';
$L['roboxbilling_error_title'] = 'Result of the operation of payment';
$L['roboxbilling_error_fail'] = 'Payment is not made! Please try again. If the problem persists, contact your site administrator';

?>