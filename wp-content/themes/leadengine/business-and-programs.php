<?php 

/*
Template Name: Business and Programs
*/


get_header();

$themetek_page_top_padding = get_post_meta( get_the_ID(), '_themetek_page_top_padding', true );
$themetek_page_bottom_padding = get_post_meta( get_the_ID(), '_themetek_page_bottom_padding', true );

?>

<div id="primary" class="content-area" style="
   <?php echo ( !empty($themetek_page_top_padding) ? ' padding-top:'. esc_attr($themetek_page_top_padding) .';' : '' );?>
   <?php echo ( !empty($themetek_page_bottom_padding) ? ' padding-bottom:'. esc_attr($themetek_page_bottom_padding) .';' : '' );?>">
	<main id="main" class="site-main" role="main">

	<section class="section" style="<?php echo ( !empty($themetek_page_bgcolor) ? esc_attr($themetek_page_background_color) : '' ); ?>">
    	<div class="container">
			<div class="row single-page-content">
			
			
			<?php

			if ( get_query_var('paged') ) {
				$paged = get_query_var('paged');
			} else if ( get_query_var('page') ) {
				$paged = get_query_var('page');
			} else {
				$paged = 1;
			}

			$args = array(
				'post_type' => 'master',
				'post_status' => 'publish',
				'posts_per_page' => 10,
				'showposts'=> 10,
				'paged' => $paged
			);

			query_posts(
				array(
					'post_type' => 'master',
					'post_status' => 'publish',
					'posts_per_page' => 10,
					'showposts'=> 10,
					'paged' => $paged
				)
			);

			$business_query = null;
			$business_query = new WP_Query($args); ?>

			<?php if( $business_query->have_posts() ) : ?>
				<?php while ($business_query->have_posts()) : $business_query->the_post(); ?>

					<?php 
						$tokyo_festival_options = get_field_object('tokyo_festival');
						$tokyo_festival_value = $tokyo_festival_options['value'];
						$tokyo_festival_label = $tokyo_festival_options['choices'][ $tokyo_festival_value ];
					?>

					<div class="custom-business row">
						
						<div class="business_meta col-lg-12 clearfix">

							<div class="business_name col-lg-8">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</div>
							
							<?php if(!empty($tokyo_festival_label)) :  ?>
							<div class="business_sponsored col-lg-4">
								<?= $tokyo_festival_label; ?>
							</div>
							<?php endif; ?>

						</div>

						<?php if( have_rows('settlement_amount') ): ?>
							<?php 
								$business_years = '';
								$business_amount = 0;
							while( have_rows('settlement_amount') ): the_row(); 

								$year = get_sub_field('year');
								$price = get_sub_field('price');

								$business_years .= $year.', ';
								$business_amount += $price;

								?>
							<?php endwhile; ?>
						<?php endif; ?>

						<div class="business_details col-lg-12">
							<div class="col-lg-4">
								年度: <?= substr($business_years, 0, -2); ?>
							</div>
							<div class="col-lg-4">
								決済額: <?= number_format($business_amount); ?>
							</div>
							<div class="col-lg-4">
							総人数: 5,000 
							</div>
						</div>

						<div class="business_summary col-lg-12">

							<h6>
								【事業概要】
							</h6>
							<p>
								<?php 
									echo $business_description = get_post_meta( get_the_ID(), 'overview', true );
								?>
							</p>
						</div>
						
						<?php if( have_rows('list') ): ?>
							<?php while( have_rows('list') ): the_row(); ?>

								<div class="business_categories col-lg-12">
									
									<div class="cat_title col-lg-9">
										<strong><?= $category_name = get_sub_field('title'); ?></strong>
									</div>
									<div class="cat_desc col-lg-3">
										<strong>カテゴリ総人数: 10,000</strong>
									</div>
									
								</div>

								<div class="business_programs col-lg-12">
								<?php if( have_rows('content') ): ?>
									<?php while( have_rows('content') ): the_row(); ?>
										<?php 
										
											$programs = get_sub_field('program'); 
											
										
										?>
										<?php if( $programs ): ?>
											<?php foreach( $programs as $single_program ): ?>
												
												<div class="program_title">
													<a href="<?= get_permalink($single_program->ID); ?>"> <?= $single_program->post_title; ?> </a>	
												</div>
												<div class="program_meta row">
													<?php if( have_rows('settlement_amount') ): ?>
														<?php 
															$program_years = '';
															$program_amount = 0;
														while( have_rows('settlement_amount') ): the_row(); 

															$year = get_sub_field('year');
															$price = get_sub_field('price');

															$program_years .= $year.', ';
															$program_amount += $price;

															?>
														<?php endwhile; ?>
													<?php endif; ?>
													<div class="col-lg-4 program-year">
														年度: <?= substr($program_years, 0, -2); ?>
													</div>
													<div class="col-lg-4 program-amount">
														決済額:  <?= number_format($program_amount); ?>
													</div>
													<div class="col-lg-4 program-peoples">
													人数: 1,500
													</div>

												</div>
											
											<?php endforeach; ?>
										<?php endif; ?>
										
									<?php endwhile; ?>
								<?php endif; ?>
								</div>


							<?php endwhile; ?>
						<?php endif; ?>

					</div>

		    	<?php endwhile; ?>
		    	<?php wp_reset_postdata(); ?>

				<div class="center">
					<?php wp_pagenavi(); ?>
				</div>
			<?php else : ?>
				<h2 style="color:#FF6E3D;">No Videos Found!</h2>
			<?php endif; ?>

				


			</div>

		</div>
	</section>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>