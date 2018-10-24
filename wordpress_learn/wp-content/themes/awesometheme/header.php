<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Awesome Theme</title>
    <!-- function to include stylesheets from functions.php -->
    <?php wp_head()?>
</head>

<?php
/**
 *  is_home() will always be blog so use is_front_page() if you want the root you set
 */
if (is_front_page()):
    $awesome_classes = array('awesome-class', 'my-class');
else:
    $awesome_classes = array('no-awesome-class');
endif;
?>

<body <?php body_class($awesome_classes)?>>
<!-- adding custom menu to the footer calling the secondary name from functions.php -->
    <?php wp_nav_menu(array('theme_location' => 'primary'));?>

    <img src="<?php header_image();?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt=""/>
