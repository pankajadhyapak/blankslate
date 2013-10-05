<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="subheading">
		<div class="container">
			<div class="heading pull-left">
				<h2><a href="<?php the_permalink();?>"><?php the_title();?></a><h2>
			</div>
			<div class="post-meta pull-right">
				<h5>Posted on &nbsp;<span class="icon-calendar" > </sapn> <?php the_time('F jS, Y') ?>
	 <span class="icon-user" > </sapn> by <?php the_author() ?><h5>
			</div>
		</div>
	</div>
		<div class="container" id="post-<?php the_ID(); ?>">
<div class="span12">
            <?php if (function_exists('bootstrapwp_breadcrumbs')) {
            bootstrapwp_breadcrumbs();
        } ?>
        </div><!--/.span12 -->
		</div>


			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<?php the_content(); ?>
						<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						
						<?php comments_template(); ?>

					</div>


		
		

		<?php endwhile; endif; ?>
	<div class="col-md-4 sidebarr">

		<?php get_sidebar(); ?>
    </div>
				</div>

<?php get_footer(); ?>