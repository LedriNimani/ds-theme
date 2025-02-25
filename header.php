<?php wp_head(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
if(is_front_page()){
    $ds=array("ds-class","my-ds-class");
}else{
    $ds=array("no-ds-class");
}


?>




<body>

<?php wp_mav_menu(array("theme-location"=>"primary")); ?>
    

