<?php
/* Smarty version 4.3.4, created on 2024-03-07 13:29:38
  from 'module:ps_customeraccountlinksps_customeraccountlinks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65e9b332859c10_74156258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinksps_customeraccountlinks.tpl',
      1 => 1697822646,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_65e9b332859c10_74156258 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/app/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/0d/5c/05/0d5c0554a4b6490c02944028546e848cfcdb1583_2.file.helpers.tpl.php',
    'uid' => '0d5c0554a4b6490c02944028546e848cfcdb1583',
    'call_name' => 'smarty_template_function_renderLogo_156309525865e8353d2777a0_05872427',
  ),
));
?>
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="https://localhost/es/mi-cuenta" rel="nofollow">
      Su cuenta
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Su cuenta</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li><a href="https://localhost/es/seguimiento-pedido-invitado" title="Seguimiento del pedido" rel="nofollow">Seguimiento del pedido</a></li>
        <li><a href="https://localhost/es/mi-cuenta" title="Acceda a su cuenta de cliente" rel="nofollow">Iniciar sesión</a></li>
        <li><a href="https://localhost/es/registro" title="Crear una cuenta" rel="nofollow">Crear una cuenta</a></li>
        <li>
  <a href="//localhost/es/module/ps_emailalerts/account" title="Mis alertas">
    Mis alertas
  </a>
</li>

       
	</ul>
</div>
<?php }
}