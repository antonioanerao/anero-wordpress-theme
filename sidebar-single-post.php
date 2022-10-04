<?php if( is_active_sidebar( 'sidebar-single-post' ) ): ?>
	<aside class="col-lg-4 col-md-12 mx-auto">
		<div class="card mt-2">
			<div class="card-body">
				<?php dynamic_sidebar( 'sidebar-single-post' ); ?>
			</div>
		</div>
	</aside>
<?php endif; ?>