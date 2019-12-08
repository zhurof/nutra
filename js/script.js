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
	$(this).find('.category-block__slider').slick({
		slidesToShow: 4,
		touchThreshold: 1000,
		prevArrow: '<span class="icon-angle-left category-block__arrow category-block__arrow--prev">',
		nextArrow: '<span class="icon-angle-right category-block__arrow category-block__arrow--next">',
		appendArrows: '.category-block:eq('+index+') .category-block__nav',
		responsive: [
			{
				breakpoint: 1260,
				settings: {
					slidesToShow: 3
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
//Модальные окна
function openModal(modalId, initiator){  
  var scrollWidth = window.innerWidth - document.body.clientWidth;//Ширина полосы прокрутки
  
	$('.modal-wrapper').children().unwrap();
	if(!$('#'+modalId).length){
		alert('Ошибка вызова модального окна');
		return false;
	}
	$('#'+modalId).trigger('beforeModalShow',initiator).wrap('<div class="modal-wrapper" style="display:none" />');
	$('.modal-wrapper').fadeIn(400,function(){
    $('#'+modalId).trigger('afterModalShow',initiator);
  });	
	if(scrollWidth){
		$('html').css('padding-right',scrollWidth);
		$('body').css('overflow-y','hidden');
	}
}
function closeModal(){
	$('.modal-wrapper').fadeOut(200, function(){
		$('html').css('padding-right','');
		$('body').css('overflow-y','');
	});
}
$(document).on('click', '[data-modal]', function(e){
	e.preventDefault();
	var modal = $(this).data('modal');
	openModal(modal,e.target);
})
$(document).on('click', '.modal__close', closeModal);

$(document).on('mousedown', '.modal-wrapper', function(e){
	if(!$('.modal').is(e.target) && $('.modal').has(e.target).length === 0){
		closeModal();
	}
})
$(document).keydown(function(e){
	//Закрытие окна на Esc
	if(e.which == 27){
		closeModal();
	}
});
//подтягивание данных в модальнео окно заказа
$('#order').on('beforeModalShow',function(e,initiator){
	var image = $(initiator).data('img'),
			title = $(initiator).data('title'),
			price = $(initiator).data('price'),
			oldPrice = $(initiator).data('old-price') || '';
	$(this).find('.order-form__img').css('background-image','url('+image+')');
	$(this).find('.order-form__good-title').text(title);
	$(this).find('[name=good]').val(title);
	$(this).find('.order-form__price').text(price);
	$(this).find('.order-form__total-price').text(price.replace(/\D/g,''));
	$(this).find('.order-form__old-price').text(oldPrice);
	$(this).find('.order-form__amount input').each(function(){
		this.value = this.min || 1;
	});
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
