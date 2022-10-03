<nav class="navbar navbar-expand-lg sb-navbar <?php echo $themeNavbar; ?> ">
    <div class="container">

        <a class="navbar-brand" href="/">
            <?php if( has_custom_logo() ): ?>
                <?php the_custom_logo(); ?>
            <?php else: ?>
                <?php bloginfo( 'title' ); ?>
                <span class="small"><?php bloginfo( 'description' ); ?></span>
            <?php endif; ?>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <?php
        wp_nav_menu( array(
            'theme_location'    => 'anero_main_menu',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'navbarSupportedContent',
            'menu_class'        => 'navbar-nav mr-auto pt-3 pt-lg-0',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>

    </div>
</nav>