<div class="card">
	<?if($card['discount']):?>
	<div class="card__discount"><?=$card['discount'];?></div>
	<?endif;?>
	<h3 class="card__title"><a href="good.php"><?=$card['title'];?></a></h3>
	<div class="rating card__rating">
		<?
			$rating = rand(0,5);
			for($r=0;$r<5;$r++){
				if($r<$rating){
					echo '<span class="icon-star rating__star rating__star--active"></span>';					
				}else{
					echo '<span class="icon-star rating__star"></span>';
				}
			}
		?>
	</div>
	<div class="card__description"><?=$card['description'];?></div>
	<a href="good.php" class="card__pic"><img src="img/goods/<?=$card['image'];?>.jpg" alt="" /></a>
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
		<button class="card__btn" data-modal="order" data-img="img/goods/<?=$card['image'];?>.jpg" data-title="<?=$card['title'];?>" data-price="<?=$card['price'];?> ₽" <?=$card['old-price'] ? 'data-old-price="'.$card['old-price'].' ₽"':'';?>></button>
	</div>
</div>