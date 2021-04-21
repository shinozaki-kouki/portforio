<!DOCTYPE html>
<html lang="ja">

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
        <header class="site-header">
            <a href="index.html"><img class=site-logo src="<?php echo get_template_directory_uri(); ?>/img/logo.png"></a>
            <nav>
                <ul>
                    <li class="nav-list">
                        <a href="about.html">About</a>
                    </li>
                    <li class="nav-list">
                        <a href="works.html">Works</a>
                    </li>
                    <li class="nav-list">
                        <a href="blog.html">Blog</a>
                    </li>
                    <li class="nav-list">
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </nav>
            <div class="table">
                <table width="100%">
                    <tr>
                        <td class="td1"><a href="about.html">About</a></td>
                        <td class="td2"><a href="works.html">Works</a></td>
                    </tr>
                    <tr>
                        <td class="td3"><a href="blog.html">Blog</a></td>
                        <td class="td4"><a href="contact.html">Contact</a></td>
                    </tr>
                </table>
            </div>
            <?php wp_head(); ?>
        </header>