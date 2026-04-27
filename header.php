<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="main-header">
        <div class="container nav-container">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
                FloralShop
            </a>

            <nav class="nav-menu">
                <ul id="primary-menu" class="menu">
                    <li><a href="#hero" class="nav-link">Home</a></li>
                    <li><a href="#boutique" class="nav-link">Boutique</a></li>
                    <li><a href="#occasions" class="nav-link">Occasions</a></li>
                    <li><a href="#story" class="nav-link">Our Story</a></li>
                    <li><a href="#contact" class="nav-link">Contact</a></li>
                </ul>
            </nav>

            <div class="header-actions">
                <a href="#" class="btn btn-outline" style="padding: 10px 25px;">Order Now</a>
            </div>
        </div>
    </header>
