(function(){

	$(document).ready(function(){

		$('.scrollTop a').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top
					}, 1000);
					return false;
				}
			}
			
		});

		let labFormContact  = document.querySelector(".lab-form-contact")
		let body            = document.querySelector("body")
		let openFormContact = document.querySelector(".openFormContact")
		let closeFormContact = document.querySelector(".lab-form-contact span.close")
		
		openFormContact.addEventListener("click",(e) => {
			e.preventDefault()
			body.classList.add("sombra")
			labFormContact.classList.add("openForm")
		});

		closeFormContact.addEventListener("click",(e) => {
			e.preventDefault()

			body.classList.remove("sombra")
			labFormContact.classList.remove("openForm")

			
		});


		$('.pg-inicial section:nth-child(5) article.lab-container-full div.lab-col div.lab-content ul li').click(function(e){
			let myThisp = $(this).children('p')
			let myThis = $(this);


			if(!$(this).hasClass('localizacao-active')){
				$('.pg-inicial section:nth-child(5) article.lab-container-full div.lab-col div.lab-content ul li').removeClass('localizacao-active');
				$('.pg-inicial section:nth-child(5) article.lab-container-full div.lab-col div.lab-content ul li p').removeClass('show-sobre');

				$(this).addClass('localizacao-active');

				setTimeout(function(){
					myThisp.addClass('show-sobre');
				}, 200);
			} else{
				myThisp.removeClass('show-sobre');

				setTimeout(function(){
					myThis.removeClass('localizacao-active');
				}, 200);
			}

		});

		$('header.menuTop div.lab-container div.lab-col .lab-nav .open-menu').click(function(){
			$('header.menuTop div.lab-container div.lab-col .lab-nav').addClass('open-menu');
		})

		$('header.menuTop div.lab-container div.lab-col .lab-nav .close-menu').click(function(){
			$('header.menuTop div.lab-container div.lab-col .lab-nav').removeClass('open-menu');
		})

	});

}());