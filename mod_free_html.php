<?php
/*
*Имя приложения: Free HTML
*Версия:1
*Автор:Boyko Dmitry
*Дата:10.05.2018
*Описание:выводит любой код HTML.
*/
defined('_JEXEC') or die('Restricted access');
$html=$params['HTML'];

// подключаем шаблон
require(JModuleHelper::getLayoutPath('mod_free_html'));




