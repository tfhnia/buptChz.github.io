<?php
    require_once('config.php');
    // 连接数据库
    $con = mysql_connect(HOST, USERNAME, PASSWORD);
    // 选择数据库
    mysql_select_db('mybjut_test');
    // 选择字符集

    mysql_query("set names 'utf8' ");
    mysql_query("set character_set_client=utf8");
    mysql_query("set character_set_results=utf8");
?>