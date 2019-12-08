<?php	include "header.php";?>		
	<main>
		<div class="sidebar-page">
			<div class="wrapper">
				<ul class="breadcrumbs">
					<li><a href="">Каталог товаров</a></li>
					<li>Похудение</li>
				</ul>
				<div class="sidebar-page__inner">
					<div class="sidebar-page__content">
						<div class="catalog">
							<h2 class="catalog__title">Варикоз, атеросклероз</h2>
							<div class="box catalog__box">
								<?
									$cards = [
										['title'=>'Psorifort','description'=>'Крем от псориаза','image'=>'6','price'=>'190'],
										['title'=>'Miracle Glow','description'=>'Отбеливающая маска от пигментации','image'=>'1','price'=>'990'],
										['title'=>'Magnetic Mask','description'=>'Cредство для борьбы с алкоголизмом','image'=>'0','price'=>'570'],
									];
									for($i=0;$i<15;$i++){
										$card = $cards[$i % count($cards)];
										include 'card.php';
									}
								?>
							</div>
							<div class="pagination catalog__pagination">
								<a href="#" class="pagination__arrow icon-angle-left"></a>
								<ul class="pagination__page-list">
									<li><a href="#">1</a></li>
									<li class="active"><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><span>...</span></li>
									<li><a href="#">23</a></li>
								</ul>
								<a href="#" class="pagination__arrow icon-angle-right"></a>
							</div>
							<div class="catalog__text">
								<p>По данным ВОЗ, свыше 4 миллиардов человек в мире заражены паразитарными организмами. Некоторые врачи и вовсе доказывают, что паразитарные организмы водятся в любом из нас. Сегодня всего только 1 средство способно быстро и без посторонних эффектов, как утверждают создатели, очистить человеческий организм от нежелательных «жильцов» - AntiToxinnano (Антитоксин). К тому же этот препарат оказывает антивоспалительное воздействие, моментально устраняет отравляющие вещества и не имеет заменителей.</p>
								<p>Паразиты— это одноклеточные или многоклеточные организмы, существующие за счет особей иного рода и на какое-то время или непрестанно находящиеся снаружи их тела или внутри него. Зачастую паразитарные организмы отнимают у «владельца» самые нужные питательные вещества. Столкнуться с ними легко повсеместно:</p>
							</div>
						</div>
					</div>
					<? include "aside.php";?>
				</div>
			</div>
		</div>
	</main>
<?php	include "footer.php";?>	