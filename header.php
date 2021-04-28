<!DOCTYPE html>
<html<?php language_attributes(); ?>>

    <head>
        <title>shinozaki|PORTFOLIO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width , initial-scale=1.0">
        <title><?php the_title(); ?></title>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/responsive.css">
    </head>

    <body>
        <div class="screen-width">
            <?php
            $menu_name = 'global_nav';
            $locations = get_nav_menu_locations();
            $menu = wp_get_nav_menu_object($locations[$menu_name]);
            $menu_items = wp_get_nav_menu_items($menu->term_id);
            ?>
            <header class="site-header">
                <a href="<?php echo home_url(''); ?>"><img class=site-logo src="<?php echo get_template_directory_uri(); ?>/img/logo.png"></a>
                <nav>
                    <ul>
                        <?php foreach ($menu_items as $item) : ?>
                            <li class="nav-list">
                                <a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </nav>
                <?php wp_head(); ?>
            </header>
            <div class="table">
                <table width="100%">
                    <tr>
                        <td class="td1"><a href="<?php echo home_url('/about'); ?>">About</a></td>
                        <td class="td2"><a href="<?php echo home_url('/work'); ?>">Works</a></td>
                    </tr>
                    <tr>
                        <td class="td3"><a href="<?php echo home_url('/blog'); ?>">Blog</a></td>
                        <td class="td4"><a href="<?php echo home_url('/contact'); ?>">Contact</a></td>
                    </tr>
                </table>
            </div>