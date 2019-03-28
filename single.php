<?php get_header(); ?>
<div class="page__filter"></div>
<div class="page__featured-image" style="background-image: url(<?php echo the_post_thumbnail_url('myportfolio_single'); ?>)">
	<a class="page__featured-image" href="<?php the_permalink(); ?>" >
	<h1 class="content__title"><?php the_title(); ?></h1>
	</a>
</div>


<div class="content">

	<?php if (have_posts()) :?><?php while(have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>





			<?php the_content();?>

		</article>

	<?php endwhile; else : ?>

	  <h3> <?php esc_html_e('Sorry, no posts matched your criteria.','myportfolio'); ?>  </h3>

	<?php endif; ?>

</div>

<aside class="sidebar">
		<?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>
