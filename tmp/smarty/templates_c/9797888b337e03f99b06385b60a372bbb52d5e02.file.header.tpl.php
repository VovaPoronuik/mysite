<?php /* Smarty version Smarty-3.1.6, created on 2018-01-03 15:17:09
         compiled from "../views/default\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:258085a4cc1ff66bae1-78740320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9797888b337e03f99b06385b60a372bbb52d5e02' => 
    array (
      0 => '../views/default\\header.tpl',
      1 => 1514981827,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '258085a4cc1ff66bae1-78740320',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a4cc1ff6a955',
  'variables' => 
  array (
    'pageTitle' => 0,
    'templateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4cc1ff6a955')) {function content_5a4cc1ff6a955($_smarty_tpl) {?><html>
    <head>
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/css/main.css"/>
    </head>
    <body>
        <div id="header">
            <h1>Інтернет магазин</h1> 
        </div>
        
   <?php echo $_smarty_tpl->getSubTemplate ('leftbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <div id="centerColumn">
            
            centerColumn
            

<?php }} ?>