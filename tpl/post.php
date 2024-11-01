<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>"/>
	<?php wp_print_styles(); ?>
	<?php if(get_option('wp_advent_blackwhite') == 1):?>
    <style>
        body#calendar-day-body {
            background-color: #fafafa !important;
            color: #003300 !important;
        }
    </style>
	<?php endif; ?>
</head>
<body id="calendar-day-body">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="calendar-day calendar-day-<?php the_ID(); ?>">
		<?php the_content(); ?>
    </div>
<?php endwhile; endif; ?>

</body>
</html>
