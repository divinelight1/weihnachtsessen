<?php include('header.php'); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="weihn-content container">
    <?php the_content(); ?>
</div>
    <?php endwhile; ?>
<?php else : ?>
<h6 class="center">Not Found</h6>
<p class="center">Sorry, but you are looking for something that isn't here.</p>
<?php include (TEMPLATEPATH . "/searchform.php"); ?>
<?php endif; ?>

<?php include('footer.php'); ?>
