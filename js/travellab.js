var travelLab = {};

travelLab.Page = {
	init: function(){
	}
}

travelLab.Home = $.extend(true, {}, travelLab.Page, {
	init: function(){
		travelLab.uiHandlers.slider.start('.full-width-slider');
	}
});

travelLab.Trip = $.extend(true, {}, travelLab.Page, {
	init: function(){
		travelLab.uiHandlers.slider.start('.full-width-slider');
	}
});

travelLab.Product = $.extend(true, {}, travelLab.Page, {
	init: function(){
		var $modalPrices = $('#product-price-modal');
		var $modalPricesBtn = $('#product-price-btn');
		
		travelLab.uiHandlers.modal.setUp($modalPricesBtn, $modalPrices);

		var options = {
			auto: false,
			pager: true,
			pagerCustom: '.slider-pager',
			pause: 4000,
			speed: 500
		};

		travelLab.uiHandlers.slider.start('.slider-product', options);
	}
});

travelLab.Gallery = $.extend(true, {}, travelLab.Page, {
	direction: null,
	images: null,

	init: function(){
		this.images = $('.photo-gallery').clone();
		this.createPopUp();
		this.setUpSelect();
	},
	createPopUp: function(){
		var $photoGallery = $('.photo-gallery');
		$photoGallery.magnificPopup({
			delegate: 'a',
			type: 'image',
			closeOnContentClick: false,
			closeBtnInside: false,
			mainClass: 'mfp-with-zoom mfp-img-mobile',
			image: {
				verticalFit: true,
				titleSrc: function(item) {
					return item.el.attr('title'); //+ ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">image source</a>';
				}
			},
			gallery: {
				enabled: true
			},
			zoom: {
				enabled: true,
				duration: 300, // don't foget to change the duration also in CSS
				opener: function(element) {
					return element.find('img');
				}
			},
			callbacks: {
				markupParse: function(template, values, item){
					// Triggers each time when content of popup changes
					// manipulate navigation in order to show only the images visible
					//debugger;
					var $anchor = $(item.el[0]);
					var $photoWrapper = $anchor.parent().parent() //navigate up to .photo-wrapper.photo container
					var $imgOpen = $(values.img_replaceWith[0]);
					$imgOpen.css('opacity','0');
					if(!$photoWrapper.is(':visible')){
						setTimeout(function(){
							var direction = travelLab.Gallery.getDirection();
							$imgOpen.css('opacity','0');
							$photoGallery.magnificPopup(direction);
							$imgOpen.css('opacity','1');
						},0)	
					} else {
						$imgOpen.css('opacity','1');
					}
				},
				open: function(){
					//bind events to navigation arrows
					var $leftBtn = $('button.mfp-arrow-left');
					var $rightBtn = $('button.mfp-arrow-right');
					$leftBtn.bind('click', function(){
						travelLab.Gallery.setDirection('prev');
						//console.log('prev')
					});
					$rightBtn.bind('click', function(){
						travelLab.Gallery.setDirection('next');
						//console.log('next');
					})
				},
				beforeOpen: function(){
					$('body').addClass('gallery-open');
				},
				beforeClose: function(){
					$('body').removeClass('gallery-open');
				}
			}
		});	
	},
	setUpSelect: function(){
		var t = this;
		var $select = $('#img-filter');
		var $photos = $('.photo-wrapper.photo');
		var categories = {};
		$photos.each(function(i){
			var category = $(this).attr('data-category');
			if(typeof categories[category] == 'undefined'){
				categories[category] = true;
				var $option = $('<option>').val(category);
				$option.html(category)
				$option.appendTo($select);
			}
		});

		$select.change(function(){
			var category = $(this).val();
			t.filterImages(category);
		})
	},
	filterImages: function(category){
		$('.photo-wrapper.photo').hide();
		if(category == "*"){
			$('.photo-wrapper.photo').show();
		} else {
			$('.photo-wrapper.photo[data-category="' + category + '"').show();
		}
	},
	setDirection: function(direction) {
		this.direction = direction;
	},
	getDirection: function(){
		return this.direction;
	}
});

travelLab.uiHandlers = {};

travelLab.uiHandlers.modal = {
	setUp: function($btn, $modalId){
		var $modalBg = $('.modal-bg');

		$('.close-modal-btn',$modalId).click(function(e){
			$('body').toggleClass('modal-open');
			$modalBg.fadeToggle('fast');
			$(e.target).parent().fadeToggle('fast');
		});

		$btn.click(function(e){
			e.preventDefault();
			$('body').toggleClass('modal-open');
			$modalBg.fadeToggle('fast');
			$modalId.fadeToggle('fast');
		})
	}
}

travelLab.uiHandlers.slider = {
	defaults: {
		auto: true,
		pager: false,
		speed: 1500,
		pause: 8000,
		autoHover: false //slider stops on hover
	},
	start: function(selector, options){
		options = options || {};
		var finalOptions = $.extend(this.defaults, options);
		var $slider = $(selector);
		$slider.bxSlider(finalOptions);
	}
}

// $(document).ready(function(){
// 	//travelLab.Home.init();
// })

