<?php
/* Smarty version 3.1.33, created on 2019-10-10 21:55:12
  from 'H:\xampp\htdocs\SimpleAjax\Smarty\Templates\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9f8ca05905e2_05386445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80ec4dcc1a8dd32632d7c3b3a0c840022ab60c8c' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SimpleAjax\\Smarty\\Templates\\form.tpl',
      1 => 1570735412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9f8ca05905e2_05386445 (Smarty_Internal_Template $_smarty_tpl) {
?><form id = "form" action = "init.php" onsubmit = "go('proccess.php','form'); return false;">
  <input type = "text" name = "name" placeholder = "Imię">
  <input type = "text" name = "surname" placeholder = "Nazwisko">
  <input type = "submit" value = "Wyślij">
</form>
<?php }
}
