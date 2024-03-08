<?php
/* Smarty version 4.3.4, created on 2024-03-06 10:21:11
  from '/app/admin843bh7jbzf0fkgb5qui/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65e83587eba269_28732712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fab60d26d088a6828b92250fcc65091b6b75068' => 
    array (
      0 => '/app/admin843bh7jbzf0fkgb5qui/themes/default/template/content.tpl',
      1 => 1707478622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e83587eba269_28732712 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
