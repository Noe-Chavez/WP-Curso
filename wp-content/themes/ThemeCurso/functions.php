<!-- Todo el código que hagamos se define aquí -->
<?php 
    # Estaes una función propia para inicializar el tamplete.
    function init_template() {
        add_theme_support( 'post-thumbnails' ); # Establecer imagen destacada en todas nuestras entradas.
        add_theme_support( 'title-tag' );                # Imprime en el header el nombre de nuestra página.
    }

    # Ejecutar la función creada en el hoot de WP para que nuestra función init_template funcione.
    /**
     * primer argumento: Cuando alguén ingrese al sitio, WP eliga el tema y ejecute nuestras opciones.
     * segundo argumento: Es el nombre de la función.
     */
    add_action( 'after_setup_theme', 'init_template');

    function assets() {
        # Establecer dependencia a bootstrap para estilo.
        wp_register_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css','','5.0.0','all');
        # Estabaler depednencia de google, tipo de letra moncerrat.
        wp_register_style('montserrat','https://fonts.googleapis.com/css2?family=Montserrat&display=swap','','1.0','all');
        # Registrar en WP las dos dependencia anteriores y el archivo style.css (utilizando la función get_stylesheet_uri() que nos devuelve la ruta de éste).
        wp_enqueue_style('estilos', get_stylesheet_uri(), array('bootstrap','montserrat'),'1.0','all'); 
    }

    # Agregar al hook, cuando se cargé lapágina (wp_enqueue_scripts), la función assets que contienen el tipo de letra y los estilos. 
    add_action('wp_enqueue_scripts','assets');

?>