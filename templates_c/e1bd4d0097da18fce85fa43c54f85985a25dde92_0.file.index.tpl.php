<?php
/* Smarty version 3.1.30, created on 2017-11-18 08:02:05
  from "D:\1061014_php\UniServerZ\www\reporter\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0fe8fdb53271_61498841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1bd4d0097da18fce85fa43c54f85985a25dde92' => 
    array (
      0 => 'D:\\1061014_php\\UniServerZ\\www\\reporter\\templates\\index.tpl',
      1 => 1510992087,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:op_".((string)$_smarty_tpl->tpl_vars[\'op\']->value).".tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a0fe8fdb53271_61498841 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="zh-Hant-TW">

<head>
    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>

<body>

    <?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- 自動載入 $op 對應的樣板檔 -->
    <?php $_smarty_tpl->_subTemplateRender("file:op_".((string)$_smarty_tpl->tpl_vars['op']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>

</html><?php }
}
