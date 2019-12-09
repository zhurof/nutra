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
						<div class="basket">
							<h2 class="basket__title">Оформление заказа</h2>
							<table class="basket__table">
								<tbody>
									<thead>
										<tr>
											<th></th>
											<th>Название товара</th>
											<th>Артикул</th>
											<th>Кол-во</th>
											<th>Цена</th>
											<th>Итог</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<img src="img/goods/cropped/8.jpg" alt="" class="basket__img">
											</td>
											<td data-caption="Название товара">Anti Toxin Nano <br>- капли от паразитов</td>
											<td data-caption="Артикул">11263418</td>
											<td data-caption="Кол-во">3</td>
											<td data-caption="Цена">
												<span class="basket__old-price">310 ₽</span>
												<span class="basket__price">230 ₽</span>
											</td>
											<td data-caption="Итог"><span class="basket__good-total" data-currency="₽">690</span></td>
										</tr>
										<tr>
											<td>
												<img src="img/goods/cropped/8.jpg" alt="" class="basket__img">
											</td>
											<td data-caption="Название товара">Miracle Glow - отбеливающая маска от пигментации</td>
											<td data-caption="Артикул">11263418</td>
											<td data-caption="Кол-во">1</td>
											<td data-caption="Цена">
												<span class="basket__price">230 ₽</span>
											</td>
											<td data-caption="Итог"><span class="basket__good-total" data-currency="₽">230</span></td>
										</tr>
										<tr>
											<td>
												<img src="img/goods/cropped/8.jpg" alt="" class="basket__img">
											</td>
											<td data-caption="Название товара">Magnetic Mask - средство для борьбы <br>с алкоголизмом</td>
											<td data-caption="Артикул">11263418</td>
											<td data-caption="Кол-во">6</td>
											<td data-caption="Цена">
												<span class="basket__price">570 ₽</span>
											</td>
											<td data-caption="Итог"><span class="basket__good-total" data-currency="₽">3 420</span></td>
										</tr>
									</tbody>
								</tbody>
							</table>
							<div class="basket__footer">
								<a href="basket.php" class="btn btn--gray btn--oval basket__back-btn">Вернуться в корзину</a>
								<div class="basket__total">
									<span>Итого:</span>
									<span class="basket__total-price">4 340 ₽</span>
								</div>
							</div>
							<div class="form basket__form">
								<div class="box form__box">
									<div class="form__fieldset">
										<h4 class="form__subtitle">Способ доставки</h4>
										<label class="label">
											<input type="radio" name="delivery" class="label__input">
											<span class="label__text">Доставка Почтой России</span>
										</label>
										<label class="label">
											<input type="radio" name="delivery" class="label__input" checked>
											<span class="label__text">Доставка курьером</span>
										</label>
										<label class="label">
											<input type="radio" name="delivery" class="label__input">
											<span class="label__text">Доставка через транспортные <br>компании</span>
										</label>
										<label class="label">
											<input type="radio" name="delivery" class="label__input">
											<span class="label__text">Самовывоз</span>
										</label>
									</div>
									<div class="form__fieldset">
										<h4 class="form__subtitle">Способ оплаты</h4>
										<label class="label">
											<input type="radio" name="payment" class="label__input">
											<span class="label__text">Наличными при получении</span>
										</label>
										<label class="label">
											<input type="radio" name="payment" class="label__input" checked>
											<span class="label__text">Картой при получении </span>
										</label>
									</div>
									<div class="form__fieldset">
										<h4 class="form__subtitle">Контактные данные</h4>
										<input type="text" placeholder="Имя" required>
										<input type="tel" placeholder="Телефон" required>
									</div>
									<div class="form__fieldset">
										<h4 class="form__subtitle">Адрес</h4>
										<input type="text" placeholder="Город" value="Санкт-Петербург" required>
										<input type="tel" placeholder="Адрес" required>
									</div>
								</div>
								<button class="btn btn--block btn--oval btn--high form__btn">Оформить заказ</button>
							</div>
						</div>
					</div>
					<? include "aside.php";?>
				</div>
			</div>
		</div>
	</main>
<?php	include "footer.php";?>	