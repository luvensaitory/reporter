<?php
/* Smarty version 3.1.30, created on 2017-11-18 01:42:21
  from "D:\1061014_php\UniServerZ\www\reporter\templates\op_article_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0f8ffd8ba633_08184240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cff549304d4f4ab951dc0ad832013ed584c4aab' => 
    array (
      0 => 'D:\\1061014_php\\UniServerZ\\www\\reporter\\templates\\op_article_form.tpl',
      1 => 1510969194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0f8ffd8ba633_08184240 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="ckeditor/ckeditor.js"><?php echo '</script'; ?>
>

<form action="admin.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title" class="col-form-label sr-only">文章標題</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="請輸入文章標題">
    </div>
    <div class="form-group">
        <label for="content" class="col-form-label sr-only">文章內容</label>
        <textarea name="content" id="content" rows="20" class="form-control" placeholder="請輸入文章內容"></textarea>
    </div>
    
    <div class="form-group">
        <label for="title" class="col-form-label sr-only">封面圖</label>
        <input type="file" class="form-control" name="pic" id="pic" placeholder="請上傳一張封面圖">
    </div>

    <div class="text-center">
        <input type="hidden" name="op" value="insert">
        <input type="hidden" name="username" value="<?php echo $_SESSION['username'];?>
">
        <button type="submit" class="btn btn-primary">儲存</button>
    </div>
</form>
<?php echo '<script'; ?>
>
    CKEDITOR.replace('content');
<?php echo '</script'; ?>
><?php }
}
