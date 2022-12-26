<!-- template only for posts with news category (odpowiednik archive) -->


<?php get_header();?>

<h3>POST-TYPE = posts-category-news</h3>
<h3>PAGE-TEMPLATE = category-news.php</h3>

<div class="container">
    <h1>Kategoria: <?php echo single_cat_title() ?></h1>

    <?php get_template_part('includes/section', 'archivecontent');?>
    <hr>

    <div class="pagination">
        <?php previous_posts_link()?>
        <?php next_posts_link()?>
    </div>
</div>



<?php get_footer();?>