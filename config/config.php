<?php
/*
 * файл насторєк
 */

//константи для звертання до контролеру
define('PathPrefix','../controllers/');
define('PathPostfix','Controller.php');

//>використовуючий шаблом(Smarty)
$template = 'default';

//дорога до файлових шаблонах (*.tpl)
define('TemplatePrefix',"../views/$template/");
define('TemplatePostfix','.tpl');

//дорога до файлових шаблонів в вебпросторі
define('TemplateWebPath',"../templates/$template/");
//<


//>Підключення шаблонизатора Smarty
require('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);  
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/Smarty/configs');

$smarty->assign('templateWebPath',TemplateWebPath);
?>