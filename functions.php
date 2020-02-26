<?php 

//chamar a tag title
function tripularte_render_title(){
	add_theme_support('title-tag');

    add_theme_support( 'post-formats', array('link', 'quote '));


}

add_action('after_setup_theme', 'tripularte_render_title');

//previnir o erro na tag title em versões antigas

if(!function_exists('_wp_render_title_tag')) {
	function tripularte_render_title(){
		?>
		<title><?php wp_title('|', true, 'right')?></title>
		<?php
	}
	add_action('wp_head', 'tripularte_render_title');
}

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}


add_action( 'init', 'register_my_menu' );


/*adcionar logo ao thema*/
add_theme_support('custom-logo');


/*Definir as miniaturas dos posts*/

add_theme_support('post-thumbnails');


//Iniciar o tipo de post
 	
	//Serviços textos post type
        register_post_type('servicos',
            //definir as opções
            array(
                'labels' => array(
                    'name' => __('Serviços textos'),
                    'singular_name' => __('servico')
                ),
                'supports' => array(
                    'title', 'editor'
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-images-alt2',
                'rewrite' => array('slug' => 'servico'),
            ));


        //Cadastro de serviços post type
        register_post_type('cad-service',
            //definir as opções
            array(
                'labels' => array(
                    'name' => __('Serviços Home'),
                    'singular_name' => __('Cadastro servico')
                ),
                'supports' => array(
                    'title', 'editor', 'thumbnail'
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-images-alt2',
                'rewrite' => array('slug' => 'cad-service'),
            ));

         //Cadastro de avaliações post type
        register_post_type('avaliacoes',
            //definir as opções
            array(
                'labels' => array(
                    'name' => __('Cadastro de Avaliações'),
                    'singular_name' => __('cadastro de avaliacao')
                ),
                'supports' => array(
                    'title', 'editor', 'thumbnail'
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-images-alt2',
                'rewrite' => array('slug' => 'cadastro_avaliacoes'),
            ));



         //Cadastro de Clientes post type
        register_post_type('clientes',
            //definir as opções
            array(
                'labels' => array(
                    'name' => __('Clientes'),
                    'singular_name' => __('cliente')
                ),
                'supports' => array(
                    'title', 'thumbnail'
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-images-alt2',
                'rewrite' => array('slug' => 'clientes'),
            ));

        //Parceiros post type
        register_post_type('parceiros',
            //definir as opções
            array(
                'labels' => array(
                    'name' => __('Parceiros'),
                    'singular_name' => __('parceiro')
                ),
                'supports' => array(
                    'title', 'thumbnail'
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-images-alt2',
                'rewrite' => array('slug' => 'parceiros'),
            ));

        //Equipe post type
        register_post_type('equipe',
            //definir as opções
            array(
                'labels' => array(
                    'name' => __('Cadastro da equipe'),
                    'singular_name' => __('equipe')
                ),
                'supports' => array(
                    'title', 'thumbnail', 'editor'
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-images-alt2',
                'rewrite' => array('slug' => 'equipe'),
            ));


         //Cadastro do serviços post type
        register_post_type('cadastro-servicos',
            //definir as opções
            array(
                'labels' => array(
                    'name' => __('Cadastro de Serviços'),
                    'singular_name' => __('cadastro-servicos')
                ),
                'supports' => array(
                    'title',
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-images-alt2',
                'rewrite' => array('slug' => 'cadastro-servicos'),
            ));







    add_filter('wpcf7_autop_or_not', '__return_false');
    add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});


function pine_add_page_slug_body_class( $classes ) {
    global $post;
    
    if ( isset( $post ) ) {
        $classes[] = 'page-' . $post->post_name;
    }
    return $classes;
}
add_filter( 'body_class', 'pine_add_page_slug_body_class' );

?>