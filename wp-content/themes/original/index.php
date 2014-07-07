<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=<?php bloginfo('charset'); ?>" />
		<title><?php bloginfo('name'); ?><?php wp_title(':'); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
		<style type="text/css">
			#head 	{background-image: url(<?php header_image(); ?>);}

			#head h1 a	{color: #<?php header_textcolor(); ?>;}

			#head p	{color: #<?php header_textcolor(); ?>;}
		</style>
		
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		
		<div id="container">
			<div id="container_inner">
				
				<div id="head">
					<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
					<p><?php bloginfo('description'); ?></p>
				</div>
				
				<div id="content">
					<?php if(have_posts()):
					while(have_posts()): the_post(); ?>
					<div class="post">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p class="postmeta">
							<?php echo get_the_date('Y年n月j日 G：i'); ?>
							 - CATEGORY ： <?php the_category(', '); ?>
						</p>
						<p><?php the_content(); ?></p>
					</div>
					<?php endwhile; endif; ?>
					
					<div class="prevnext">
						<p class="prev"><?php previous_posts_link('&laquo; PREV'); ?></p>
						<p class="next"><?php next_posts_link('NEXT &raquo;'); ?></p>
					</div>
					
					<?php if(is_single()): ?>
					<div id="com">
						<?php comments_template(); ?>
						
						<?php if(pings_open()): ?>
						<p id="tr">
							トラックバックURL：<br />
							<?php trackback_url(); ?>
						</p>
						<?php endif; ?>
						
					</div>
					<?php endif; ?>
					
				</div>
				
				<div id="sidebar">
					
					<ul id="menu">
					<?php dynamic_sidebar(); ?>
					</ul>

				</div>
				
				<div id="foot">
					<p>Copyright &copy;<?php bloginfo('name'); ?>, All Rights Reserved.</p>
				</div>
				
			</div>
		</div>
		
	</body>
</html>