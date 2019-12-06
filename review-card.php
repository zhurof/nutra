<div class="review-card">
	<div class="review-card__pic">
		<?
			$review_img = "img/icons/user.svg";
			if(!empty($review['img'])){
				$review_img = "img/people/".$review['img'];
			}
		?>
		<img src="<?=$review_img;?>" alt="" class="review-card__img">
		<img src="img/countries/<?=$review['country'];?>.svg" alt="" class="review-card__country">
	</div>
	<h3 class="review-card__title"><?=$review['author'];?></h3>
	<div class="review-card__date">24 апреля 2019</div>
	<div class="rating review-card__rating">
		<?
			$rating = rand(2,5);
			for($r=0;$r<5;$r++){
				if($r<$rating){
					echo '<span class="icon-star rating__star rating__star--active"></span>';					
				}else{
					echo '<span class="icon-star rating__star"></span>';
				}
			}
		?>
	</div>
	<div class="review-card__text"><?=$review['text'];?></div>
	<div class="review-card__footer">Товар: <a href="good.php"><?=$review['good'];?></a></div>
</div>