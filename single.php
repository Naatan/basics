<?php get_header(); ?>

		<div id="content" class="span-24">
		
			<div id="main" class="span-14" role="main">
				<div class="container">
					<?php get_template_part('loop', 'single'); ?>
				</div>	
			</div><!-- /#main -->
			
			<aside id="sidebar" class="span-8 prepend-1" role="complementary">
				<div class="container">
					<?php get_sidebar(); ?>
				</div>
			</aside><!-- /#sidebar -->
			
		</div><!-- /#content -->
<?php get_footer(); ?>