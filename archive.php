<?php get_header(); ?>

		<div id="content" class="span-24">
		
			<div id="main" class="span-14" role="main">
				<div class="container">
				
					<h1>
						<?php if (is_day()) : ?>
							<?php printf(__('Daily Archives: %s', 'basics'), get_the_date()); ?>
						<?php elseif (is_month()) : ?>
							<?php printf(__('Monthly Archives: %s', 'basics'), get_the_date('F Y')); ?>
						<?php elseif (is_year()) : ?>
							<?php printf(__('Yearly Archives: %s', 'basics'), get_the_date('Y')); ?>
						<?php else : ?>
							<?php single_cat_title(); ?>
						<?php endif; ?>
					</h1>
					
					<?php get_template_part('loop', 'category'); ?>
					
				</div>
			</div><!-- /#main -->
			
			<aside id="sidebar" class="span-8 prepend-1" role="complementary">
				<div class="container">
					<?php get_sidebar(); ?>
				</div>
			</aside><!-- /#sidebar -->
			
		</div><!-- /#content -->
		
<?php get_footer(); ?>