<?php if (have_posts()): while (have_posts()): the_post();?>

<div class="article-arch-view">

    <div class="article-arch-img">
        <?php if (has_post_thumbnail()): ?>
        <img class="img" src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title()?>">
        <?php endif;?>
    </div>

    <div class="article-arch-body">
        <h3><?php the_title();?><br><?php echo get_the_date() ?></h3>

        <?php the_excerpt();?>
        <a href="<?php the_permalink()?>">Czytaj więcej...</a>
    </div>
</div>
<?php endwhile;else:endif;?>