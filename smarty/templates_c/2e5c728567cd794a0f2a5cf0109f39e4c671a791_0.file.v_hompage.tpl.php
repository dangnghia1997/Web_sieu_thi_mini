<?php
/* Smarty version 3.1.30, created on 2018-04-21 09:49:43
  from "D:\wamp64\www\Web_lam_chung\view\homepage\v_hompage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adb0937958343_28706846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e5c728567cd794a0f2a5cf0109f39e4c671a791' => 
    array (
      0 => 'D:\\wamp64\\www\\Web_lam_chung\\view\\homepage\\v_hompage.tpl',
      1 => 1524303996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/homepage/v_banner_bottom.tpl' => 1,
    'file:view/homepage/v_top-brands.tpl' => 1,
    'file:view/homepage/v_vegetables.tpl' => 1,
  ),
),false)) {
function content_5adb0937958343_28706846 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/homepage/v_banner_bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:view/homepage/v_top-brands.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:view/homepage/v_vegetables.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
