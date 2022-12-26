<!-- template for single post (wpis) -->

<?php get_header();?>

<h3>POST-TYPE = single post</h3>
<h3>PAGE-TEMPLATE = single.php</h3>

<div class="container">
    <?php get_template_part('includes/section', 'blogcontent');?>
</div>

<?php get_footer();?>