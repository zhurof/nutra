<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Верстка</title>
	<meta name="viewport" content="width=device-width, shrink-to-fit=no" />	
	<link rel="stylesheet" href="css/fonts.css" />	
	<link rel="stylesheet" href="css/font-awesome.css" />
	<link rel="stylesheet" href="libs/slick/slick.css" />
	<link rel="stylesheet" href="libs/fancybox/jquery.fancybox.min.css" />
	<link rel="stylesheet" href="css/style.css" />
</head>
<body>
	<header class="header">
		<div class="wrapper">
			<div class="header__topline">
				<i class="icon-close header__close-btn"></i>
				<!-- Дублируем основное меню в этом блоке ибо его удобнее всего использовать как мобильное меню -->
				<ul class="header__menu header__menu--mobile">
					<li><a href="contacts.php">Главная</a></li>
					<li><a href="info.php">Доставка и оплата</a></li>
					<li><a href="info.php">Акции</a></li>
					<li><a href="contacts.php">Контакты</a></li>
				</ul>
				<div class="header__info">
					<div class="header__text"><em>Время работы&nbsp;&nbsp;</em> Ежедневно, 24/7</div>
					<div class="header__text"><em>Оформление заказов&nbsp;&nbsp;</em> Круглосуточно</div>
					<div class="header__text"><a href="mailto:greennutrashop@info.ru">greennutrashop@info.ru</a></div>
				</div>
				<div class="header__options">
					<div class="header__location" data-modal="location">Санкт-Петербург</div>
					<div class="select select--simple header__language" tabindex="0">
						<select name="language" class="select__input" tabindex="-1">
							<option>РУС</option>
							<option>EN</option>
						</select>
						<div class="select__output"><img class="select__icon" src="img/countries/russia.svg" alt=""> <span>РУС</span></div>
						<ul class="select__list">
							<li><img class="select__icon" src="img/countries/russia.svg" alt=""> <span>РУС</span></li>
							<li><img class="select__icon" src="img/countries/england.svg" alt=""> <span>EN</span></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="header__midline">
				<a href="/" class="logo header__logo"><img src="img/logo.svg" alt=""></a>
				<span class="menu-btn"></span>
				<ul class="header__menu">
					<li><a href="/">Главная</a></li>
					<li><a href="info.php">Доставка и оплата</a></li>
					<li><a href="info.php">Акции</a></li>
					<li><a href="contacts.php">Контакты</a></li>
				</ul>
				<div class="header__tools">
					<a href="#" class="header__tool" data-amount="2">
						<i class="icon-heart-o"></i>
						<span>Избранное</span>
					</a>
					<a href="#" class="header__tool">
						<i class="icon-list-add"></i>
						<span>Сравнение</span>
					</a>
					<div class="basket-widget header__basket">
						<a href="basket.php" class="basket-widget__trigger"> <!--data-amount="3"-->
							<i class="icon-cart"></i>
							<span>0 товаров <!--2 490 ₽--></span>
						</a>
						<div class="basket-widget__body">
							<div class="basket-widget__item">
								<img src="img/goods/8.jpg" alt="" class="basket-widget__img">
								<div class="basket-widget__text">
									<h4 class="basket-widget__title">Alcotox - Cредство для борьбы с алкоголизмом</h4>
									<div class="basket-widget__bar">
										<span class="basket-widget__price">230 ₽</span>
										<span class="basket-widget__amount">3</span>
										<i class="icon-close-circle basket-widget__remove-btn"></i>
									</div>
								</div>
							</div>
							<div class="basket-widget__item">
								<img src="img/goods/0.jpg" alt="" class="basket-widget__img">
								<div class="basket-widget__text">
									<h4 class="basket-widget__title">Alcotox - Cредство для борьбы с алкоголизмом</h4>
									<div class="basket-widget__bar">
										<span class="basket-widget__price">230 ₽</span>
										<span class="basket-widget__amount">1</span>
										<i class="icon-close-circle basket-widget__remove-btn"></i>
									</div>
								</div>
							</div>
							<div class="basket-widget__item">
								<img src="img/goods/1.jpg" alt="" class="basket-widget__img">
								<div class="basket-widget__text">
									<h4 class="basket-widget__title">Alcotox - Cредство для борьбы с алкоголизмом</h4>
									<div class="basket-widget__bar">
										<span class="basket-widget__price">230 ₽</span>
										<span class="basket-widget__amount">6</span>
										<i class="icon-close-circle basket-widget__remove-btn"></i>
									</div>
								</div>
							</div>
							<div class="basket-widget__footer">
								<a href="basket.php">Посмотреть корзину</a>
								<a href="order.php" class="btn btn--oval btn--block basket-widget__btn">Оформить заказ</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header__bottomline">
				<span class="header__catalog-btn">Каталог товаров</span>
				<form action="" class="header__search">
					<input type="search" class="header__search-input" placeholder="Поиск по каталогу" />
					<button class="header__search-btn">Искать</button>
				</form>
				<div class="catalog-menu header__catalog-menu">
					<span class="icon-close catalog-menu__close"></span>
					<div class="box catalog-menu__box">
						<div class="catalog-menu__item">
							<h4 class="catalog-menu__title">Для женщин</h4>
							<ul class="catalog-menu__menu">
								<li><a href="catalog.php">Варикоз, атеросклероз</a></li>
								<li><a href="catalog.php">Витаминные, для глаз и волос</a></li>
								<li><a href="catalog.php">Вредные привычки</a></li>
								<li><a href="catalog.php">Гипертонические</a></li>
								<li><a href="catalog.php">Грудные, щитовидка</a></li>
							</ul>
						</div>
						<div class="catalog-menu__item">
							<h4 class="catalog-menu__title">Для мужчин</h4>
							<ul class="catalog-menu__menu">
								<li><a href="catalog.php">Для похудения</a></li>
								<li><a href="catalog.php">Для мужчин</a></li>
								<li><a href="catalog.php">Для женщин</a></li>
								<li><a href="catalog.php">Крепкий иммунитет, будь в тонусе</a></li>
								<li><a href="catalog.php">От вредных привычек</a></li>
							</ul>
						</div>
						<div class="catalog-menu__item">
							<h4 class="catalog-menu__title">Для женщин</h4>
							<ul class="catalog-menu__menu">
								<li><a href="catalog.php">Для похудения</a></li>
								<li><a href="catalog.php">Для мужчин</a></li>
								<li><a href="catalog.php">Для женщин</a></li>
								<li><a href="catalog.php">Крепкий иммунитет, будь в тонусе</a></li>
								<li><a href="catalog.php">От вредных привычек</a></li>
							</ul>
						</div>
						<div class="catalog-menu__item">
							<h4 class="catalog-menu__title">Зависимости</h4>
							<ul class="catalog-menu__menu">
								<li><a href="catalog.php">Варикоз, атеросклероз</a></li>
								<li><a href="catalog.php">Витаминные, для глаз и волос</a></li>
								<li><a href="catalog.php">Вредные привычки</a></li>
								<li><a href="catalog.php">Гипертонические</a></li>
								<li><a href="catalog.php">Грудные, щитовидка</a></li>
							</ul>
						</div>
						<div class="catalog-menu__item">
							<ul class="catalog-menu__menu catalog-menu__menu--strong">
								<li><a href="catalog.php">Низкая цена</a></li>
								<li><a href="catalog.php">Другие товары</a></li>
								<li><a href="catalog.php">Категории без вложений</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>