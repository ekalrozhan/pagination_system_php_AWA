<?php

    include("config.php");

    function dd($data){
        echo "<pre>", print_r($data, true), "<pre>";
        die();
    }

    // write query
    // offset: 0, 5 , 10, 15, 20, 25, ...
    $sql = "SELECT * FROM posts LIMIT :offset, :numberOfRecords";
    $data = [
        'offset' => 5,
        'numberOfRecords' => 5
    ];

    // prepare query
    $stmt = $conn->prepare($sql);


    // execute query
    $stmt->execute($data);

    $posts = $stmt->fetchAll();



?>