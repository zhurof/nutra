	<footer class="footer">
		<div class="wrapper">
			<div class="footer__topline">
				<div class="footer__column">
					<a href="/" class="logo footer__logo"><img src="img/logo.svg" alt=""></a>
					<a href="mailto:greennutrashop@info.ru" class="footer__email">greennutrashop@info.ru</a>
					<div class="footer__field">
						<div class="footer__key">Время работы</div>
						<div class="footer__value">Ежедневно, 24/7</div>
					</div>
				</div>
				<div class="footer__column">
					<h3 class="footer__title">Информация</h3>
					<ul class="footer__menu">
						<li><a href="#">О нас</a></li>
						<li><a href="#">Политика конфиденциальности</a></li>
						<li><a href="#">Доставка и оплата</a></li>
					</ul>
				</div>
				<div class="footer__column">
					<h3 class="footer__title">Дополнительно</h3>
					<ul class="footer__menu">
						<li><a href="#">Акции</a></li>
						<li><a href="#">Связаться с нами</a></li>
						<li><a href="#">Карта сайта</a></li>
						<li><a href="#">Города</a></li>
					</ul>
				</div>
				<div class="footer__column">
					<h3 class="footer__title">Личный кабинет</h3>
					<ul class="footer__menu">
						<li><a href="#">Личный кабинет</a></li>
						<li><a href="#">История заказа</a></li>
						<li><a href="#">Избранное</a></li>
						<li><a href="#">Рассылка</a></li>
					</ul>
				</div>
			</div>
			<div class="footer__midline">
				<ul class="footer__country-list">
					<li><a href="#">Австралия</a></li>
					<li><a href="#">Австрия</a></li>
					<li><a href="#">Аргентина</a></li>
					<li><a href="#">Бельгия</a></li>
					<li><a href="#">Бразилия</a></li>
					<li><a href="#">Великобритания</a></li>
					<li><a href="#">Германия</a></li>
					<li><a href="#">Дания</a></li>
					<li><a href="#">Израиль</a></li>
					<li><a href="#">Ирландия</a></li>
					<li><a href="#">Испания</a></li>
					<li><a href="#">Италия</a></li>
					<li><a href="#">Канада</a></li>
					<li><a href="#">Нидерланды</a></li>
					<li><a href="#">Новая Зеландия</a></li>
					<li><a href="#">Норвегия</a></li>
					<li><a href="#">Саудовская Аравия</a></li>
					<li><a href="#">Колумбия</a></li>
					<li><a href="#">Сингапур</a></li>
					<li><a href="#">Мексика</a></li>
					<li><a href="#">США</a></li>
					<li><a href="#">Финляндия</a></li>
					<li><a href="#">Франция</a></li>
					<li><a href="#">Чехия</a></li>
					<li><a href="#">Швейцария</a></li>
					<li><a href="#">Швеция</a></li>
					<li><a href="#">Корея</a></li>
					<li><a href="#">Япония</a></li>
					<li><a href="#">Гонконг</a></li>
					<li><a href="#">Тайвань</a></li>
					<li><a href="#">Южноафриканская Республика</a></li>
				</ul>
				<div class="select select--simple footer__country-select" tabindex="0">
					<select name="language" class="select__input" tabindex="-1">
						<option>Австралия</option>
						<option>Австрия</option>
						<option>Аргентина</option>
						<option>Бельгия</option>
					</select>
					<div class="select__output"><img class="select__icon" src="img/countries/australia.svg" alt=""> <span>Австралия</span></div>
					<ul class="select__list">
						<li><img class="select__icon" src="img/countries/australia.svg" alt=""> Австралия</li>
						<li><img class="select__icon" src="img/countries/austria.svg" alt=""> Австрия</li>
						<li><img class="select__icon" src="img/countries/argentina.svg" alt=""> Аргентина</li>
						<li><img class="select__icon" src="img/countries/belgium.svg" alt=""> Бельгия</li>
					</ul>
				</div>
			</div>
			<div class="footer__bottomline">
				© Название компании - Чем компания занимается, 2005—2018.
				<span class="ssl footer__icon">
					<img src="img/lock.svg" class="ssl__icon" alt="">
					<span class="ssl__text">SSL <br>Encryption</span>
				</span>
			</div>
		</div>
	</footer>
	<div class="modal" id="order">
		<span class="icon-close modal__close"></span>
		<form action="" class="order-form">
			<h3 class="order-form__title">Купить в 1 клик</h3>
			<div class="order-form__img" style="background-image:url(img/goods/6.jpg)"></div>
			<h3 class="order-form__good-title">Psorifort - Крем от псориаза</h3>
			<div class="order-form__calc">
				<span class="number-field order-form__amount">
					<span class="number-field__btn minus">-</span>
					<input type="number" name="amount" class="number-field__input" min="1" max="50" value="1" required />
					<span class="number-field__btn plus">+</span>
				</span>
				<div class="order-form__price-wrapper">
					<span class="order-form__old-price">210 ₽</span>
					<span class="order-form__price">190 ₽</span>
				</div>
				<div class="order-form__total">
					<span>Итого:</span>
					<span class="order-form__total-price" data-currency="₽">4 340</span>
				</div>
			</div>
			<div class="order-form__fields">
				<input type="text" name="username" placeholder="Имя" required />
				<input type="tel" name="phone" placeholder="Телефон" required />
				<input type="hidden" name="good" />
				<button class="btn btn--oval btn--block order-form__btn">Заказать</button>
			</div>
		</form>
	</div>
	<div class="modal" id="location">
		<div class="location">
			<h3 class="location__title">Выберите город</h3>
			<input type="search" class="location__input" placeholder="Введите название города" />
			<ul class="location__list">
				<li>Москва</li>
				<li>Санкт-Петербург</li>
				<li>Абакан</li>
				<li>Анапа</li>
				<li>Ангарск</li>
				<li>Арзамас</li>
				<li>Москва</li>
				<li>Санкт-Петербург</li>
				<li>Абакан</li>
				<li>Анапа</li>
				<li>Ангарск</li>
				<li>Арзамас</li>
				<li>Москва</li>
				<li>Санкт-Петербург</li>
				<li>Абакан</li>
				<li>Анапа</li>
				<li>Ангарск</li>
				<li>Арзамас</li>
				<li>Москва</li>
				<li>Санкт-Петербург</li>
				<li>Абакан</li>
				<li>Анапа</li>
				<li>Ангарск</li>
				<li>Арзамас</li>
				<li>Москва</li>
				<li>Санкт-Петербург</li>
				<li>Абакан</li>
				<li>Анапа</li>
				<li>Ангарск</li>
				<li>Арзамас</li>
				<li>Москва</li>
				<li>Санкт-Петербург</li>
				<li>Абакан</li>
				<li>Анапа</li>
				<li>Ангарск</li>
				<li>Арзамас</li>
			</ul>
		</div>
	</div>
	<script src="libs/jquery/jquery-3.4.1.min.js"></script>
	<script src="libs/slick/slick.min.js"></script>
	<script src="js/script.js"></script>	
</body>
</html>