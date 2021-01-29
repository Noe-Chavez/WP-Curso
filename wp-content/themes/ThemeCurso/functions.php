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

        #Agregando JQuery y popper, dependencia que requiere bootstrap para funcionar.
        wp_register_script( 'popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js', '', '2.5.4', true );
        
        # Agregar en cola las dependeicias de jascropt para boostrap. 
        #Nota: JQuery ya está defenida en wp, por lo tanto sólo hay que encolar.
        wp_enqueue_script( 'boostraps', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js', array('jquery', 'popper'), '5.0.0', true);

        #Poner en cola nuestro propio arichivo js (assets-->js-->custom.js)
        /**
         *  get_template_directory_uri(): obtiene la ubicación de nuestro template y le concatemanos la ruta
         *  en donde se encuentra nuestro custom.js. Con el objetivo que sea de manera diná,mica la ruta.
         */
        wp_enqueue_script( 'custom', get_template_directory_uri().'/assets/js/custom.js', '', '1.0', true);

    }

    # Agregar al hook, cuando se cargé lapágina (wp_enqueue_scripts), la función assets que contienen el tipo de letra y los estilos. 
    add_action('wp_enqueue_scripts','assets');




?>