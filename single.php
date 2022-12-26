<!-- template for single post (wpis) -->

<?php get_header();?>

<h3>POST-TYPE = single post</h3>
<h3>PAGE-TEMPLATE = single.php</h3>

<div class="container">
    <h3><?php the_title();?></h3>

    <?php if (has_post_thumbnail()): ?>
    <img class="img" src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title()?>">
    <?php endif;?>

    <?php get_template_part('includes/section', 'singlecontent');?>
</div>

<?php get_footer();?>