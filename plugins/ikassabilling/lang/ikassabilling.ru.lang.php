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
$L['cfg_shop_id'] = (isset($L['cfg_shop_id'])) ? $L['cfg_shop_id'] : array('Идентификатор магазина (ik_shop_id)', '');
$L['cfg_secret_key'] = (isset($L['cfg_secret_key'])) ? $L['cfg_secret_key'] : array('Секретный ключ (secret_key)', '');

$L['ikassabilling_title'] = (isset($L['ikassabilling_title'])) ? $L['ikassabilling_title'] : 'Интеркасса';

$L['ikassabilling_formtext'] = (isset($L['ikassabilling_formtext'])) ? $L['ikassabilling_formtext'] : 'Сейчас вы будете перенаправлены на сайт платежной системы Interkassa для проведения оплаты. Если этого не произошло, нажмите кнопку "Перейти к оплате".';
$L['ikassabilling_formbuy'] = (isset($L['ikassabilling_formbuy'])) ? $L['ikassabilling_formbuy'] : 'Перейти к оплате';
$L['ikassabilling_error_paid'] = (isset($L['ikassabilling_error_paid'])) ? $L['ikassabilling_error_paid'] : 'Оплата прошла успешно. В ближайшее время услуга будет активирована!';
$L['ikassabilling_error_done'] = (isset($L['ikassabilling_error_done'])) ? $L['ikassabilling_error_done'] : 'Оплата прошла успешно.';
$L['ikassabilling_error_incorrect'] = (isset($L['ikassabilling_error_incorrect'])) ? $L['ikassabilling_error_incorrect'] : 'Некорректная подпись';
$L['ikassabilling_error_otkaz'] = (isset($L['ikassabilling_error_otkaz'])) ? $L['ikassabilling_error_otkaz'] : 'Отказ от оплаты.';
$L['ikassabilling_error_title'] = (isset($L['ikassabilling_error_title'])) ? $L['ikassabilling_error_title'] : 'Результат операции оплаты';
$L['ikassabilling_error_fail'] = (isset($L['ikassabilling_error_fail'])) ? $L['ikassabilling_error_fail'] : 'Оплата не произведена! Пожалуйста, повторите попытку. Если ошибка повторится, обратитесь к администратору сайта';

?>