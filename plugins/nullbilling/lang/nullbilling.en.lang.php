<?php
/**
 * nullbilling plugin
 *
 * @package nullbilling
 * @version 1.0.0
 * @author Yusupov
 * @copyright Copyright (c) CMSWorks Team 2013
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');


$L['nullbilling_title'] = (isset($L['nullbilling_title'])) ? $L['nullbilling_title'] : 'Test payment system';

$L['nullbilling_error_paid'] = (isset($L['nullbilling_error_paid'])) ? $L['nullbilling_error_paid'] : 'Payment was successful. In the near future the service will be activated!';
$L['nullbilling_error_done'] = (isset($L['nullbilling_error_done'])) ? $L['nullbilling_error_done'] : 'Payment was successful.';
$L['nullbilling_error_incorrect'] = (isset($L['nullbilling_error_incorrect'])) ? $L['nullbilling_error_incorrect'] : 'The signature is incorrect!';
$L['nullbilling_error_otkaz'] = (isset($L['nullbilling_error_otkaz'])) ? $L['nullbilling_error_otkaz'] : 'Failure to pay.';
$L['nullbilling_error_title'] = (isset($L['nullbilling_error_title'])) ? $L['nullbilling_error_title'] : 'Result of the operation of payment';
$L['nullbilling_error_fail'] = (isset($L['nullbilling_error_fail'])) ? $L['nullbilling_error_fail'] : 'Payment is not made! Please try again. If the problem persists, contact your site administrator';

?>