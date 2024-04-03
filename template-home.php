<?php get_header();
// Template Name: Home
?>
<main id="home">
<section id="topo" class="topo">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<h1>Tenha novos motivos para sorrir. Aqui você encontra o tratamento ideal para ter o sorriso dos seus sonhos!</h1>
				<a href="#tratamentos" class="saibamais mt-3">
					Conheça nossos tratamentos 
					<svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-caret-down-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
					</svg>
				</a>
			</div>
			<div class="col-lg-6">
				<div class="box p-5">
					<h2>Conquiste o sorriso dos seus sonhos</h2>
					<h3 class="my-4">Envie seu whatsapp e <strong>agende uma avaliação!</strong></h3>
					<?php echo do_shortcode('[contact-form-7 id="17" title="Principal"]'); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<div id="tratamentos"></div>
<section class="tratamentos py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center mb-5">
				<h2>Conheça nossos tratamentos</h2>
				<h3>Conheça os principais tratamentos oferecidos pela Sorrifácil</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<h4>Implante dentário</h4>
				<div class="box">
					<img src="<?php echo get_template_directory_uri() . '/assets/img/image01.png'; ?>" alt="Implante Dentário" class="img-fluid"/>
					<a href="#avaliacao" class="btn btn-primary">Agende uma avaliação</a>
				</div>
			</div>
			<div class="col-lg-4">
				<h4 style="margin-top:-20px;"><span>Protese dentária</span>Alinhadores Invisíveis</h4>
				<div class="box">
					<img src="<?php echo get_template_directory_uri() . '/assets/img/image02.png'; ?>" alt="Alinhadores Invisíveis" class="img-fluid"/>
					<a href="#avaliacao" class="btn btn-primary">Agende uma avaliação</a>
				</div>
			</div>
			<div class="col-lg-4">
				<h4>Lentes de Contato Dental</h4>
				<div class="box">
					<img src="<?php echo get_template_directory_uri() . '/assets/img/lentes-dentarias-3.png'; ?>" alt="Lentes de Contato Dental" class="img-fluid"/>
					<a href="#avaliacao" class="btn btn-primary">Agende uma avaliação</a>
				</div>
			</div>
		</div>
		<div class="row py-5">
			<div class="col-lg-6 text-right blue">
				<p class="outros">Outros<br><strong>Tratamentos<br>Dentários</strong></p>
			</div>
			<div class="col-lg-6">
				<ul class="blue">
					<li>Aparelho Ortodôntico</li>
					<li>Clareamento Dentário</li>
					<li>Cirurgia/Extração</li>
					<li>Restauração Dental</li>
					<li>Tratamento de Canal</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 text-center">
				<a href="#avaliacao" class="btn btn-primary">Agende uma avaliação</a>
			</div>
		</div>
	</div>
</section>
<div id="conheca"></div>
<section class="conheca bg-blue py-5">
	<div class="container py-5">
		<div class="row">
			<div class="col-lg-6">
				<img src="<?php echo get_template_directory_uri() . '/assets/img/foto-fachada.png'; ?>" alt="Sorrifácil" class="img-fluid"/>
			</div>
			<div class="col-lg-6 wt">
				<h2>Estrutura moderna e o profissional ideal para cuidar do seu sorriso!</h2>
				<p class="dentista my-5"><strong>RT: Daniel Basso Chagas</strong><br>
				Cirurgião Dentista<br>
				CRO/PR 22997. EPAO 3424 </p>
				<p class="my-5">A <strong>Sorrifácil</strong>, em uma trajetória de 14 anos e mais de 100 clínicas odontológicas no Brasil e uma no Uruguai, usou toda a sua experiência para ampliar sua atuação com a abertura do Instituto <strong>Sorrifácil.</strong>
				<br><br>
				Através dele, busca agradecer aos pacientes e a comunidade por meio de ações sociais e o compartilhamento de conhecimento para ampliação dos valores que a guiaram até aqui: a conscientização e o fácil acesso a tratamentos odontológicos.</p>
				<a href="#avaliacao" class="btn btn-primary">Agende uma avaliação</a>
			</div>	
		</div>
	</div>
</section>
<div id="onde"></div>
<section class="mapa">

	
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d229.00547814844165!2d-51.36763256090869!3d-23.31257841690636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94eca79552465461%3A0x12a453fe8f965a78!2sSorrif%C3%A1cil%20Cl%C3%ADnica%20Odontol%C3%B3gica%20Especialidades!5e0!3m2!1spt-PT!2sbr!4v1613765272993!5m2!1spt-PT!2sbr" width="100%" height="475" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

	<a href="https://goo.gl/maps/MBUmh1CnM4Dzq5QN6" target="_blank"><img src="<?php echo get_template_directory_uri() . '/assets/img/mapa-uper.jpg'; ?>" alt="Sorrifácil Local" class="img-fluid over"/></a>
</section>

<div id="avaliacao" class="form-footer container">
	<div class="row">
		<div class="offset-lg-2 col-lg-8 py-5">
			<div class="box text-center p-5">
				<h2>Conquiste o sorriso dos seus sonhos</h2>
				<p>Envie um WhatsApp e <strong>agende uma avaliação!</strong></p>
				<?php echo do_shortcode('[contact-form-7 id="17" title="Principal"]'); ?>
			</div>
		</div>
	</div>
</div>

</main>
<?php get_footer(); ?>