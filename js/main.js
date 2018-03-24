$(document).ready(function(){
	/*Carrossel*/
	$('.btCadastro').mouseover(function(){
      $('.btCadastro').addClass("active");
    });
    $(".subNivel1").mouseout(function(){
        $(".btCadastro").removeClass("active");
    });

    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 6,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        600: {
          items: 3,
          nav: true,
          slideBy:3
        },
        1000: {
          items: 5,
          nav: true,
          loop: false,
          slideBy:5
        }
      }
    })

    /*ATIVAR Poltrona*/
	$(".poltronas .disponivel").click(function(){
		$(this).toggleClass("active");
	});
});
