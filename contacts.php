<?php	include "header.php";?>		
	<main>
		<div class="sidebar-page">
			<div class="wrapper">
				<ul class="breadcrumbs">
					<li><a href="/">Главная</a></li>
					<li>Контакты</li>
				</ul>
				<div class="sidebar-page__inner">
					<div class="sidebar-page__content">
						<div class="contacts">
							<h2 class="contacts__title">Контактные данные</h2>
							<div class="contacts__inner">
								<div class="contacts__text">
									<a href="tel:88002102737" class="contacts__phone">8 (800) 210-27-37</a>
									<a href="mailto:greennutrashop@info.ru" class="contacts__email">greennutrashop@info.ru</a>
									<h4>Режим работы:</h4>
									<p>Без выходных с 9:00 до 20:00</p>
									<h4>Мы находимся по адресу:</h4>
									<p>ООО «Инвокс», ИНН: 7728391539, ОГРН: 5177746308735. 117437, г.Москва, ул. Академика Арцимовича, д.17, эт.1, пом.5</p>
									<p><a href="javascript:flyTo('55.637769,37.511311')"><i class="icon-map-marker"></i> Показать на карте</a></p>
									<h4>Адрес регионального представительства:</h4>
									<p>ООО «Инвокс», ИНН: 7728391539, ОГРН: 5177746308735. 117437, г.Москва, ул. Академика Арцимовича, д.17, эт.1, пом.5</p>
									<p><a href="javascript:flyTo('55.637769,37.511311')"><i class="icon-map-marker"></i> Показать на карте</a></p>
								</div>
								<form action="" class="contacts__form">
									<h4 class="contacts__form-title">Написать нам</h4>
									<input class="contacts__input" type="text" placeholder="Имя" required>
									<input class="contacts__input" type="text" placeholder="Email" required>
									<textarea class="contacts__textarea" rows="4" placeholder="Ваше сообщение"></textarea>
									<button class="btn btn--block btn--grad contacts__btn">Написать нам</button>
								</form>
							</div>
						</div>
						<div class="map" id="map"></div>
					</div>
					<? include "aside.php";?>
				</div>
			</div>
		</div>
	</main>
	<!-- api карт грузим только там, где надо. Для производительности -->
	<script  src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&#038;ver=1"></script>
<?php	include "footer.php";?>	