<?php
    /*
    Template Name: Szablon strony teleadresowej
     */
?>

<?php get_header();?>

<h3>POST-TYPE = page,</h3>
<h3>PAGE-TEMPLATE = template-contact.php</h3>

<div class="container">
    <?php get_template_part('includes/section', 'pagecontent');?>
</div>

<?php get_footer();?>