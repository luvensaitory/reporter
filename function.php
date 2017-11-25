<?php
//連線到資料庫
function link_db()
{
    $db = new mysqli('localhost', 'user', '12345', 'reporter');
    if ($db->connect_error) {
        die('無法連上資料庫：' . $db->connect_error);
    }
    $db->set_charset("utf8");
    return $db;
}


//讀出所有文章
function list_article()
{
    global $db, $smarty;

    $sql    = "SELECT * FROM `article` ORDER BY `update_time` DESC";
    $result = $db->query($sql) or die($db->error);
    $all    = [];
    $i      = 0;
    while ($data = $result->fetch_assoc()) {
        $all[$i] = $data;
        $wkstr1  = mb_substr(strip_tags($data['content']), 0, 90);
        if (mb_strlen(strip_tags($data['content'])) > mb_strlen($wkstr1)) {
            $wkstr1 .= "<span style='color:red;font-size:0.6em;font-weight:900;'><<更多.......>></span>";
        }
        $all[$i]['summary'] = $wkstr1;
        $i++;
    }
    // die(var_export($all));
    $smarty->assign('all', $all);
}
