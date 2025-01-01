<?php
//XSS対応（ echoする場所で使用！）
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

//DB接続関数：db_conn() 
function db_conn()
{
    try {
        $db_name = 'ym-deploy_ph02'; //データベース名
        $db_id   = 'ym-deploy_ph02'; //アカウント名
        $db_pw   = 'ym12345678'; //パスワード：MAMPは'root'
        $db_host = 'mysql3104.db.sakura.ne.jp'; //DBホスト
        $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
        return $pdo;
    } catch (PDOException $e) {
        exit('DB Connection Error:' . $e->getMessage());
    }
}

//※関数を作成し、内容をreturnさせる。
//※ DBname等、今回の授業に合わせる。


//SQLエラー関数：sql_error($stmt)


//リダイレクト関数: redirect($file_name)
