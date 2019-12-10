//кастомный селект
$('.select').blur(function(){
	$(this).removeClass('select--open');
})
$('.select__output').click(function(){
	$(this).parent('.select').toggleClass('select--open');
})
$('.select__list>li').click(function(){
	var index = $(this).index(),
			select = $(this).parents('.select');
			
	select.removeClass('select--open');
	select.find('.select__input').prop('selectedIndex',index).trigger('change');
})
$('.select__input').change(function(){
	var wrapper = $(this).parent('.select'),
			index = this.selectedIndex,
			value = wrapper.find('li').eq(index).html();
	wrapper.find('.select__output').html(value);
})
//кастомный input[type=number]
$('.number-field__btn').mousedown(function(){
	var input = $(this).siblings('input')[0],
			min = input.min || 0,
			max = input.max || 99,
			step = input.step || 1,
			value = input.value;

	if($(this).is('.plus') && value <= max-step){
		input.value = +value + +step;
		$(input).trigger('change');
	}
	if($(this).is('.minus') && value >= +min + +step){
		input.value = value - step;
		$(input).trigger('change');
	}
})
//интерактив в шапке
$('.header__catalog-btn').click(function(){
	$('.catalog-menu').fadeToggle(300);
})
$('.catalog-menu__close').click(function(){
	$(this).parent('.catalog-menu').fadeOut(300);
})
$('.catalog-menu__title').click(function(){
	$(this).toggleClass('catalog-menu__title--active');
	$(this).siblings('.catalog-menu__menu').toggleClass('catalog-menu__menu--open');
})
$('.basket-widget__trigger').click(function(e){
	if(innerWidth>767){//показывать виджет только для больших экранов
		e.preventDefault();
		$(this).siblings('.basket-widget__body').fadeToggle(200);
	}	
})
$(document).click(function(e){
	if(!$(e.target).is('.basket-widget') && !$('.basket-widget').has(e.target).length){
		$('.basket-widget__body').hide();
	}
})
$('.menu-btn').click(function(){
	$('.header__topline').toggleClass('header__topline--open');
})
$('.header__close-btn').click(function(){
	$('.header__topline').removeClass('header__topline--open')
})
//Блок со слайдером карточек
$('.category-block').each(function(index,element){
	var customOptions = {
		slidesToShow: 4,
		tablet: 3
	}
	//Подобные блоки есть как на страницах с сайдбаром, так и без. В них разное количество карточек, поэтому проверяем
	if($(this).is('.category-block--small')){
		customOptions.slidesToShow = 3;
		customOptions.tablet = 2;
	}
	$(this).find('.category-block__slider').slick({
		slidesToShow: customOptions.slidesToShow,
		touchThreshold: 1000,
		prevArrow: '<span class="icon-angle-left category-block__arrow category-block__arrow--prev">',
		nextArrow: '<span class="icon-angle-right category-block__arrow category-block__arrow--next">',
		appendArrows: '.category-block:eq('+index+') .category-block__nav',
		responsive: [
			{
				breakpoint: 1260,
				settings: {
					slidesToShow: customOptions.tablet
				}
			},{
				breakpoint: 992,
				settings: {
					slidesToShow: 2
				}
			},{
				breakpoint: 768,
				settings: {
					slidesToShow: 1
				}
			}
		]
	})
})
//интерактив для карточки товара (декоративный, для демонстрации)
$('.card__favourites').click(function(){
	$(this).toggleClass('card__favourites--active')
})
$('.card__collation').click(function(){
	$(this).toggleClass('card__collation--active')
})
//подтягивание данных в модальнео окно заказа
$(document).on('afterLoad.fb',function(e, instance, slide){
	if(slide.src == "#order"){
		
		var image = slide.opts.$orig.data('img'),
				title = slide.opts.$orig.data('title'),
				price = slide.opts.$orig.data('price'),
				oldPrice = slide.opts.$orig.data('old-price') || '';
			
		slide.$slide.find('.order-form__img').css('background-image','url('+image+')');
		slide.$slide.find('.order-form__good-title').text(title);
		slide.$slide.find('[name=good]').val(title);
		slide.$slide.find('.order-form__price').text(price);
		slide.$slide.find('.order-form__total-price').text(price.replace(/\D/g,''));
		slide.$slide.find('.order-form__old-price').text(oldPrice);
		slide.$slide.find('.order-form__amount input').each(function(){
			this.value = this.min || 1;
		});
	}
})
//расчет суммы в модальном окне
$('.order-form__amount input').on('input change',function(){
	var amount = +this.value,
			price = +$(this).parents('.order-form').find('.order-form__price').text().replace(/\D/g,'');
	$(this).parents('.order-form').find('.order-form__total-price').text(amount*price);
})
//меню в сайдбаре
$('.sidebar__menu>li>a:not(:only-child)').click(function(e){
	e.preventDefault();
	$(this).toggleClass('active');
	$(this).siblings('ul').slideToggle(200)
})
//Карта на странице контакты
if($('#map').length){
	ymaps.ready(initMap);
}
var myMap;

