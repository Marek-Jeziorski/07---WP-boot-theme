<?php if (have_posts()): while (have_posts()): the_post();?>

<h3><?php the_title();?><br><?php echo get_the_date() ?></h3>

<?php the_excerpt();?>
<a href="<?php the_permalink()?>">Czytaj więcej...</a>
<?php endwhile;else:endif;?>