<?php
/* Smarty version 3.1.33, created on 2019-10-10 20:51:34
  from 'H:\xampp\htdocs\SimpleAjax\Smarty\Templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9f7db6ec2801_55929048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92c457e78c76d5559bddebdc48ea28e387a4f976' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SimpleAjax\\Smarty\\Templates\\index.tpl',
      1 => 1570733494,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9f7db6ec2801_55929048 (Smarty_Internal_Template $_smarty_tpl) {
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

  </head>

  <body>

    <div id = "form_div"></div>
    <div id = "result_div"></div>
    <div id = "errors_div"></div>

  </body>
</html>
<?php }
}
