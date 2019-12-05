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
//интерактив в шапке
$('.header__catalog-btn').click(function(){
	$('.catalog-menu').fadeToggle(300);
})
$('.basket-widget__trigger').click(function(e){
	e.preventDefault();
	$(this).siblings('.basket-widget__body').fadeToggle(200);
})
$(document).click(function(e){
	if(!$(e.target).is('.basket-widget') && !$('.basket-widget').has(e.target).length){
		$('.basket-widget__body').hide();
	}
})
//Блок со слайдером карточек
$('.category-block').each(function(index,element){
	console.log(index);
	$(this).find('.category-block__slider').slick({
		slidesToShow: 4,
		touchThreshold: 1000,
		prevArrow: '<span class="icon-angle-left category-block__arrow category-block__arrow--prev">',
		nextArrow: '<span class="icon-angle-right category-block__arrow category-block__arrow--next">',
		appendArrows: '.category-block:eq('+index+') .category-block__nav'
	})
})
//интерактив для карточки товара (декоративный, для демонстрации)
$('.card__favourites').click(function(){
	$(this).toggleClass('card__favourites--active')
})
$('.card__collation').click(function(){
	$(this).toggleClass('card__collation--active')
})