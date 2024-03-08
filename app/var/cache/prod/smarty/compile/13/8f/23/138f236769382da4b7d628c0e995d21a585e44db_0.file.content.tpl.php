<?php
/* Smarty version 4.3.4, created on 2024-03-06 10:22:10
  from '/app/admin843bh7jbzf0fkgb5qui/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65e835c27b7017_00037303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '138f236769382da4b7d628c0e995d21a585e44db' => 
    array (
      0 => '/app/admin843bh7jbzf0fkgb5qui/themes/new-theme/template/content.tpl',
      1 => 1707478622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e835c27b7017_00037303 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
