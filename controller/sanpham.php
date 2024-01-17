<?php
$ac = "sanpham";
if (isset($_GET['ac'])) {
    $ac = $_GET['ac'];
}
switch ($ac) {
    case 'sanpham':
        include_once "./View/sanpham.php";
        break;
    case 'sale':
        include_once "./View/sanpham.php";
        break;
    case 'chitiet':
        include_once "./View/chitiet.php";
        break;
   



}
?>