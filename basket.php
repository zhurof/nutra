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
							<h2 class="basket__title">Корзина покупок</h2>
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
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<img src="img/goods/cropped/8.jpg" alt="" class="basket__img">
											</td>
											<td data-caption="Название товара">Anti Toxin Nano <br>- капли от паразитов</td>
											<td data-caption="Артикул">11263418</td>
											<td data-caption="Кол-во">
												<span class="number-field basket__amount">
													<span class="number-field__btn minus">-</span>
													<input type="number" name="amount" class="number-field__input" min="1" max="50" value="3" required />
													<span class="number-field__btn plus">+</span>
												</span>
											</td>
											<td data-caption="Цена">
												<span class="basket__old-price">310 ₽</span>
												<span class="basket__price">230 ₽</span>
											</td>
											<td data-caption="Итог"><span class="basket__good-total" data-currency="₽">690</span></td>
											<td class="basket__tools">
												<i class="icon-refresh-circle basket__refresh-btn"></i>
												<i class="icon-close-circle basket__remove-btn"></i>
											</td>
										</tr>
										<tr>
											<td>
												<img src="img/goods/cropped/8.jpg" alt="" class="basket__img">
											</td>
											<td data-caption="Название товара">Miracle Glow - отбеливающая маска от пигментации</td>
											<td data-caption="Артикул">11263418</td>
											<td data-caption="Кол-во">
												<span class="number-field basket__amount">
													<span class="number-field__btn minus">-</span>
													<input type="number" name="amount" class="number-field__input" min="1" max="50" value="1" required />
													<span class="number-field__btn plus">+</span>
												</span>
											</td>
											<td data-caption="Цена">
												<span class="basket__price">230 ₽</span>
											</td>
											<td data-caption="Итог"><span class="basket__good-total" data-currency="₽">230</span></td>
											<td class="basket__tools">
												<i class="icon-refresh-circle basket__refresh-btn"></i>
												<i class="icon-close-circle basket__remove-btn"></i>
											</td>
										</tr>
										<tr>
											<td>
												<img src="img/goods/cropped/8.jpg" alt="" class="basket__img">
											</td>
											<td data-caption="Название товара">Magnetic Mask - средство для борьбы <br>с алкоголизмом</td>
											<td data-caption="Артикул">11263418</td>
											<td data-caption="Кол-во">
												<span class="number-field basket__amount">
													<span class="number-field__btn minus">-</span>
													<input type="number" name="amount" class="number-field__input" min="1" max="50" value="6" required />
													<span class="number-field__btn plus">+</span>
												</span>
											</td>
											<td data-caption="Цена">
												<span class="basket__price">570 ₽</span>
											</td>
											<td data-caption="Итог"><span class="basket__good-total" data-currency="₽">3 420</span></td>
											<td class="basket__tools">
												<i class="icon-refresh-circle basket__refresh-btn"></i>
												<i class="icon-close-circle basket__remove-btn"></i>
											</td>
										</tr>
									</tbody>
								</tbody>
							</table>
							<div class="basket__footer">
								<a href="catalog.php" class="btn btn--gray btn--oval basket__back-btn">Продолжить покупки</a>
								<div class="basket__total">
									<span>Итого:</span>
									<span class="basket__total-price" data-currency="₽">4 340</span>
								</div>
								<a href="order.php" class="btn btn--oval basket__order-btn">Оформление заказа</a>
							</div>
						</div>
					</div>
					<? include "aside.php";?>
				</div>
			</div>
		</div>
	</main>
<?php	include "footer.php";?>	