<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <!-- El titulo se traera desde WP (Hook) -->
    <?php wp_head(); ?>
</head>
<body>

<header>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-4">
            <!-- 
                se establece de manera dinamica la ruta del logo, para ello se utiliza get_template_directory_uri()
                Para establecer de manera dinamica la raíz.
             -->
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="logo" >
            </div>
            <!-- 
                Estableciendo menú principal.
            -->
            <div class="col-8">
                <nav>
                    <?php wp_nav_menu( 
                        array(
                            'theme_location'    => 'top_menu',
                            'menu_class'        => 'menu-principal',
                            'container_class'   => 'container-menu' 
                        )
                    ); ?>
                </nav>
            </div>
        </div>
    </div>
</header>
