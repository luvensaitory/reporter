<?php
/* Smarty version 3.1.30, created on 2017-11-18 08:02:05
  from "D:\1061014_php\UniServerZ\www\reporter\templates\op_list_article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0fe8fdd8d805_94833236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f207cac08caeea3cab5fe744a24e8766507bd28' => 
    array (
      0 => 'D:\\1061014_php\\UniServerZ\\www\\reporter\\templates\\op_list_article.tpl',
      1 => 1510992117,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0fe8fdd8d805_94833236 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="img-container">
    <div class="container">

    </div>
</div>
<div class="container">
    <h1 class="my-3 text-center">最新文章</h1>
    <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all']->value, 'article');
$_smarty_tpl->tpl_vars['article']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->index++;
$__foreach_article_0_saved = $_smarty_tpl->tpl_vars['article'];
?>
        <div class="col-sm-4">
            <?php $_smarty_tpl->_assignInScope('cover', "uploads/thumb_".((string)$_smarty_tpl->tpl_vars['article']->value['sn']).".png");
?> <?php if (file_exists($_smarty_tpl->tpl_vars['cover']->value)) {?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['cover']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" class="rounded cover"> <?php } else { ?>
            <img src="https://picsum.photos/400/300?image=<?php echo $_smarty_tpl->tpl_vars['article']->index;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" class="rounded cover">            <?php }?>
            <h3><a href="index.php?sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></h3>
            <p><?php echo $_smarty_tpl->tpl_vars['article']->value['summary'];?>
</p>
        </div>
        <?php
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_0_saved;
}
} else {
?>

        <h1>尚無內容</h1>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
</div><?php }
}
