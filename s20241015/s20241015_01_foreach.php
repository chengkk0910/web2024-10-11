<?php 
    function dd($data){
        print('<pre>');
        print_r($data);
        print('</pre>');
    }

    // index array
    $myArr = ['amy','bob','cat'];
    dd($myArr);

    // assoc array
    $assocArr = [
        's1' => 'amy',
        's2' => 'amy',
        's3' => 'amy'
    ];
    dd($assocArr);

    foreach ($myArr as $key => $value) {
        dd($key);
        dd($value);
    }

    foreach ($assocArr as $key => $value) {
        dd($key);
        dd($value);
    }

?>