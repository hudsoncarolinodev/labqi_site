<?php


function baseLabqi () {

	// TIPOS DE CONTEÚDO
	conteudosLabqi();

	// TAXONOMIA
	//taxonomiaLabqi();

	// META BOXES
	metaboxesLabqi();
}

/****************************************************
* TIPOS DE CONTEÚDO
*****************************************************/

	function conteudosLabqi (){

		// TIPO DE CONTEÚDO DESTAQUE
		tipoDestaque();

		// TIPO DE CONTEÚDO CLIENTE
		tipoCliente();

		// TIPO DE CONTEÚDO SERVIÇO
		tipoServico();

		// TIPO DE CONTEÚDO ANÁLISE
		tipoAnalise();
	}

	// CUSTOM POST TYPE DESTAQUES
	function tipoDestaque() {

		$rotulosDestaques = array(
								'name'               => 'Destaques',
								'singular_name'      => 'destaque',
								'menu_name'          => 'Destaques',
								'name_admin_bar'     => 'destaques',
								'add_new'            => 'Adicionar novo',
								'add_new_item'       => 'Adicionar novo destaque',
								'new_item'           => 'Novo destaque',
								'edit_item'          => 'Editar destaque',
								'view_item'          => 'Ver destaque',
								'all_items'          => 'Todos os destaques',
								'search_items'       => 'Buscar destaques',
								'parent_item_colon'  => 'Dos destaques',
								'not_found'          => 'Nenhum destaque cadastrado.',
								'not_found_in_trash' => 'Nenhum destaque na lixeira.'
							);

		$argsDestaques 	= array(
								'labels'             => $rotulosDestaques,
								'public'             => true,
								'publicly_queryable' => true,
								'show_ui'            => true,
								'show_in_menu'       => true,
								'menu_position'		 => 4,
								'menu_icon'          => 'dashicons-images-alt2',
								'query_var'          => true,
								'rewrite'            => array( 'slug' => 'destaques' ),
								'capability_type'    => 'post',
								'has_archive'        => true,
								'hierarchical'       => false,
								'supports'           => array( 'title', 'thumbnail' )
							);

		// REGISTRA O TIPO CUSTOMIZADO
		register_post_type('destaque', $argsDestaques);

	}

	// CUSTOM POST TYPE DESTAQUES
	function tipoCliente() {

		$rotulosCliente = array(
								'name'               => 'Cliente',
								'singular_name'      => 'cliente',
								'menu_name'          => 'Clientes',
								'name_admin_bar'     => 'clientes',
								'add_new'            => 'Adicionar novo',
								'add_new_item'       => 'Adicionar novo cliente',
								'new_item'           => 'Novo cliente',
								'edit_item'          => 'Editar cliente',
								'view_item'          => 'Ver cliente',
								'all_items'          => 'Todos os clientes',
								'search_items'       => 'Buscar cliente',
								'parent_item_colon'  => 'Dos clientes',
								'not_found'          => 'Nenhum cliente cadastrado.',
								'not_found_in_trash' => 'Nenhum cliente na lixeira.'
							);

		$argsCliente 	= array(
								'labels'             => $rotulosCliente,
								'public'             => true,
								'publicly_queryable' => true,
								'show_ui'            => true,
								'show_in_menu'       => true,
								'menu_position'		 => 4,
								'menu_icon'          => 'dashicons-admin-users',
								'query_var'          => true,
								'rewrite'            => array( 'slug' => 'tipo-clientes' ),
								'capability_type'    => 'post',
								'has_archive'        => true,
								'hierarchical'       => false,
								'supports'           => array( 'title', 'thumbnail' )
							);

		// REGISTRA O TIPO CUSTOMIZADO
		register_post_type('cliente', $argsCliente);

	}

	// CUSTOM POST TYPE SERVIÇO
	function tipoServico(){

		$rotulosServico = array(
								'name'               => 'Serviço',
								'singular_name'      => 'cliente',
								'menu_name'          => 'Serviços',
								'name_admin_bar'     => 'Serviços',
								'add_new'            => 'Adicionar novo',
								'add_new_item'       => 'Adicionar novo serviço',
								'new_item'           => 'Novo serviço',
								'edit_item'          => 'Editar serviço',
								'view_item'          => 'Ver serviço',
								'all_items'          => 'Todos os serviços',
								'search_items'       => 'Buscar serviço',
								'parent_item_colon'  => 'Dos serviços',
								'not_found'          => 'Nenhum serviço cadastrado.',
								'not_found_in_trash' => 'Nenhum serviço na lixeira.'
							);

		$argsServico 	= array(
								'labels'             => $rotulosServico,
								'public'             => true,
								'publicly_queryable' => true,
								'show_ui'            => true,
								'show_in_menu'       => true,
								'menu_position'		 => 4,
								'menu_icon'          => 'dashicons-hammer',
								'query_var'          => true,
								'rewrite'            => array( 'slug' => 'serviços' ),
								'capability_type'    => 'post',
								'has_archive'        => true,
								'hierarchical'       => false,
								'supports'           => array( 'title', 'thumbnail' )
							);

		// REGISTRA O TIPO CUSTOMIZADO
		register_post_type('servico', $argsServico);

	}

	// CUSTOM POST TYPE ANÁLISE
	function tipoAnalise(){

		$rotulosAnalise = array(
								'name'               => 'Tipos de análises',
								'singular_name'      => 'Tipo de análise',
								'menu_name'          => 'Tipos de análises',
								'name_admin_bar'     => 'Tipos de análises',
								'add_new'            => 'Adicionar novo',
								'add_new_item'       => 'Adicionar novo serviço',
								'new_item'           => 'Novo tipo de análise',
								'edit_item'          => 'Editar tipo de análise',
								'view_item'          => 'Ver tipo de análise',
								'all_items'          => 'Todos os tipo de análise',
								'search_items'       => 'Buscar tipo de análise',
								'parent_item_colon'  => 'Dos tipo de análises',
								'not_found'          => 'Nenhum tipo de análise cadastrado.',
								'not_found_in_trash' => 'Nenhum tipo de Análise na lixeira.'
							);

		$argsAnalise 	= array(
								'labels'             => $rotulosAnalise,
								'public'             => true,
								'publicly_queryable' => true,
								'show_ui'            => true,
								'show_in_menu'       => true,
								'menu_position'		 => 4,
								'menu_icon'          => 'dashicons-search',
								'query_var'          => true,
								'rewrite'            => array( 'slug' => 'tipos-de-analises' ),
								'capability_type'    => 'post',
								'has_archive'        => true,
								'hierarchical'       => false,
								'supports'           => array( 'title', 'thumbnail' )
							);

		// REGISTRA O TIPO CUSTOMIZADO
		register_post_type('analise', $argsAnalise);

	}

	/****************************************************
	* TAXONOMIA
	*****************************************************/
	function taxonomiaLabqi () {

	//	taxonomiaCategoriaProdutos();

	}

	// TAXONOMIA DE CASES
	// function taxonomiaCategoriaProdutos() {

	// 	$rotulosCategoriaProdutos = array(

	// 		'name'              => 'Categorias de produto',
	// 		'singular_name'     => 'Categoria de produto',
	// 		'search_items'      => 'Buscar categoria de produto',
	// 		'all_items'         => 'Todas categorias de produto',
	// 		'parent_item'       => 'Categoria de produto pai',
	// 		'parent_item_colon' => 'Categoria de produto pai:',
	// 		'edit_item'         => 'Editar categoria de produto',
	// 		'update_item'       => 'Atualizar categoria de produtos',
	// 		'add_new_item'      => 'Nova categoria de produto',
	// 		'new_item_name'     => 'Nova categoria',
	// 		'menu_name'         => 'Categorias de produto',

	// 	);

	// 	$argsCategoriaProdutos 	= array(
	// 		'hierarchical'      => true,
	// 		'labels'            => $rotulosCategoriaProdutos,
	// 		'show_ui'           => true,
	// 		'show_admin_column' => true,
	// 		'query_var'         => true,
	// 		'rewrite'           => array( 'slug' => 'categoria-produtos' ),
	// 	);

	// 	register_taxonomy( 'categoriaProdutos', array( 'produtos' ), $argsCategoriaProdutos );

	// }


    /****************************************************
	* META BOXES
	*****************************************************/
	function metaboxesLabqi(){

		add_filter( 'rwmb_meta_boxes', 'registraMetaboxes' );

	}

		function registraMetaboxes( $metaboxes ){

			$prefix = 'Labqi_';

			// METABOX DE DESTAQUES
			$metaboxes[] = array(

				'id'			=> 'detalhesMetaboxDetaque',
				'title'			=> 'Detalhes do destaque',
				'pages' 		=> array( 'destaque' ),
				'context' 		=> 'normal',
				'priority' 		=> 'high',
				'autosave' 		=> false,
				'fields' 		=> array(	
                   
                    array(
                        'name'  => 'Descrição:',
                        'id'    => "{$prefix}destaque_descricao",
                        'desc'  => '',
                        'type'  => 'text',
                        'placeholder'  => 'Descrição destaque',
                    ),

                    array(
                        'name'  => 'Link:',
                        'id'    => "{$prefix}destaque_link",
                        'desc'  => '',
                        'type'  => 'text',
                        'placeholder'  => 'Link botão',
                    ),

				)

			);

			// METABOX DE CLIENTE
			$metaboxes[] = array(
				'id'			=> 'detalhesMetaboxClientes',
				'title'			=> 'Detalhes do cliente',
				'pages' 		=> array( 'cliente' ),
				'context' 		=> 'normal',
				'priority' 		=> 'high',
				'autosave' 		=> false,
				'fields' 		=> array(	
                   
                    array(
                        'name'  => 'Descrição:',
                        'id'    => "{$prefix}cliente_descricao",
                        'desc'  => '',
                        'type'  => 'textarea',
                    ),

				)

			);

			// METABOX DE SERVIÇO
			$metaboxes[] = array(
				'id'			=> 'detalhesMetaboxServico',
				'title'			=> 'Detalhes do serviço',
				'pages' 		=> array( 'servico' ),
				'context' 		=> 'normal',
				'priority' 		=> 'high',
				'autosave' 		=> false,
				'fields' 		=> array(	
                   
                    array(
                        'name'  => 'Descrição:',
                        'id'    => "{$prefix}servico_descricao",
                        'desc'  => '',
                        'type'  => 'textarea',
                        'clone' => true,
                    ),

				)

			);

			// METABOX DE TIPOS DE ANÁLISES
			$metaboxes[] = array(
				'id'			=> 'detalhesMetaboxAnalise',
				'title'			=> 'Detalhes da análise',
				'pages' 		=> array( 'analise' ),
				'context' 		=> 'normal',
				'priority' 		=> 'high',
				'autosave' 		=> false,
				'fields' 		=> array(	
                   
                    array(
                        'name'  => 'Descrição:',
                        'id'    => "{$prefix}analise_descricao",
                        'desc'  => '',
                        'type'  => 'textarea',
                        'clone' => true,
                    ),

				)

			);

			return $metaboxes;

		}


  	/****************************************************
	* AÇÕES
	*****************************************************/
	// INICIA A FUNÇÃO PRINCIPAL
	add_action('init', 'baseLabqi');

	// FLUSHS
	function rewrite_flush() {
    	baseLabqi();
   		flush_rewrite_rules();
	}
	register_activation_hook( __FILE__, 'rewrite_flush' );

	/****************************************************
	* // CONFGURAÇÕES VIA REDUX
	*****************************************************/
	if (class_exists('ReduxFramework')) {
		require_once (get_template_directory() . '/redux/sample-config.php');
	}

	/****************************************************
	* // VERSIONAMENTO DE FOLHAS DE ESTILO
	*****************************************************/
	function my_wp_default_styles($styles){
		$styles->default_version = "08112020";
	}
	add_action("wp_default_styles", "my_wp_default_styles");

	// VERSIONAMENTO DE FOLHAS DE ESTILO
	function my_wp_default_scripts($scripts){
		$scripts->default_version = "08112020";
	}
	add_action("wp_default_scripts", "my_wp_default_scripts");


	



