<!-- template for all posts within a site (wpisy) -->


<?php get_header();?>

<h3>POST-TYPE = posts-category</h3>
<h3>PAGE-TEMPLATE = archive.php</h3>

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