$(document).ready(function() {
	$('[data-toggle="tooltip"]').tooltip();

	$(".fancybox-modal").fancybox({
		helpers: {
			overlay: {
				locked: false
			}
		}
	});


	// top nav;
	
	var nav = $(".navbar-default");
	var navFixedLogo = $(".navbar-nav > li:first-child");
	navFixedLogo.hide();

	$(window).scroll(function () {
		if ($(this).scrollTop() > 51) {
			nav.addClass("to-top");
			navFixedLogo.show();
		} else {
			nav.removeClass("to-top");
			navFixedLogo.hide();
		}

		if ($(this).scrollTop() > 300) {
			$(".scrollup").css("display", "block").fadeIn();
		} else {
			$(".scrollup").fadeOut();
		}
	});

	$(".scrollup").click(function() {
		$("html, body").animate({ scrollTop: 0 }, 600);
		return false;
	});
	
	
	// commercial items;
	
	$(".commercial-item").hover(function() {
		$(this).find(".item-sign").animate({
			"height" : "50%",
		}, 600);
		$(this).find(".item-sign p").show();
	}, function() {
		$(this).find(".item-sign").animate({
			"height" : "50px",
		}, 600);
		$(this).find(".item-sign p").hide();
	});
	
	
	// order form;
	
	$(".btn-order").on("click", function() {
		var dataCatTitle = $(this).parents(".container").find("h1").data("cat-title");
		var dataProduct = $(this).data("product");
		$(".current-cat-title").text(dataCatTitle);
		$("input[name='service-category']").val(dataCatTitle);
		$("input[name='product']").val(dataProduct);
	});
	

	// yandex map via api;

	ymaps.ready(init);
	var kiryaMap,
		myPlaceMark;

	function init() {
		kiryaMap = new ymaps.Map("yandex-map-construct", {
			center: [55.234946462854936,46.412012048873834],
			zoom: 16,
			controls: ['zoomControl', 'searchControl', 'rulerControl']
		});

		myPlaceMark = new ymaps.Placemark([55.234780922176476,46.415337988052315], {
			hintContent: "ООО рыбхоз Киря",
			balloonContent: "Адрес: 429030 Чувашская Республика, Порецкий р-н, с. Кудеиха, ул. Ленина, д. 100"
		});

		kiryaMap.geoObjects.add(myPlaceMark);
		kiryaMap.behaviors.disable('scrollZoom');
	}
});