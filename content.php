<?php
/*
 * content.php
 */
?>

<article id="id-<?php the_ID(); ?>" class="<?php post_class(); ?>">
    <?php if (has_post_thumbnail()): ?>
        <div><?php the_post_thumbnail(); ?></div>
    <?php endif; ?>
    <?php if (is_single()): ?>
        <?php the_title(); ?>
    <?php else: ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php endif; ?>
</article>
