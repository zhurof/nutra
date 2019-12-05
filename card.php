<div class="card">
	<?if($card['discount']):?>
	<div class="card__discount"><?=$card['discount'];?></div>
	<?endif;?>
	<h3 class="card__title"><?=$card['title'];?></h3>
	<div class="card__rating">
		<?
			$rating = rand(0,5);
			for($r=0;$r<5;$r++){
				if($r<$rating){
					echo '<span class="icon-star card__rating-star card__rating-star--active"></span>';					
				}else{
					echo '<span class="icon-star card__rating-star"></span>';
				}
			}
		?>
	</div>
	<div class="card__description"><?=$card['description'];?></div>
	<img src="img/goods/<?=$card['image']?>.jpg" alt="" class="card__img" />
	<div class="card__tools">
		<span class="card__favourites<?=rand(0,7)?'':' card__favourites--active';?>">Избранное</span>
		<span class="card__collation<?=rand(0,7)?'':' card__collation--active';?>">Сравнить</span>
	</div>
	<div class="card__footer">
		<div class="card__price-wrapper">
			<?if($card['old-price']):?>
			<div class="card__old-price"><?=$card['old-price'];?> ₽</div>
			<?endif;?>
			<div class="card__price"><?=$card['price'];?> ₽</div>
		</div>
		<button class="card__btn"></button>
	</div>
</div>