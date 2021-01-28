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
    add_action( 'after_setup_theme', 'init_template')

?>