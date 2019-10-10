<?php
/* Smarty version 3.1.33, created on 2019-10-10 23:33:02
  from 'H:\xampp\htdocs\SimpleAjax\Smarty\Templates\infos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9fa38e233f36_74758001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b01d827eeeb52e8f37c2a4ee168e4258469055ff' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SimpleAjax\\Smarty\\Templates\\infos.tpl',
      1 => 1570743180,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9fa38e233f36_74758001 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['infos']->value) && is_array($_smarty_tpl->tpl_vars['infos']->value)) {?>

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'info');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
?>
    <li style = "color:yellow; background-color:<?php if ($_smarty_tpl->tpl_vars['info']->value->isError()) {?>red<?php } else { ?>green<?php }?>;"><?php echo $_smarty_tpl->tpl_vars['info']->value->getMsg();?>
</li>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php }
}
}
