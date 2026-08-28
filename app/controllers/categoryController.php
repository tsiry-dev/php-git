<?php


function categoryController () {


    $categories = [
        [
            "id" => "sdvhjbsd",
            "title" => "PHP"
        ],
        [
            "id" => "s5dv15ds1v",
            "title" => "Javascript"
        ],
        [
            "id" => "svcskdvsdv5116",
            "title" => "Sass"
        ],
    ];

    require_once PATH . '/views/layouts/header.html.php';
    require_once PATH . '/views/category.html.php';
    require_once PATH . '/views/layouts/footer.html.php';
}