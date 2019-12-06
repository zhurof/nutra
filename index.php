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
		<div class="text-block">
			<div class="wrapper">
				<div class="text-block__inner">
					<h3>ИНТЕРНЕТ-МАГАЗИН</h3>
					<p>В интернет-магазине «ФитоКонтинент» вы найдёте те лекарственные травы, с помощью которых наши предки успешно боролись с различными недугами. Всё сырьё заготавливается в экологически чистых местах нашей планеты, места сбора: Алтай, Крым, Забайкалье, Кавказ, Абхазия, Индия. Мы тщательно отбираем для вас только лучшие натуральные продукты.</p>
					<p><strong>Будьте здоровы вместе с «ФитоКонтинентом»!</strong></p>
				</div>
			</div>
		</div>
		<div class="category-block">
			<div class="wrapper">
				<div class="category-block__head">
					<h2 class="category-block__title">Последние отзывы</h2>
					<a href="#" class="btn btn--oval btn--thin category-block__btn">Все отзывы</a>
					<div class="category-block__nav"></div>
				</div>
				<div class="category-block__slider">
					<?
						$reviews = [
							['author'=>'Юлия Кондратова','img'=>'0.jpg','country'=>'russia','text'=>'Я начала выпивать еще в школе, в компании одноклассников и друзей со двора. Родители об этом до сих пор не знают. В школе я еще могла остановиться вовремя, а вот когда...','good'=>'Alcotox'],
							['author'=>'Максим Лучинский','img'=>'1.jpg','country'=>'ukraine','text'=>'Хороший препарат, избавил меня от жесткого алкоголизма. Жена постоянно пилила меня, что много пью, типа что не выходной так я в стельку:) Уговорила начать прием этих','good'=>'Psorifort'],
							['author'=>'Андрей Попейко','country'=>'finland','text'=>'Итак, друзья, сегодня напишу свой отзыв о каплях Alkotoxic, которые помогли мне не только бросить пить, но и заодно и курить. Алкоголь вошел в привычку как-то незаметно, сначала...','good'=>'Miracle Glow'],
							['author'=>'Анастасия Громова','img'=>'2.jpg','country'=>'russia','text'=>'Я начала выпивать еще в школе, в компании одноклассников и друзей со двора. Родители об этом до сих пор не знают. В школе я еще могла остановиться вовремя, а вот когда...','good'=>'Magnetic Mask'],
						];
						for($i=0;$i<7;$i++){
							$review = $reviews[$i%count($reviews)];
							include "review-card.php";
						}							
					?>
				</div>
			</div>
		</div>
	</main>
<?php	include "footer.php";?>	