<?php
/* Smarty version 3.1.33, created on 2019-10-10 23:27:47
  from 'H:\xampp\htdocs\SimpleAjax\Smarty\Templates\Core\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9fa253cc7115_25585908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f855e233be8221aeb354e417dcad934fc662e11b' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SimpleAjax\\Smarty\\Templates\\Core\\index.tpl',
      1 => 1570742866,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9fa253cc7115_25585908 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

  <head>
    <title>Simple Ajax</title>

    <?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src = "js/ajax-engine.js"><?php echo '</script'; ?>
>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <meta charset="utf-8">

  </head>

  <body>

    <div id = "form_div"></div>
    <div id = "result_div"></div>
    <div id = "infos_div"></div>

  </body>
</html>
<?php }
}
