<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>> 
<head profile="http://gmpg.org/xfn/11"> 
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    
    <meta name="viewport" content="minimum-scale=1.0, target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <meta name="MobileOptimized" content="320">

    <link rel="icon" type="image/png" sizes="256x256" href="<?php echo get_template_directory_uri();?>/img/favicons/icon256.png">
    <link rel="icon" type="image/png" sizes="128x128" href="<?php echo get_template_directory_uri();?>/img/favicons/icon128.png">
    <link rel="icon" type="image/png" sizes="64x64" href="<?php echo get_template_directory_uri();?>/img/favicons/icon64.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/img/favicons/icon32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri();?>/img/favicons/icon16.png">
    <link rel="icon" type="image/svg+xml" sizes="any" href="<?php echo get_template_directory_uri();?>/img/favicons/airpods.svg"> 

    <title><?php wp_title(); ?></title>
    	
    <?php wp_head();?> 
	
</head> 
<body>

<!-- Скрипт для вывода яндекс карт Подключать непосредственно перед вызовом скрипта инициализации карты-->




<!-- Подключение  модальных окон-->
<? include "modal-win.php";?>

<!-- <div id="wrapper"> -->
    
    <?php get_template_part('template-parts/header-part');?>



        
    <!-- </div> -->