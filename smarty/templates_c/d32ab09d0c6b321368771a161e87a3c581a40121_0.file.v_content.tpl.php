<?php
/* Smarty version 3.1.30, created on 2018-04-21 08:33:48
  from "D:\wamp64\www\Web_lam_chung\view\homepage\v_content.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adaf76c16a275_12204533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd32ab09d0c6b321368771a161e87a3c581a40121' => 
    array (
      0 => 'D:\\wamp64\\www\\Web_lam_chung\\view\\homepage\\v_content.tpl',
      1 => 1524299521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/homepage/v_banner_top.tpl' => 1,
    'file:view/homepage/v_banner_bottom.tpl' => 1,
    'file:view/homepage/v_top-brands.tpl' => 1,
    'file:view/homepage/v_vegetables.tpl' => 1,
  ),
),false)) {
function content_5adaf76c16a275_12204533 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/homepage/v_banner_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:view/homepage/v_banner_bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:view/homepage/v_top-brands.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:view/homepage/v_vegetables.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
