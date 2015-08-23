<?php
/**
 * Template Name: Page Directory Search
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package  i-max
 * @since i-max 1.0
 */

get_header('directory-search'); ?>
<!--
Select Country:   <select id="country2" name ="country2"></select>
<script language="javascript">
populateCountries("country2");


 </script>-->
	<div id="primary" class="content-area nosidebar">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="entry-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
						<?php endif; ?>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'i-max' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div><!-- .entry-content -->

<?php get_template_part('masters_city/main_search', 'page'); ?>

					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'i-max' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->

				<?php comments_template(); ?>
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
<!--
 <script language="javascript">
populateCountries("uultra-search-input-Region", "uultra-search-input-City");
 </script>
-->
<?php get_footer(); ?>
