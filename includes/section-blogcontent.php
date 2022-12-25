<?php if (have_posts()): while (have_posts()): the_post();?>

<h3><?php the_title();?><br><?php echo get_the_date() ?></h3>
<?php the_content();?>

<div class="postinfo">
    <?php
                        $fname = get_the_author_meta('first_name');
                        $lname = get_the_author_meta('last_name');
                        /*TODO:                 echo $fname . ' ' . $lname; */
                    ?>

    <p>Posted by <?php echo $fname ?>&nbsp<?php echo $lname ?></p>


</div>

<?php endwhile;else:endif;?>