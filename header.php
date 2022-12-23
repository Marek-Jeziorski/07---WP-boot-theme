<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WP-boot-theme</title>

    <!-- header.php inject styles/scripts we set in function.php -->
    <?php wp_head();?>
</head>

<body>
    <header>
        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'main-menu'
                )
            );
        ?>
    </header>