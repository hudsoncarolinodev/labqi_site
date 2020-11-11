<?php
/**
* Template Name: Home Page
*
* @package WordPress
* @subpackage Labqi
* @since Labqi 1.0
*/
//TIPO DE CLIENTE NCOB
	$destaques = new WP_Query( array( 'post_type' => 'destaque', 'orderby' => 'id', 'order' => 'asc', 'posts_per_page' => -1 ) );
	$clientes = new WP_Query( array( 'post_type' => 'cliente', 'orderby' => 'id', 'order' => 'asc', 'posts_per_page' => -1 ) );
	$servicos = new WP_Query( array( 'post_type' => 'servico', 'orderby' => 'id', 'order' => 'asc', 'posts_per_page' => -1 ) );
	$analises = new WP_Query( array( 'post_type' => 'analise', 'orderby' => 'id', 'order' => 'asc', 'posts_per_page' => -1 ) );
get_header()
?>


<!-- PÁGINA INICIAL -->
<main class="pg pg-inicial">
	<?php 
        //TIPO DE CLIENTE NCOB
        while ( $destaques->have_posts() ) : $destaques->the_post();
            $fotoDestaque = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
            $fotoDestaque = $fotoDestaque[0];
    ?>
	<section style="background-image:url(<?php echo  $fotoDestaque ?>);" >
		<div class="lab-container">
			<article class="lab-content">
				
				<h2><?php echo get_the_title(); ?></h2>
				<p><?php echo rwmb_meta('Labqi_destaque_descricao') ?></p>
				
				<?php if(rwmb_meta('Labqi_destaque_link') != ""): ?>
				<div class="link">
					<a href="<?php echo rwmb_meta('Labqi_destaque_link') ?>">Entre em contato</a>
				</div>
				<?php endif; ?>
				<figure class="hidden">
					<img src="<?php echo  $fotoDestaque ?>" alt="<?php get_the_title(); ?>">
					<figcaption><?php echo get_the_title(); ?></figcaption>
				</figure>
				
			</article>
		</div>
	</section>
	<?php endwhile; wp_reset_query(); ?>

	<section  id="labQi">
		<div class="lab-container">
			<article class="lab-content">
				
				<div class="lab-col">
					<figure class="hidden" style="background-image: url(<?php echo $configuracao['section_sobre_imagem']['url']?>);">
						<img src="<?php echo $configuracao['ncob_destaque_inicial_ncobEmpresas_titulo']['url']?>" alt="<?php echo $configuracao['section_sobre_titulo']?>" class="hidden">
						<figcaption><?php echo $configuracao['section_sobre_icone']['url']?></figcaption>
					</figure>
				</div>
				<div class="lab-col">
					<div class="lab-content-text">
						<h2><?php echo $configuracao['section_sobre_titulo']?></h2>
						<p><?php echo $configuracao['section_sobre_texto']?></p>
					</div>
				</div>

			</article>
		</div>
	</section>

	<section  id="servicos"> 
	
		<article class="lab-content">
			<h2><?php echo $configuracao['section_clientes_titulo']?></h2>

			<ul>
				<?php 
			        //TIPO DE CLIENTE NCOB
			        while ( $clientes->have_posts() ) : $clientes->the_post();
			            $fotoClientes = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
			            $fotoClientes = $fotoClientes[0];
			    ?>
				<li>
					<figure>
						<img src="<?php echo $fotoClientes ?> " alt="<?php echo get_the_title(); ?>">
						<figcaption><?php echo get_the_title(); ?></figcaption>
					</figure>
					<h3><?php echo get_the_title(); ?></h3>
					<p><?php echo rwmb_meta('Labqi_cliente_descricao') ?></p>
				</li>
				<?php endwhile; wp_reset_query(); ?>
			</ul>

		</article>

	</section>

	<section>
		
		<article class="lab-content">
			<?php 
				$i = 0;
		        //TIPO DE CLIENTE NCOB
		        while ( $servicos->have_posts() ) : $servicos->the_post();
		            $fotoServicos = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
		            $fotoServicos = $fotoServicos[0];
		    		$lista = rwmb_meta('Labqi_servico_descricao');
		    		if( $i%2==0):
		    ?>
			<div class="lab-container" style="background-image: url(<?php echo $fotoServicos ?> );">
				<div class="lab-content-box right">
					<h2><?php echo get_the_title(); ?></h2>
					<?php foreach ($lista as $lista): ?>
					<p><?php echo $lista ?>s</p>
					<?php endforeach ?>
				</div>

				<figure class="hidden">
					<img src="<?php echo $fotoServicos ?>" alt="<?php echo get_the_title(); ?>">
					<figcaption><?php echo get_the_title(); ?></figcaption>
				</figure>
			</div>
			<?php else: ?>
			<div class="lab-container" style="background-image: url(<?php echo $fotoServicos ?> );">
				<div class="lab-content-box left">
					<h2><?php echo get_the_title(); ?></h2>
					<?php foreach ($lista as $lista): ?>
					<p><?php echo $lista ?>s</p>
					<?php endforeach ?>
				</div>

				<figure class="hidden">
					<img src="<?php echo $fotoServicos ?>" alt="<?php echo get_the_title(); ?>">
					<figcaption><?php echo get_the_title(); ?></figcaption>
				</figure>
			</div>
			<?php endif;$i++; endwhile; wp_reset_query(); ?>
		</article>
	
	</section>

	<section  id="legislacao">
		
		<article class="lab-container-full">
			
			<div class="lab-col mobile-element">
				<figure>
					<img src="<?php echo $configuracao['section_analise_foto']['url']?>" alt="<?php echo $configuracao['section_analise_foto']['url']?>">
					<figcaption class="hidden"><?php echo $configuracao['section_analise_foto']['url']?></figcaption>
				</figure>
			</div>

			<div class="lab-col">
				
				<div class="lab-content">
					<h2><?php echo $configuracao['section_analise_titulo']?></h2>	
					<p><?php echo $configuracao['section_analise_descricao']?></p>

					<ul>
						<?php 
					        //TIPO DE CLIENTE NCOB
					        while ( $analises->have_posts() ) : $analises->the_post();
					            $fotoAnalises = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
					            $fotoAnalises = $fotoAnalises[0];
					    ?>
						<li>
							<span style="background-image: url(<?php echo $fotoAnalises ?>)"></span>
							<h3><?php echo get_the_title(); ?></h3>

							<p><?php echo rwmb_meta('Labqi_analise_descricao') ?></p>

						</li>
						<?php endwhile; wp_reset_query(); ?>
					</ul>
				</div>

			</div>

			<div class="lab-col desktop-element">
				<figure>
					<img src="<?php echo $configuracao['section_analise_foto']['url']?>" alt="<?php echo $configuracao['section_analise_foto']['url']?>">
					<figcaption class="hidden"><?php echo $configuracao['section_analise_foto']['url']?></figcaption>
				</figure>
			</div>

		</article>

	</section id="tiposdeanalises">

	<section>
		
		<article class="lab-container">
							
			<div class="lab-col">
				<figure>
					<img src="<?php echo $configuracao['section_diferenciais_foto']['url']?>" alt="<?php echo $configuracao['section_diferenciais_foto']['url']?>">
					<figcaption style="background-image: url(<?php echo $configuracao['section_diferenciais_icone']['url']?> )"><?php echo $configuracao['section_diferenciais_foto']['url']?></figcaption>
				</figure>
			</div>

			<div class="lab-col">
				<div class="lab-content">
					<h2><?php echo $configuracao['section_diferenciais_titulo']?></h2>
					
					<ul>
						<?php  foreach ($configuracao['section_diferenciais_lista'] as $configuracao['section_diferenciais_lista']): ?>
						<li><?php echo $configuracao['section_diferenciais_lista'] ?></li>
					<?php endforeach; ?>
					</ul>	
					<p><?php echo $configuracao['section_diferenciais_descricao']?></p>	
				</div>
			</div>

		</article>

	</section>

	<section> 
		
		<article class="lab-container">
							
			<div class="lab-col">
				<figure>
					<img src="<?php echo $configuracao['section_quimico_industrial_foto']['url']?>" alt="<?php echo $configuracao['section_quimico_industrial_foto']['url']?>">
					<figcaption><?php echo $configuracao['section_quimico_industrial_titulo']?></figcaption>
				</figure>
			</div>

			<div class="lab-col">
				<div class="lab-content">
					<h6><?php echo $configuracao['section_quimico_industrial_profissao']?></h6>
					<h2><?php echo $configuracao['section_quimico_industrial_titulo']?></h2>
					<p><?php echo $configuracao['section_quimico_industrial_descricao']?></p>	
				</div>
			</div>

		</article>

	</section>

	<section>
		
		<article class="lab-container">
							
			<div class="lab-col">
				<figure>
					<img src="<?php echo $configuracao['section_quimico_responsabilidade_social_foto']['url']?>" alt="<?php echo $configuracao['section_quimico_industrial_profissao']?>">
					<figcaption><?php echo $configuracao['section_quimico_industrial_profissao']?></figcaption>
				</figure>
			</div>

			<div class="lab-col">
				<div class="lab-content">
					
					<h2><?php echo $configuracao['section_quimico_responsabilidade_social_titulo']?></h2>
					<p><?php echo $configuracao['section_quimico_responsabilidade_social_descricao']?>.</p>



					<ul>
						<?php 
	
							$myGalleryIDs = explode(',', $configuracao['section_quimico_responsabilidade_social_logo']);
						    foreach($myGalleryIDs as $myPhotoID):
						       
					    ?>
						<li>
							<figure>
								<img src="<?php echo wp_get_attachment_url( $myPhotoID ); ?>" alt="<?php echo wp_get_attachment_url( $myPhotoID ); ?>">
								<figcaption><?php echo wp_get_attachment_url( $myPhotoID ); ?></figcaption>
							</figure>
						</li>
						<?php endforeach; ?>
					</ul>	
				</div>
			</div>

		</article>

	</section>

	<section>
		
		<article class="lab-container-full">
							
			<div class="lab-col">
				<div class="lab-content">
					<h3><?php echo $configuracao['section_quimico_onde_estamo_titulo']?></h3>
					<p><?php echo $configuracao['section_quimico_onde_estamo_descricao']?></p>

					<div class="lab-contact">
						<b><?php echo $configuracao['section_quimico_onde_estamo_telefone']?></b>
						<b><?php echo $configuracao['section_quimico_onde_estamo_email']?></b>
					</div>	

					<strong>Horário de funcionamento</strong>
					<p><?php echo $configuracao['section_quimico_onde_estamo_horario']?></b></p>
					<strong><?php echo $configuracao['section_quimico_onde_estamo_endereco']?></strong>

					<div class="lab-link">
						<a href="">Entre em contato</a>
					</div>
				</div>
			</div>

			<div class="lab-col">
				<div class="lab-content-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3603.8599282583377!2d-49.241238084986215!3d-25.40949888379784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce5b6c3a8f379%3A0xafb1f6354864023b!2sLabQi%20An%C3%A1lises%20Ambientais!5e0!3m2!1sen!2sbr!4v1604364429466!5m2!1sen!2sbr"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
			</div>

		</article>

	</section>

</main>


<?php get_footer() ?>