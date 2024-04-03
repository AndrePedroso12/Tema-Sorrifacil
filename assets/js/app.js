jQuery(document).ready(function($) {

	$('.sidebarBtn').click(function(){
		$('.sidebarBtn').toggleClass('toggle');
	})

	//Comportamento do menu na rolagem da página
	  $(window).bind('scroll', function () {
	    if($(window).scrollTop() < 100){
	      $('.navbar-custom').removeClass('fixed-top');
	      $('.navbar-custom').removeClass('sticky-header');
	    }
	      else{
	      $('.navbar-custom').addClass('fixed-top');
	      $('.navbar-custom').addClass('sticky-header');
	    }
	  });

		$('.navbar-nav>li>a').on('click', function(){
	    $('.navbar-collapse').collapse('hide');
	});
});

	document.addEventListener( 'wpcf7mailsent' , function( event ){
		location = '#sucesso';
		ga('send', 'event', 'Contact Form', 'submit');
		window.open('https://api.whatsapp.com/send?phone=5551995417999&text=Ol%C3%A1%2C%20gostaria%20de%20falar%20com%20o%20atendimento%20da%20Sorrif%C3%A1cil%20de%20Jo%C3%A3o%20Pessoa');
	}, false );
