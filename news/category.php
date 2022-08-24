<?php
        
$category_slug = isset($_REQUEST['slug']) ? $_REQUEST['slug'] : '';

switch($_REQUEST['slug'])
{
    case 'xa-hoi': echo '<h1>Đây Là Giao Diện Xã Hội</h1>'; 
        break;
    case 'kinh-te': echo '<h1>Đây Là Giao Diện Kinh Tế</h1>'; 
        break;
    case 'chinh-tri': echo '<h1>Đây Là Giao Diện Chính Trị</h1>'; 
        break;
    case 'cong-nghe': echo '<h1>Đây Là Giao Diện Công Nghệ</h1>'; 
        break;
    case 'the-gioi': echo '<h1>Đây Là Giao Diện Thế Giới</h1>'; 
        break;
}   
