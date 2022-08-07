<?php

include("config.php");

function dd($data)
{
    echo "<pre>", print_r($data, true), "<pre>";
    die();
}

$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
// dd($currentPage);

// write query
// offset: 0, 5 , 10, 15, 20, 25, ...
// pages: 1, 2, 3
$sql = "SELECT * FROM posts LIMIT :offset, :numberOfRecords";
$data = [
    'offset' => ($currentPage - 1) * 5,
    'numberOfRecords' => 5
];


$stmt = $conn->prepare($sql);
$stmt->execute($data);
$numberOfPages = ceil(totalRows() / 5);

$posts = $stmt->fetchAll();

$pageData  = [
    'posts' => $posts,
    'prevPage' => $currentPage > 1 ? $currentPage - 1 : false,
    'nextPage' => $currentPage + 1 <= $numberOfPages ? $currentPage + 1 : false,
];
