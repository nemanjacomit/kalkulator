<?php /* Template Name: Lista timova */?>
<?php get_header(); ?>
<main role="main">
	<!-- section -->
	<section>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="container-fluid" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/vaterpolo-baner.jpg'); height: 290px; background-size: cover; background-repeat: no-repeat;">
				<div class="row" style="height: 100%; align-items: flex-end;">
					<div class="container" style="align-items: center;">
						<div class="row" >
							<div class="col-12 hmn-cl">
								<div id="title">
									<h2>NOVI BEOGRAD</h2>
									<h1>KLUB PLIVAČKIH SPORTOVA</h1>
								</div>
								<div class="pg-tt">
									<h2> <?php the_title(); ?> </h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
			$argsPs = array(
			'post_type'      => 'page',
			'posts_per_page' => -1,
			'post_parent'    => get_the_ID(),
			'order'          => 'ASC',
			'orderby'        => 'menu_order'
			);
			$childrens = get_posts($argsPs);
			if ( $childrens ) { ?>
			<div class="container teams-cont">
				<div class="row">
					
					<div class="col-12">
						<div class="row">
							<div class="col-12 teams-cont-title">
								<h4>Lista timova</h4>
							</div>
							<?php
							foreach ( $childrens as $post ) :
							setup_postdata( $post ); ?>
							<div class="col-md-4">
								<a href="<?php the_permalink(); ?>">
									<div class="steam-box">
										<div class="steam-box-overlay"></div>
										<?php the_post_thumbnail('vaterpolo-blocks'); ?>
										<h4><?php the_title(); ?></h4>
									</div>
								</a>
							</div>
							<?php
							endforeach;
							wp_reset_postdata(); 
							?>
						</div>
					</div>
				</div>
			</div>
			<?php
			}
			?>
		</article>
		<!-- /article -->
		<?php endwhile; ?>
		<?php else: ?>
		<!-- article -->
		<article>
			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
		</article>
		<!-- /article -->
		<?php endif; ?>
	</section>
	<!-- /section -->
</main>
<?php get_footer(); ?>