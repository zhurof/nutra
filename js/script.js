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
	console.log(this.value)
})
$('.header__catalog-btn').click(function(){
	$('.catalog-menu').fadeToggle(300);
})