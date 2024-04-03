<div id="carouselExampleIndicators" class="carousel slide my-carousel carousel-fade" data-ride="carousel">
	<div class="carousel-bottom">
 		<ol class="carousel-indicators">
			<?php
				$args = array('post_type' => 'slider' , 'showposts'=>3);
				$my_slider = get_posts( $args);
				$count = 0; if($my_slider) : foreach($my_slider as $post) : setup_postdata($post);
			?>
			    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $count; ?>" <?php if($count == 0): ?> class="active" <?php endif; ?>><?php the_post_thumbnail('medium'); ?></li>
			<?php
			$count ++;
				endforeach;
				endif;
			?>
		</ol>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <svg width="36px" height="36px" viewBox="0 0 16 16" class="bi bi-arrow-left-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="carousel-control-prev-icon" aria-hidden="true">
			  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
			  <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
			</svg>
		    <span class="sr-only">Previous</span>
		</a>
	 	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<svg width="36px" height="36px" viewBox="0 0 16 16" class="bi bi-arrow-right-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="carousel-control-next-icon" aria-hidden="true">
			  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
			  <path fill-rule="evenodd" d="M4 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5A.5.5 0 0 0 4 8z"/>
			</svg>
		    <span class="sr-only">Next</span>
		</a>
 	</div>
	<div class="carousel-inner" role="listbox">
		<?php $cont  = 0; if($my_slider) : foreach($my_slider as $post) : setup_postdata($post);?>
		    <div class="carousel-item <?php if($cont == 0) echo "active" ?>">
		     <?php the_post_thumbnail('full img-fluid'); ?>
		      <div class="carousel-caption slide-<?php the_ID(); ?>">

		        <h2><?php the_field('home_titulo_principal'); ?></h2>
		        <p class="texto-fullbanner"><?php the_field('home_texto_principal'); ?></p>
				
				<div class="botao">
		        	<a href="<?php the_field('home_link_botao'); ?>" class="btn btn-banner">
		        	<?php the_field('home_texto_botao'); ?></a>
		        </div>
		      </div>
		      
		    </div>
		<?php
			$cont ++;
			endforeach;
			endif;
		?>
 	</div>

 	
</div>