<?php
/*
 *Контролер головних сторінок
 */
function indexAction($smarty){
    $smarty->assign('pageTitle','Головна сторінка сайта');
    
    loadTamplate($smarty,'header');
    loadTamplate($smarty,'index');
    loadTamplate($smarty,'footer');
} 

?>