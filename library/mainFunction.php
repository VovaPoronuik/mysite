<?php
 /*
  * Основні функції
  */



/**
* Формування запрошуваної сторінки
*
*@param string $controllerName назва контролера
*@param string $actionName назва функції яка буде вертати сторінку
*
*/

function loadPage($smarty,$controllerName,$actionName = 'index'){
    include_once PathPrefix . $controllerName . PathPostfix;
    
    $function = $actionName . 'Action';
    $function($smarty);

}
/*
**Загрузка шаблона
*/

function loadTamplate($smarty, $templateName){
     $smarty->display($templateName.TemplatePostfix);
}
/*
 * 
 * Функція відлагодження
 * 
 *  */
function d($value = null, $die = 1){
    echo 'Debug: <br /><pre>';
    print_r($value);
    echo '</pre>';
    if($die) die;
}





?>