<?php	include "header.php";?>		
	<main>
		<div class="category-block category-block--highlighted">
			<div class="wrapper">
				<div class="category-block__head">
					<h2 class="category-block__title">Акционные товары</h2>
					<a href="#" class="btn btn--oval btn--thin category-block__btn">Все товары</a>
					<div class="category-block__nav"></div>
				</div>
				<div class="category-block__slider">
					<?
						$cards = [
							['title'=>'Alcotox','description'=>'Cредство для борьбы с алкоголизмом','image'=>'10','discount'=>'25%','price'=>'1800','old-price'=>'2100'],
							['title'=>'Psorifort','description'=>'Крем от псориаза','image'=>'6','discount'=>'25%','price'=>'190','old-price'=>'210'],
							['title'=>'Miracle Glow','description'=>'Отбеливающая маска от пигментации','image'=>'1','discount'=>'25%','price'=>'990','old-price'=>'1200'],
							['title'=>'Magnetic Mask','description'=>'Cредство для борьбы с алкоголизмом','image'=>'0','discount'=>'25%','price'=>'570','old-price'=>'720'],
						];
						for($i=0;$i<7;$i++){
							$card = $cards[$i % count($cards)];
							include 'card.php';
						}
					?>
				</div>
			</div>
		</div>
		<div class="category-block">
			<div class="wrapper">
				<div class="category-block__head">
					<h2 class="category-block__title">Новые товары</h2>
					<a href="#" class="btn btn--oval btn--thin category-block__btn">Все товары</a>
					<div class="category-block__nav"></div>
				</div>
				<div class="category-block__slider">
					<?
						$cards1 = [
							['title'=>'Alcotox','description'=>'Cредство для борьбы с алкоголизмом','image'=>'10','price'=>'1800'],
							['title'=>'Psorifort','description'=>'Крем от псориаза','image'=>'6','price'=>'190'],
							['title'=>'Miracle Glow','description'=>'Отбеливающая маска от пигментации','image'=>'1','price'=>'990'],
							['title'=>'Magnetic Mask','description'=>'Cредство для борьбы с алкоголизмом','image'=>'0','price'=>'570'],
						];
						for($i=0;$i<7;$i++){
							$card = $cards1[$i % count($cards1)];
							include 'card.php';
						}
					?>
				</div>
			</div>
		</div>
		<div class="category-block">
			<div class="wrapper">
				<div class="category-block__head">
					<h2 class="category-block__title">Популярные товары</h2>
					<a href="#" class="btn btn--oval btn--thin category-block__btn">Все товары</a>
					<div class="category-block__nav"></div>
				</div>
				<div class="category-block__slider">
					<?
						for($i=0;$i<7;$i++){
							$card = $cards1[$i % count($cards1)];
							include 'card.php';
						}
					?>
				</div>
			</div>
		</div>
		<div class="category-block">
			<div class="wrapper">
				<div class="category-block__head">
					<h2 class="category-block__title">Варикоз, атеросклероз</h2>
					<a href="#" class="btn btn--oval btn--thin category-block__btn">Все товары</a>
					<div class="category-block__nav"></div>
				</div>
				<div class="category-block__slider">
					<?
						for($i=0;$i<7;$i++){
							$card = $cards1[$i % count($cards1)];
							include 'card.php';
						}
					?>
				</div>
			</div>
		</div>
		<div class="category-block">
			<div class="wrapper">
				<div class="category-block__head">
					<h2 class="category-block__title">Вредные привычки</h2>
					<a href="#" class="btn btn--oval btn--thin category-block__btn">Все товары</a>
					<div class="category-block__nav"></div>
				</div>
				<div class="category-block__slider">
					<?
						for($i=0;$i<7;$i++){
							$card = $cards1[$i % count($cards1)];
							include 'card.php';
						}
					?>
				</div>
			</div>
		</div>
	</main>
<?php	include "footer.php";?>	