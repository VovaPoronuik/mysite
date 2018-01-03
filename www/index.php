<?php

include_once '../config/config.php'; //мінімалізація налаштувань
include_once '../library/mainFunction.php';// Основіні функції


// Оприділяєм з яким контролером будемо працювати
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';
  

// оприділяємо з яким акшином(функцією будемо працювати)
$actionName = isset($_GET['action']) ? ($_GET['action']) : 'index';


loadPage($smarty,$controllerName,$actionName);








?>