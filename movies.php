<?php
// Template Name: Modele Films

get_header();

$args = [
    "post_type" => "movies"
];
$query = new WP_Query( $args );

?>

<div class="container">

    <?php if($query->have_posts()) : ?>
        <?php while($query->have_posts()) : $query->the_post(); ?>
            <div>
                <h3><?php the_title() ?></h3>
                <div><?php the_content(); ?></div>
                <div><?= get_the_category_list(",", null, get_the_ID()) ?></div>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <p><?= __("Sorry, no posts matched your criteria.") ?></p>
    <?php endif; ?>

<?php 
// Ré-initialise les requete de WorPress
wp_reset_postdata(); 
?>
</div>

<?php
get_footer();