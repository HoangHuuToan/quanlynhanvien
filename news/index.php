<?php

require "functions.php";



$category_arr = [
    [
        'id' => '1',
        'slug' => 'xa-hoi',
        'name' => 'Xa hoi'
    ],
    [
        'id' => '2',
        'slug' => 'kinh-te',
        'name' => 'Kinh te'
    ],
    [
        'id' => '3',
        'slug' => 'chinh-tri',
        'name' => 'Chinh tri'
    ],
    [
        'id' => '4',
        'slug' => 'the-gioi',
        'name' => 'The gioi'
    ],
    [
        'id' => '5',
        'slug' => 'cong-nghe',  
        'name' => 'Cong nghe'
    ]
];

echo "<ul>";
foreach($category_arr as $category){
    echo '<li><a href="'.generateCategoryUrl($category['slug']).'">'.$category['name'].'</a></li>';
}
echo "</ul>";

