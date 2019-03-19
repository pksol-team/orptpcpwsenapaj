<?php get_header(); ?>

<style type="text/css">
	table td{
		border: 1px solid #111;
    	padding: 10px;
	}
	table td:first-child{
		padding: 10px;
		vertical-align: top;
	}
</style>

<div class="wrap">

	<?php if ( have_posts() ) : ?>
		<header class="page-header">
			<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
		</header><!-- .page-header -->
	<?php endif; ?>

	<div id="" class="content-area">
		<main id="main" class="site-main" role="main">

		<!-- <form action="/" method="get">
			<input type="hidden" value="master" name="post_type" id="post_type" />
			<select name="organizer_venue">
				<option value="">Select</option>
				<?php 
					$organizer_venues = get_terms( array(
					    'taxonomy' => 'organizer_venue',
					    'hide_empty' => false,
					) );
					foreach ($organizer_venues as $k => $v) { ?>
						<option value="<?php echo $v->slug; ?>" ><?php echo $v->name; ?></option>
				<?php } ?>
			</select>
			<input type="submit" value="検索">
		</form> -->

		<?php
		if ( have_posts() ) : ?>
			<?php $num_program = 0; ?>
			<table style="margin-top: 30px;">

			<?php while ( have_posts() ) : the_post(); ?>

				<tr>
					<td><?php echo get_the_title(); ?></td>
					<td>
						<?php
							$list = get_field("list");
							if($list){
								foreach ($list as $k => $v) {
									echo "<p><b>".$v['title']."</b></p>";
									foreach ($v['content'] as $content_k => $content_v) {
										$num_program++;
									 	echo "<p>".get_the_title($content_v["program"]->ID)."</p>";
									} 
								}
							}
						?>
					</td>
				</tr>

			<?php endwhile; ?>

				<tr>
					<td colspan="2" style="text-align: right;"> 合計: <?php echo $num_program; ?> </td>
				</tr>

			</table>

			<p><a href="<?php echo home_url()."?act=export-file" ?>" class="but_export">Export</a></p>

		<?php

			the_posts_pagination( array(
				'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
			) );

		else :

			get_template_part( 'template-parts/post/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php //get_sidebar(); ?>
</div><!-- .wrap -->



<?php get_footer();
