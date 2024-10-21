<?php 
    function dd($data){
        print('<pre>');
        print_r($data);
        print('</pre>');
    }

    // $_GET form 傳過來的資料
    $data = $_GET;

    // $data = [
    //     's1' => 'amy',
    //     's2' => 'amy',
    //     's3' => 'amy'
    // ];
    dd($data);