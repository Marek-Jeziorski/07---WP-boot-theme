<?php if (have_posts()): while (have_posts()): the_post();?>

<p><?php echo get_the_date() ?></p>

<?php the_content();?>
<div class="link-pages"><?php wp_link_pages()?></div>

<div class="postinfo">
    <?php
                        $fname = get_the_author_meta('first_name');
                        $lname = get_the_author_meta('last_name');
                        /*TODO:                 echo $fname . ' ' . $lname; */
                    ?>

    <p>Posted by <?php echo $fname ?>&nbsp<?php echo $lname ?></p>


</div>

<?php endwhile;else:endif;?>