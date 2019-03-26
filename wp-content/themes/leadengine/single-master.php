<?php
/**
 * The Template for displaying all single posts.
 * @package leadengine
 * by KeyDesign
 */

get_header(); ?>

<?php
	$redux_ThemeTek = get_option( 'redux_ThemeTek' );
	$page_layout = '';

	if (!isset($redux_ThemeTek['tek-blog-single-sidebar'])) {
		$redux_ThemeTek['tek-blog-single-sidebar'] = 1;
	}

	if ($redux_ThemeTek['tek-blog-single-sidebar']) {
		$page_layout .= "use-sidebar";
	}
?>



<div id="posts-content" class="container blog-single <?php echo esc_html( $page_layout ); ?>">

	<?php while ( have_posts() ) : the_post(); ?>

	<?php 
		$tokyo_festival_options = get_field_object('tokyo_festival');
		$tokyo_festival_value = $tokyo_festival_options['value'];
		$tokyo_festival_label = $tokyo_festival_options['choices'][ $tokyo_festival_value ];

	?>

	<div class="custom-business row">
		
		<div class="business_meta col-lg-12 clearfix">

			<div class="business_name col-lg-8">
				<h3 class="detail-business_page_head"><?php the_title(); ?></h3>
			</div>

		</div>

		<div class="col-lg-12 clearfix business_detail_page">

			<div class="col-lg-4">
				<h6>
					<?= $tokyo_festival_options['label']; ?>
				</h6>

				<?php if(!empty($tokyo_festival_label)) :  ?>
					<?= $tokyo_festival_label; ?>
				<?php endif; ?>
				
			</div>
			
			<div class="col-lg-4">

				<h6>
					決算額
				</h6>

				<?php if( have_rows('settlement_amount') ): ?>
					<?php 
						$business_years = '';
						$business_amount = 0;
					while( have_rows('settlement_amount') ): the_row(); 

						$year = get_sub_field('year');
						$price = get_sub_field('price');

					?>

						<?= $year ?>: <?= number_format($price); ?><br>

					<?php endwhile; ?>
				<?php endif; ?>

			</div>


			<div class="col-lg-4">

				<h6>
					総人数
				</h6>

				<span class="business_people_count" data-count="0"> business_people_count </span>
			</div>
		</div>

		<div class="col-lg-12 clearfix business_detail_page"> 
			
			<h6>
				概要
			</h6>

			<p>
				【事業概要】<br>
				<?= get_post_meta( get_the_ID(), 'overview', true ); ?>

			</p>

			<br>


			<?php 
				$url_post = get_post_meta( get_the_ID(), 'web_url', true );
			?>
			<?php if($url_post) : ?>
			<h6>
				URL
			</h6>
			<p>
				<a href="<?= $url_post; ?>"><?= $url_post; ?></a>
			</p>
			<?php endif; ?>

		</div>

		<div class="detail-business-program col-lg-12 clearfix">
			<h6 class="detail-business_page_head">プログラム</h6>


			<?php if( have_rows('list') ): ?>
							<?php while( have_rows('list') ): the_row(); ?>

								<div class="business_categories col-lg-12">
									
									<div class="cat_title col-lg-9">
										<strong><?= $category_name = get_sub_field('title'); ?></strong>
									</div>
									<div class="cat_desc col-lg-3">
										<strong> カテゴリ総人数: <span class="category_people_count" data-count="<?= get_sub_field('projectninzuu'); ?>"> category_people_count </span>  </strong>
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

														<?php $confirmed_number_of_people_program = get_post_meta($single_program->ID, 'visitor_number_total_number_kakutei', true); ?>

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
															人数: 
															
																<span class="confirmed_number_of_people_program" data-count="<?= $confirmed_number_of_people_program; ?>">confirmed_number_of_people_program</span>

															</div>

														</div>
													
													<?php endforeach; ?>
												<?php endif; ?>
												
											<?php endwhile; ?>
										<?php endif; ?>
										</div>

								</div>

							<?php endwhile; ?>
						<?php endif; ?>

					</div>

					
		</div>
		



	</div>

	<?php endwhile; ?>


</div>

<script>
	jQuery(document).ready(function ($) {

		var business_count_total_top = 0;

		$('.business_categories').each(function (cat_index, cat_element) {
				
			var cat_el = $(cat_element);

			var categories_people = cat_el.find('.category_people_count').attr('data-count');
	
	
			if( isNaN(parseInt(categories_people))) {
				
				var cat_people_dynamic_count = 0;

				cat_el.find('.program_meta').each(function (program_index, program_element) {
					
					var program_el = $(program_element);
					var each_program_count = program_el.find('[data-count]').attr('data-count');

					if(each_program_count != "") {
						cat_people_dynamic_count += parseInt(each_program_count);
					}

				});

				cat_el.find('.category_people_count').attr('data-count', cat_people_dynamic_count);

			}

			business_count_total_top += parseInt(cat_el.find('.category_people_count').attr('data-count'));

		});

		$('.business_people_count').attr('data-count', business_count_total_top);

		$('[data-count]').each(function(count_index, count_el) {
			
			var el = $(count_el);
			var value = el.attr('data-count');
			if(value == "") {
				el.html('0');
			} else {
				el.html(value);
			}

		});

	});

</script>

<?php get_footer(); ?>
