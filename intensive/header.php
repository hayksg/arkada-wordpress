<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="One Page Site">
    <meta name="author" content="PHP-User">

    <title><?php bloginfo('name'); echo " | "; bloginfo('description'); ?></title>

    <style type="text/css">
        .acf-map {
            width: 100%;
            height: 400px;
            border: #ccc solid 1px;
            margin: 20px 0;
        }
        /* fixes potential theme css conflict */
        .acf-map img {
           max-width: inherit !important;
        }
    </style>

    <?php wp_head(); ?> 
    
  </head>
  <body>