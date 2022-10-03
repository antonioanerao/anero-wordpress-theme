<?php
    get_header();
?>
<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    <?php esc_html(the_title()); ?>
                </h1>
            </div>
        </div>
    </div>
</div>
<div class="content-area">
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php
                        if ( class_exists( 'woocommerce' ) ) :
                        if(is_wc_endpoint_url('order-received')):
                            echo '<div class="card"><div class="card-body">';
                        endif;
                        endif;
                    ?>
                    <?php
                    if( have_posts() ):
                        while( have_posts() ): the_post();
                            ?>
                            <article class="col">
                                <div><?php the_content(); ?></div>
                            </article>
                        <?php
                        endwhile;
                    else:
                        ?>
                        <p>Nothing to display.</p>
                    <?php
                    endif;
                    ?>
                    <?php
                        if ( class_exists( 'woocommerce' ) ) :
                            if(is_wc_endpoint_url('order-received')): echo '</div></div>';
                            endif;
                        endif;

                    ?>
                </div>
            </div>
        </div>
    </main>
</div>
<?php get_footer(); ?>