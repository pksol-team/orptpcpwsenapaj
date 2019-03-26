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



	<div id="search_cpt">
			<form action="" method="get" accept-charset="utf-8">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							    <label for="festival">Tokyo Tokyo</label>
							    <span>Festival of Classification</span>
							    <select name="festival" class="form-control">
							    	<option value="all">All</option>
							    	<option value="abc">ABC</option>
							    	<option value="xyz">XYZ</option>
							    </select>
							  </div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
							    <label for="period_year">Period (Year)</label>
							    <select name="period_year" class="form-control">
							    	<option value="all">All</option>
							    	<option value="abc">ABC</option>
							    	<option value="xyz">XYZ</option>
							    </select>
							  </div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
							    <label for="target">Target</label>
							    <select name="target" class="form-control">
							    	<option value="all">All</option>
							    	<option value="abc">ABC</option>
							    	<option value="xyz">XYZ</option>
							    </select>
							  </div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							    <label for="sponsorship">Sponsorship</label>
							    <select name="sponsorship" class="form-control" multiple>
							    	<option value="all">All</option>
							    	<option value="abc">ABC</option>
							    	<option value="xyz">XYZ</option>
							    </select>
							  </div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							    <label for="genre">Genre</label>
							    <select name="genre" class="form-control" multiple>
							    	<option value="all">All</option>
							    	<option value="abc">ABC</option>
							    	<option value="xyz">XYZ</option>
							    </select>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							    <label for="master_business_search">Master Business Search</label>
							    <input type="text" name="master_business_search" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							    <label for="program_search">Program Search</label>
							    <input type="text" name="program_search" class="form-control">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 text-center">
							<div class="form-group">
							    <input type="submit" class="btn btn-primary btn-lg">
							    <p class="advance_search"><span>Advance Search , Click here</span></p>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>

		<div id="basic_return" style="display: none">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="form-group">
						    <p class="basic_search"><span>Show Basic Form , Click here</span></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="detailed_search" style="display: none">
			<nav class="breadcrumb" class="row">
				<div class="container">
					<div class="col-md-12 text-center">
						<h1>Detailed Search</h1>
					</div>
				</div>
			</nav>
			<form action="" method="get" accept-charset="utf-8">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p class="text-center cirteria">On the seach cirteria for the setting, please click on the search button</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<div class="form-group">
							    <label for="free_word">Free Word Search</label>
							</div>
						</div>
						<div class="col-md-10">
							<input type="text" name="free_word" class="form-control">
						</div>
					</div>

					<div class="row">
						<div class="col-md-2">
							<div class="form-group">
							    <label for="festival">Tokyo Tokyo Festival of Classification</label>
							</div>
						</div>
						<div class="col-md-10">
							<select name="festival" class="form-control">
						    	<option value="all">All</option>
						    	<option value="abc">ABC</option>
						    	<option value="xyz">XYZ</option>
						    </select>
						</div>
					</div>

					<div class="row">
						<div class="col-md-2">
							<div class="form-group">
							    <label for="time_target">Time Target</label>
							</div>
						</div>
						<div class="col-md-10">
							<div class="row">
								<div class="col-md-3">
									<div class="row">
										<div class="col-md-9">
											<select name="year" class="form-control">
										    	<option value="2016">2016</option>
										    	<option value="2017">2017</option>
										    	<option value="2018">2018</option>
										    	<option value="2019">2019</option>
										    </select>
										</div>
										<div class="col-md-3">
											<p>Year</p>
										</div>
									</div>
								</div>

								<div class="col-md-3">
									<div class="row">
										<div class="col-md-9">
											<select name="moon" class="form-control">
										    	<option value="10">10</option>
										    	<option value="11">11</option>
										    	<option value="12">12</option>
										    </select>
										</div>
										<div class="col-md-3">
											<p>Moon</p>
										</div>
									</div>
								</div>

								<div class="col-md-3">
									<div class="row">
										<div class="col-md-9">
											<select name="year" class="form-control">
										    	<option value="2016">2016</option>
										    	<option value="2017">2017</option>
										    	<option value="2018">2018</option>
										    	<option value="2019">2019</option>
										    </select>
										</div>
										<div class="col-md-3">
											<p>Year</p>
										</div>
									</div>
								</div>

								<div class="col-md-3">
									<div class="row">
										<div class="col-md-9">
											<select name="moon" class="form-control">
										    	<option value="10">10</option>
										    	<option value="11">11</option>
										    	<option value="12">12</option>
										    </select>
										</div>
										<div class="col-md-3">
											<p>Moon</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-2">
							<div class="form-group">
							    <label for="festival">Sponsorship <br>(CtrlHold down the key Please Select)</label>
							</div>
						</div>
						<div class="col-md-10">
							<div class="form-group">
							    <select name="sponsorship" class="form-control" multiple>
							    	<option value="all">All</option>
							    	<option value="abc">ABC</option>
							    	<option value="xyz">XYZ</option>
							    </select>
							  </div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-2">
							<div class="form-group">
							    <label for="festival">Genre <br>(CtrlHold down the key Please Select)</label>
							</div>
						</div>
						<div class="col-md-10">
							<div class="form-group">
							    <select name="genre" class="form-control" multiple>
							    	<option value="all">All</option>
							    	<option value="abc">ABC</option>
							    	<option value="xyz">XYZ</option>
							    </select>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-2">
							<div class="form-group">
							    <label for="target">Target</label>
							</div>
						</div>
						<div class="col-md-10">
							<div class="form-group">
							    <input type="radio" class="form-check-input" name="target" value="all"> &nbsp; All  
							    &nbsp; &nbsp; &nbsp;<input type="radio" class="form-check-input" name="target" value="for_children"> &nbsp; For Children  
							    &nbsp; &nbsp; &nbsp;<input type="radio" class="form-check-input" name="target" value="for_foreigners"> &nbsp; For Foreigners  
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-2">
							<div class="form-group">
							    <label for="business_name">Business Name <br>(CtrlHold down the key Please Select)</label>
							</div>
						</div>
						<div class="col-md-10">
							<div class="form-group">
							    <select name="business_name" class="form-control" multiple>
							    	<option value="business_name1">Business Name 1</option>
							    	<option value="business_name2">Business Name 2</option>
							    	<option value="business_name3">Business Name 3</option>
							    </select>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-2">
							<div class="form-group">
							    <label for="held_facilty">Held Facilty <br>(CtrlHold down the key Please Select)</label>
							</div>
						</div>
						<div class="col-md-10">
							<div class="form-group">
							    <select name="held_facilty" class="form-control" multiple>
							    	<option value="held1">Held 1</option>
							    	<option value="held2">Held 2</option>
							    	<option value="held3">Held 3</option>
							    </select>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-2">
							<div class="form-group">
							    <label for="multilingual">Multilingual</label>
							</div>
						</div>
						<div class="col-md-10">
							<div class="form-group">
							    <input type="radio" class="form-check-input" name="multilingual" value="all"> &nbsp; All  
							    &nbsp; &nbsp; &nbsp;<input type="radio" class="form-check-input" name="multilingual" value="yes"> &nbsp; Yes  
							    &nbsp; &nbsp; &nbsp;<input type="radio" class="form-check-input" name="multilingual" value="no"> &nbsp; No  
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-2">
							<div class="form-group">
							    <label for="barrier_free">Barrier-Free</label>
							</div>
						</div>
						<div class="col-md-10">
							<div class="form-group">
							    <input type="radio" class="form-check-input" name="barrier_free" value="all"> &nbsp; All  
							    &nbsp; &nbsp; &nbsp;<input type="radio" class="form-check-input" name="barrier_free" value="yes"> &nbsp; Yes  
							    &nbsp; &nbsp; &nbsp;<input type="radio" class="form-check-input" name="barrier_free" value="no"> &nbsp; No  
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-2">
							<div class="form-group">
							    <label for="admission_fees">Admission Fees</label>
							</div>
						</div>
						<div class="col-md-10">
							<div class="form-group">
							    <input type="radio" class="form-check-input" name="admission_fees" value="all"> &nbsp; All  
							    &nbsp; &nbsp; &nbsp;<input type="radio" class="form-check-input" name="admission_fees" value="paid"> &nbsp; Paid  
							    &nbsp; &nbsp; &nbsp;<input type="radio" class="form-check-input" name="admission_fees" value="part-paid"> &nbsp; Part Paid  
							    &nbsp; &nbsp; &nbsp;<input type="radio" class="form-check-input" name="admission_fees" value="free"> &nbsp; Free  
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 text-center">
							<div class="form-group">
							    <input type="submit" class="btn btn-primary btn-lg">
							</div>
						</div>
					</div>
				</div>				
			</form>
		</div>




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
							総人数: <span class="business_people_count" data-count="0"> business_people_count </span>
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
		    		<?php wp_reset_postdata(); ?>


		    	<?php endwhile; ?>

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

<script>
	
	jQuery(document).ready(function ($) {

		$('.custom-business').each(function (index, element) {
			
			var eachRow = $(element);

			eachRow.find('.business_categories').each(function (cat_index, cat_element) {
				
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

			});




		});

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

<script>
	jQuery(document).ready(function($) {
		$("p.advance_search span").click(function(){
		  $("div#detailed_search").slideToggle();
		  $('div#search_cpt').slideToggle();
		  $('div#basic_return').slideToggle();
		});
		$("p.basic_search span").click(function(){
		  $('div#search_cpt').slideToggle();
		  $('div#basic_return').slideToggle();
		  $("div#detailed_search").slideToggle();
		});
	});
</script>

<?php get_footer(); ?>
