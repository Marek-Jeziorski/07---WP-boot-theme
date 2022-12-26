<!-- front-page.php --
template automatically attaches itself to the home page set in WP -->

<?php get_header();?>

<h3>POST-TYPE = page,</h3>
<h3>PAGE-TEMPLATE = front-page.php</h3>

<div class="container">
    <h1><?php bloginfo('name');?> </h1>
    <h2><?php bloginfo('description');?> </h2>
    <?php get_template_part('includes/section', 'pagecontent');?>
</div>

<?php get_footer();?>