<?php get_header(); ?>
	<section id="conteudo">
		<div id="artigos">

			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
			<?php /* If this is a category archive */ if (is_category()) { ?>
				Arquivo da Categoria "<?php echo single_cat_title(); ?>"
			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				Arquivo de <?php the_time('j \d\e F \d\e Y'); ?>
			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				Arquivo de <?php the_time('F \d\e Y'); ?>
			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				Arquivo de <?php the_time('Y'); ?>
			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				Arquivo do Autor
			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				Arquivo do Blog
			<?php } ?>
		 
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="artigo">
					<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					<p>Postado por <?php the_author() ?> em <?php the_time('d/M/Y') ?> - <?php comments_popup_link('Sem Comentários', '1 Comentário', '% Comentários', 'comments-link', ''); ?> <?php edit_post_link('(Editar)'); ?></p>
					<p><?php the_content(); ?></p>
				</div>
			<?php endwhile?>
				<div class="navegacao">
					<div class="recentes"><?php next_posts_link('&laquo; Artigos Anteriores') ?></div>
					<div class="anteriores"><?php previous_posts_link('Artigos Recentes &raquo;') ?></div>
				</div>
			<?php else: ?>
				<div class="artigo">
					<h2>Nada Encontrado</h2>
					<p>Erro 404</p>
					<p>Lamentamos mas não foram encontrados artigos.</p>
				</div> 
			<?php endif; ?>
			 
		</div>
		<?php get_sidebar(); ?>
	</section>
<?php get_footer(); ?>