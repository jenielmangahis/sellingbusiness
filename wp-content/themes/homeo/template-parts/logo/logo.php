<<<<<<< HEAD
<?php
    $logo = homeo_get_config('media-logo');
?>

<?php if( isset($logo['url']) && !empty($logo['url']) ): ?>
    <div class="logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" >
            <img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php bloginfo( 'name' ); ?>">
        </a>
    </div>
<?php else: ?>
    <div class="logo logo-theme">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" >
            <img src="<?php echo esc_url( get_template_directory_uri().'/images/logo.svg'); ?>" alt="<?php bloginfo( 'name' ); ?>">
        </a>
    </div>
=======
<?php
    $logo = homeo_get_config('media-logo');
?>

<?php if( isset($logo['url']) && !empty($logo['url']) ): ?>
    <div class="logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" >
            <img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php bloginfo( 'name' ); ?>">
        </a>
    </div>
<?php else: ?>
    <div class="logo logo-theme">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" >
            <img src="<?php echo esc_url( get_template_directory_uri().'/images/logo.svg'); ?>" alt="<?php bloginfo( 'name' ); ?>">
        </a>
    </div>
>>>>>>> 12e5ad6e736125b89a23634631fb9afa8f10232c
<?php endif; ?>