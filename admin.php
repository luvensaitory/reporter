<?php
require "loginheader.php";
require_once 'header.php';
$page_title = '管理頁面';

$op = isset($_REQUEST['op']) ? filter_var($_REQUEST['op']) : '';
$sn = isset($_REQUEST['sn']) ? (int) $_REQUEST['sn'] : 0;

switch ($op) {
    case 'insert':
        $sn = insert_article();
        header("location: index.php?sn={$sn}");
        break;

    case 'delete_article':
        delete_article($sn);
        header("location: index.php");
        exit;

    case 'modify_article':
        show_article($sn);
        break;

    case "article_form":
        break;

    case 'update':
        update_article($sn);
        break;

    default:
        break;
}

require_once 'footer.php';

/*************函數區**************/

//儲存文章
function insert_article()
{
    global $db;
    $title    = $db->real_escape_string($_POST['title']);
    $content  = $db->real_escape_string($_POST['content']);
    $username = $db->real_escape_string($_POST['username']);
    $sql      = "INSERT INTO `article` (`title`, `content`, `username`,`create_time`, `update_time`) VALUES ('{$title}', '{$content}','{$username}', NOW(), NOW())";
    $db->query($sql) or die($db->error);
    $sn = $db->insert_id;

    if (isset($_FILES)) {
        require_once 'class.upload.php';
        $foo = new Upload($_FILES['pic']);
        if ($foo->uploaded) {
            // save uploaded image with a new name
            $foo->file_new_name_body = 'cover_' . $sn;
            $foo->image_resize       = true;
            $foo->image_convert      = png;
            $foo->image_x            = 1200;
            $foo->image_ratio_y      = true;
            $foo->Process('uploads/');
            if ($foo->processed) {
                $foo->file_new_name_body = 'thumb_' . $sn;
                $foo->image_resize       = true;
                $foo->image_convert      = png;
                $foo->image_x            = 400;
                $foo->image_ratio_y      = true;
                $foo->Process('uploads/');
            }
        }
        // $ext = pathinfo($_FILES['pic']['name'], PATHINFO_EXTENSION);
        // if (!is_dir('uploads')) {
        //     mkdir('uploads');
        // }
        // move_uploaded_file($_FILES['pic']['tmp_name'], "uploads/{$sn}.{$ext}");
    }

    return $sn;
}

function delete_article($sn)
{
    global $db;

    $sql = "DELETE FROM `article` WHERE sn='{$sn}'";
    $db->query($sql) or die($db->error);

}

//更新文章
function update_article($sn)
{
    global $db;
    $title    = $db->real_escape_string($_POST['title']);
    $content  = $db->real_escape_string($_POST['content']);
    $username = $db->real_escape_string($_POST['username']);
    $sql      = "UPDATE `article` SET `title`='{$title}', `content`='{$content}', `username`='{$username}', `update_time`=NOW() WHERE `sn`='{$sn}'";
    $db->query($sql) or die($db->error);

    if (isset($_FILES)) {
        require_once 'class.upload.php';
        $foo = new Upload($_FILES['pic']);
        if ($foo->uploaded) {
            // save uploaded image with a new name
            $foo->file_new_name_body = 'cover_' . $sn;
            $foo->image_resize       = true;
            $foo->image_convert      = png;
            $foo->image_x            = 1200;
            $foo->image_ratio_y      = true;
            $foo->Process('uploads/');
            if ($foo->processed) {
                $foo->file_new_name_body = 'thumb_' . $sn;
                $foo->image_resize       = true;
                $foo->image_convert      = png;
                $foo->image_x            = 400;
                $foo->image_ratio_y      = true;
                $foo->Process('uploads/');
            }
        }
    }

    return $sn;
}