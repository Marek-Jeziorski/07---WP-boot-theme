<?php
    /*
    Template Name: Szablon strony teleadresowej
     */
?>

<?php get_header();?>

<h3>POST-TYPE = page,</h3>
<h3>PAGE-TEMPLATE = template-contact.php</h3>

<div class="container">
    <h1><?php the_title();?></h1>
    <?php get_template_part('includes/section', 'content');?>
</div>

<?php get_footer();?>