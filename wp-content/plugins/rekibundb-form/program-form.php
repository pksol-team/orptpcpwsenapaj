<?php acf_form_head(); ?>
<?php get_header(); ?>

	<div id="primary">
		<div id="content" role="main" class="wrap">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				
				<h1><?php the_title(); ?></h1>
				
				<?php the_content(); ?>

				<?php if(isset($_GET['updated']) && $_GET['updated'] == "true" ){ ?>

					<h3>完了でした。</h3>

				<?php }else{ ?>

					<form action="" method="POST">
						<div class="acf-fields">
							<div class="acf-field">
								<div class="acf-label">
									<label>プログラム名</label>
								</div>
								<input type="text" name="title" value=""  required="" />
							</div>
							<div class="acf-field">
								<div class="acf-label">
									<label>会場</label>
								</div>
								<select name="venue">
									<option value="">選択して</option>
									<?php
										$venues = get_terms( array(
										    'taxonomy' => 'venue',
										    'hide_empty' => false
										) );

										foreach ($venues as $key => $value) {
											echo "<option value='".$value->term_id."'>".$value->name."</option>";
										}
									?>
								</select>
							</div>
							<div class="acf-field">
								<div class="acf-label">
									<label>主催</label>
								</div>
								<select name="organization">
									<option value="">選択して</option>
									<?php
										$organizations = get_terms( array(
										    'taxonomy' => 'organization',
										    'hide_empty' => false
										) );

										foreach ($organizations as $key => $value) {
											echo "<option value='".$value->term_id."'>".$value->name."</option>";
										}
									?>
								</select>
							</div>
						</div>
						
					
						<?php 

							acf_form(array(
								'post_id'		=> 'new_post',
								'new_post'		=> array(
									'post_type'		=> 'program',
									'post_status'		=> 'publish'
								),
								'form'=> false
							));

						?>

						<input type="submit" value="Submit" />

					</form>

				<?php } ?>

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>