function initMap(){	
	$.ajax({
		url: "/map-geopoints.json"
	}).done(function(data){
			console.log(data);
		myMap = new ymaps.Map('map', {
			center: data.features[0].geometry.coordinates,
			zoom: 12,
			controls: []
		}),
		objectManager = new ymaps.ObjectManager();	
		myMap.geoObjects.add(objectManager);
		objectManager.add(data);
	});
}
//функция для перемещения по карте при клике, например, по ссылке
function flyTo(coords){
	coordsArray = coords.split(/\s?,\s?/);
	coordsArray.forEach(function(element,index){
		coordsArray[index] = parseFloat(element);
	})
	if(myMap){
		$('html,body').animate({scrollTop: $('#map').offset().top},500);
		myMap.panTo(coordsArray);
	}	
	return false;
}
//Корзина
$('.basket__amount input').on('input change',function(){
	var amount = +this.value,
			price = +$(this).parents('tr').find('.basket__price').text().replace(/\D/g,'');
	//считаем стоимость одной позиции
	$(this).parents('tr').find('.basket__good-total').text(amount * price);
	//общая стоимость всех товаров корзины
	var totalPrice = 0;
	$('.basket__good-total').each(function(){
		totalPrice += +$(this).text().replace(/\D/g,'');
	})
	$('.basket__total-price').text(totalPrice);
})
//Страница товара
$('.good__slider').slick({
	prevArrow: '<span class="icon-angle-left good__arrow good__arrow--prev">',
	nextArrow: '<span class="icon-angle-right good__arrow good__arrow--next">',
	dots: true,
	dotsClass: 'good__dots',
	customPaging: function(slick,index){
		var img = $(slick.$slides[index]).find('img').clone();
		return img;
	},
	responsive: [
		{
			breakpoint: 768,
			settings: {
				dots: false
			}
		}
	]
})
$('.good__favourites').click(function(){
	$(this).toggleClass('good__favourites--active')
})
$('.good__collation').click(function(){
	$(this).toggleClass('good__collation--active')
})
//интерактив для отзыва
$('.review__increase').click(function(){
	$(this).toggleClass('review__increase--active');
	$(this).siblings().removeClass('review__decrease--active');
})
$('.review__decrease').click(function(){
	$(this).toggleClass('review__decrease--active');
	$(this).siblings().removeClass('review__increase--active');
})
//Поле для загрузки аватара пользователя
$('.userpic-field [type=file]').change(function(){
	var field = $(this).parent('.userpic-field');	
	if(this.value){				
		var file = this.files[0];			
		if(/^image\//.test(file.type) && window.hasOwnProperty('URL')){ //Если файл - картинка и можно вывести миниатюру
			var imageUrl = URL.createObjectURL(file);
			field.css('background-image','url('+imageUrl+')');
			//URL.revokeObjectURL(imageUrl);
		}	
	}else{
		field.css('background-image','');
	}
})