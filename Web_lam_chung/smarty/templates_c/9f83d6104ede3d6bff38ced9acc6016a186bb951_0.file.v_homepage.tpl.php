<?php
/* Smarty version 3.1.30, created on 2018-04-21 09:45:08
  from "D:\wamp64\www\Web_lam_chung\view\homepage\v_homepage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adb08247fcd14_33271381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f83d6104ede3d6bff38ced9acc6016a186bb951' => 
    array (
      0 => 'D:\\wamp64\\www\\Web_lam_chung\\view\\homepage\\v_homepage.tpl',
      1 => 1524303697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:v_banner_bottom.tpl' => 1,
    'file:v_top-brands.tpl' => 1,
    'file:v_vegetables.tpl' => 1,
  ),
),false)) {
function content_5adb08247fcd14_33271381 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:v_banner_bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:v_top-brands.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:v_vegetables.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
