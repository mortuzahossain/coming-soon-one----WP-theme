<?php
global $cs;
$favicon        = $cs['favicon_img']['url'];
$background     = $cs['background_img']['url'];
if (empty($favicon)) {
    $favicon = get_template_directory_uri().'/img/marketing8.png';
}
if (empty($background)) {
    $background = get_template_directory_uri().'/img/1.jpg';
}

?>


<!doctype html>
<html class="no-js" lang="<?php bloginfo( 'language' ); ?>">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php bloginfo( 'title' ); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="<?php echo $favicon ?>"> 

        <style type="text/css">
            .comming-soon-area, .display-table{
                background-image: url(<?php echo $background ?>);
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
                height: 100%;
            }
        </style>

        <?php wp_head(); ?>
    </head>
    <body>