<?php
/**
* Template Name: Code Snippets
*
* @package WordPress
* @subpackage WPBootstrap
* @since 1.0
*/

$codeEx = get_category_by_slug('code-examples')->term_id;
$children = get_categories(['child_of' => $codeEx]);
$valid = array_map(fn($cat) => $cat->term_id, $children);
// var_dump($valid);
if(isset($_GET['cat']) && in_array($_GET['cat'],$valid)){
	$catID = $_GET['cat'];
}else{
	$catID = $codeEx;
}
$query = new WP_Query( ['cat' => $catID] );
get_header(); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-xl-2 col-lg-3">
			<div id="filters" class="">
				<div class="card mt-3 mx-auto">
					<div class="card-header">
						<h5 class="text-center">Filter by Categories</h3>
					</div>
					<div class="card-body">
						<div id="catFilter">
							<?php foreach( $children as $child ):?>
								<div class="mb-3">
									<a class="btn btn-outline-primary" href="<?=get_permalink().'?cat='.$child->term_id?>"><?=$child->name?></a>
								</div>
							<?php endforeach;?>
						</div>

					</div>
					<div class="card-footer">

					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-10 col-lg-9 pe-lg-5">
			<h1 class="text-center" style="margin-top:100px">
				<?php the_title()?>
			</h1>
			<?php the_content(); ?>
			<div id="archive">
				<?php if($query->have_posts()) : 
					while ( $query->have_posts() ): $query->the_post()?>
						<div class="blog-post">
							<h2 class="blog-post-title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h2>
							<?php the_content(); ?>
						</div><!-- /.blog-post -->
					<?php endwhile; ?>
				<?php else : ?>
					<p><?php __('No Page Found'); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

	<?php get_footer();
