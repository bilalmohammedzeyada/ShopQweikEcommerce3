<?php 
foreach($comments as $comment) { ?>
<div class="ratings-reviews">
		<div class="ratings-table">
				<div class="star-ratings-css">
		<div class="star-ratings-css-top" style="width:100%;">
		<?php 
		if($comment->rating == 1){
			echo "<b>★</b>";
		} else if($comment->rating == 2){
			echo "<b>★</b><b>★</b>";
		} else if($comment->rating == 3){
			echo "<b>★</b><b>★</b><b>★</b>";
		} else if($comment->rating == 4){
			echo "<b>★</b><b>★</b><b>★</b><b>★</b>";
		} else if($comment->rating == 5){
			echo "<b>★</b><b>★</b><b>★</b><b>★</b><b>★</b>";
		}
		?>
		</div>
		<div class="star-ratings-css-bottom">
		
		<?php 
		if($comment->rating == 1){
			echo "<b>★</b>";
		} else if($comment->rating == 2){
			echo "<b>★</b><b>★</b>";
		} else if($comment->rating == 3){
			echo "<b>★</b><b>★</b><b>★</b>";
		} else if($comment->rating == 4){
			echo "<b>★</b><b>★</b><b>★</b><b>★</b>";
		} else if($comment->rating == 5){
			echo "<b>★</b><b>★</b><b>★</b><b>★</b><b>★</b>";
		}
		?>sdfdsfsdfdsf
		</div>
		</div>
			<small class="date"><?php echo $comment->created; ?> </small><br>
			</div>
		<div class="review-content-details">
		<span class="bold">
		<?php echo $comment->title_post; ?>
		</span>        
		</div>
		<?php echo $comment->comment; ?>                 
</div>
<?php } ?>