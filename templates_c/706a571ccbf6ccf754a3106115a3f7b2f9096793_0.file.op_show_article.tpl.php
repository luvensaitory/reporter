<?php
/* Smarty version 3.1.30, created on 2017-11-18 08:08:12
  from "D:\1061014_php\UniServerZ\www\reporter\templates\op_show_article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0fea6c44a3c3_87948667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '706a571ccbf6ccf754a3106115a3f7b2f9096793' => 
    array (
      0 => 'D:\\1061014_php\\UniServerZ\\www\\reporter\\templates\\op_show_article.tpl',
      1 => 1510992463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0fea6c44a3c3_87948667 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <h1><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h1>
    <p><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</p>
    <div class="alert alert-info text-center">
        <a href="admin.php?op=delete_article&sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
" class="btn btn-danger">刪除</a>
        <a href="admin.php?op=modify_article&sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
" class="btn btn-warning">編輯</a>
    </div>

</div><?php }
}
