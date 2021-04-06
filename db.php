<?php
    //连接到数据库
    $dsn = 'mysql:dbname=php10-7;host=127.0.0.1';
    $pdo = new PDO($dsn, 'root', '');

    //定义写入数据的函数
    function write($pdo, $sql){

        //将sql送入prepare方法
        $sth = $pdo->prepare($sql);

        //执行sql
        return $sth -> execute();     
          
    }

    //定义读取数据的函数
    function read($pdo, $sql){

        $sth = $pdo->prepare($sql);
        $sth -> execute();

        $rows = $sth -> fetchAll();
        return $rows;
        
    }
?>