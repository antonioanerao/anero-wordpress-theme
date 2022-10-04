<?php if( is_active_sidebar( 'anero-sidebar-shop' ) ): ?>
    <?php
        if (is_product_taxonomy()):
            dynamic_sidebar( 'anero-sidebar-product-category' );
        else:
            dynamic_sidebar( 'anero-sidebar-shop' );
        endif;
    ?>
<?php endif;